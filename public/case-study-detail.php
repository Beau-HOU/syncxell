<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$slug = trim($_GET['slug'] ?? '');
if (!$slug) create404Exception();

$result = strapi_get('case-studies', [
    'filters[slug][$eq]' => $slug,
    'populate'           => '*',
]);
if (empty($result)) create404Exception();
$study = $result[0];

$pageTitle  = $study['meta_title']       ?? ($study['title'] . ' — Case Study');
$pageDesc   = $study['meta_description'] ?? excerptChars(strip_tags($study['challenge'] ?? ''), 160);
$activePage = 'case-studies';
include view('public/case-study-detail-page');
