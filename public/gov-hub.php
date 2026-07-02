<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$faqs = strapi_get('faqs', [
    'sort[0]'  => 'display_order:asc',
    'populate' => '*',
]) ?? [];

$faqsByCategory = ['general' => [], 'security' => [], 'procurement' => [], 'services' => []];
foreach ($faqs as $faq) {
    $sector = $faq['target_sector'] ?? 'all';
    if (!in_array($sector, ['federal', 'all'])) continue;
    $cat = $faq['category'] ?? 'general';
    if (array_key_exists($cat, $faqsByCategory)) {
        $faqsByCategory[$cat][] = $faq;
    }
}

$pageTitle  = 'Government Hub — Federal IT Solutions';
$pageDesc   = 'NIST SP 800-53, FISMA ATO, CMMC compliance and federal IT contracting resources for U.S. government agencies — SYNCXELL LLC.';
$activePage = 'gov-hub';

include view('public/gov-hub-page');
