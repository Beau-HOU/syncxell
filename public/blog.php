<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$allPosts = strapi_get('blog-posts', [
    'sort[0]'    => 'published_date:desc',
    'populate'   => '*',
]) ?? [];

// Sidebar : recent posts (3) + tags agrégés + compteurs catégories (sur le total, pas le filtré)
$recentPosts = array_slice($allPosts, 0, 3);
$allTags = [];
$categoryCounts = [];
foreach ($allPosts as $p) {
    foreach (($p['tags'] ?? []) as $t) $allTags[$t] = true;
    if (!empty($p['category'])) {
        $categoryCounts[$p['category']] = ($categoryCounts[$p['category']] ?? 0) + 1;
    }
}
$allTags = array_keys($allTags);

$blogCategories = [
    'news'         => 'News',
    'insight'      => 'Insights',
    'compliance'   => 'Compliance',
    'case_study'   => 'Case Studies',
    'announcement' => 'Announcements',
];

// Filtres : recherche + catégorie
$search         = trim($_GET['s'] ?? '');
$activeCategory = trim($_GET['category'] ?? '');
if (!isset($blogCategories[$activeCategory])) $activeCategory = '';
$activeTag      = trim($_GET['tag'] ?? '');

$posts = $allPosts;
if ($search !== '') {
    $needle = mb_strtolower($search);
    $posts = array_values(array_filter($posts, function ($p) use ($needle) {
        $haystack = mb_strtolower(($p['title'] ?? '') . ' ' . ($p['excerpt'] ?? '') . ' ' . strip_tags($p['body'] ?? ''));
        return str_contains($haystack, $needle);
    }));
}
if ($activeCategory !== '') {
    $posts = array_values(array_filter($posts, fn($p) => ($p['category'] ?? '') === $activeCategory));
}
if ($activeTag !== '') {
    $posts = array_values(array_filter($posts, fn($p) => in_array($activeTag, $p['tags'] ?? [], true)));
}

// Pagination
$perPage    = 5;
$totalPosts = count($posts);
$totalPages = max(1, (int)ceil($totalPosts / $perPage));
$page       = max(1, min($totalPages, (int)($_GET['page'] ?? 1)));
$posts      = array_slice($posts, ($page - 1) * $perPage, $perPage);

// Construit l'URL /blog en préservant les filtres actifs
function blog_url(array $overrides = []): string
{
    $params = array_filter([
        's'        => trim($_GET['s'] ?? ''),
        'category' => trim($_GET['category'] ?? ''),
        'tag'      => trim($_GET['tag'] ?? ''),
    ], fn($v) => $v !== '');
    $params = array_merge($params, $overrides);
    $params = array_filter($params, fn($v) => $v !== '' && $v !== null);
    return m_path('blog', $params, true);
}

$pageTitle  = 'Tech Insights & News';
$pageDesc   = 'Cybersecurity compliance, cloud infrastructure, and federal IT insights from SYNCXELL LLC experts.';
$activePage = 'blog';
include view('public/blog-page');
