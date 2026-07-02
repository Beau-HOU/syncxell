<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$slug = trim($_GET['slug'] ?? '');
if (!$slug) create404Exception();

$result = strapi_get('service-categories', [
    'filters[slug][$eq]' => $slug,
    'populate'           => '*',
]);
if (empty($result)) create404Exception();
$category = $result[0];

// All categories for sidebar
$allCategories = strapi_get('service-categories', [
    'sort[0]'   => 'display_order:asc',
    'fields[0]' => 'name',
    'fields[1]' => 'slug',
]) ?? [];

$pageTitle  = $category['meta_title']       ?? ($category['name'] . ' — SYNCXELL LLC');
$pageDesc   = $category['meta_description'] ?? $category['short_description'] ?? '';
$activePage = 'services';

include view('public/service-detail-page');
