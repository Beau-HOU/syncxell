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

$recentPosts = strapi_get('blog-posts', [
    'sort[0]'    => 'published_date:desc',
    'populate'   => '*',
]) ?? [];
$recentPosts = array_slice(array_filter($recentPosts, fn($p) => $p['slug'] !== $slug), 0, 3);

$pageTitle  = $post['meta_title']       ?? ($post['title'] . ' — SYNCXELL LLC');
$pageDesc   = $post['meta_description'] ?? $post['excerpt'] ?? '';
$activePage = 'blog';
include view('public/blog-detail-page');
