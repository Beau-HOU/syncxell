<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$posts = strapi_get('blog-posts', [
    'sort[0]'    => 'published_date:desc',
    'populate'   => '*',
]) ?? [];

// Sidebar : recent posts (3) + tags agrégés
$recentPosts = array_slice($posts, 0, 3);
$allTags = [];
foreach ($posts as $p) {
    foreach (($p['tags'] ?? []) as $t) $allTags[$t] = true;
}
$allTags = array_keys($allTags);

$pageTitle  = 'Tech Insights & News';
$pageDesc   = 'Cybersecurity compliance, cloud infrastructure, and federal IT insights from SYNCXELL LLC experts.';
$activePage = 'blog';
include view('public/blog-page');
