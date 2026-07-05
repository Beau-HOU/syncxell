<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$slug = trim($_GET['slug'] ?? '');
if (!$slug) create404Exception();

$result = strapi_get('blog-posts', [
    'filters[slug][$eq]' => $slug,
    'populate'           => '*',
]);
if (empty($result)) create404Exception();
$post = $result[0];

$allPosts = strapi_get('blog-posts', [
    'sort[0]'    => 'published_date:desc',
    'populate'   => '*',
]) ?? [];

// Prev/Next : liste triée du plus récent au plus ancien
$prevPost = null;
$nextPost = null;
foreach (array_values($allPosts) as $i => $p) {
    if (($p['slug'] ?? '') === $slug) {
        $nextPost = $allPosts[$i - 1] ?? null;
        $prevPost = $allPosts[$i + 1] ?? null;
        break;
    }
}

$recentPosts = array_slice(array_filter($allPosts, fn($p) => $p['slug'] !== $slug), 0, 3);

$blogCategories = [
    'news'         => 'News',
    'insight'      => 'Insights',
    'compliance'   => 'Compliance',
    'case_study'   => 'Case Studies',
    'announcement' => 'Announcements',
];
$categoryCounts = [];
foreach ($allPosts as $p) {
    if (!empty($p['category'])) {
        $categoryCounts[$p['category']] = ($categoryCounts[$p['category']] ?? 0) + 1;
    }
}
$allTags = [];
foreach ($allPosts as $p) {
    foreach (($p['tags'] ?? []) as $t) $allTags[$t] = true;
}
$allTags = array_keys($allTags);

$pageTitle  = $post['meta_title']       ?? ($post['title'] . ' — SYNCXELL LLC');
$pageDesc   = $post['meta_description'] ?? $post['excerpt'] ?? '';
$activePage = 'blog';
include view('public/blog-detail-page');
