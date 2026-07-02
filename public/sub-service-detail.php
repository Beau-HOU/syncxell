<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$categorySlug = trim($_GET['category'] ?? '');
$slug         = trim($_GET['slug']     ?? '');
if (!$categorySlug || !$slug) create404Exception();

// Fetch the sub-service
$result = strapi_get('sub-services', [
    'filters[slug][$eq]' => $slug,
    'populate'           => '*',
]);
if (empty($result)) create404Exception();
$subService = $result[0];

// Fetch the parent category (for sidebar + breadcrumb)
$catResult = strapi_get('service-categories', [
    'filters[slug][$eq]' => $categorySlug,
    'populate'           => '*',
]);
$category = !empty($catResult) ? $catResult[0] : null;

// All categories for sidebar
$allCategories = strapi_get('service-categories', [
    'sort[0]'   => 'display_order:asc',
    'fields[0]' => 'name',
    'fields[1]' => 'slug',
]) ?? [];

$pageTitle  = $subService['meta_title']       ?? ($subService['name'] . ' — SYNCXELL LLC');
$pageDesc   = $subService['meta_description'] ?? $subService['tagline'] ?? '';
$activePage = 'services';

include view('public/sub-service-detail-page');
