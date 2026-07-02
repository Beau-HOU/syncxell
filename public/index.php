<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$pageTitle  = 'Full-Spectrum IT Solutions for Government & Enterprise';
$pageDesc   = 'SYNCXELL LLC delivers secure, scalable IT services for US Federal/Local Government, Banking, and Legal sectors. NIST, FISMA, CMMC, AWS GovCloud, Azure Government.';
$activePage = 'home';

// ── Testimonials (3 max sur la home) ──────────────────────
$testimonials = strapi_get('testimonials', [
    'filters[publishedAt][$notNull]' => true,
    'sort[0]'            => 'createdAt:desc',
    'pagination[limit]'  => 3,
    'populate'           => '*',
]) ?? [];

// ── Blog posts (4 derniers) ───────────────────────────────
$blogPosts = strapi_get('blog-posts', [
    'filters[publishedAt][$notNull]' => true,
    'sort[0]'            => 'publishedAt:desc',
    'pagination[limit]'  => 4,
    'populate'           => '*',
]) ?? [];

// ── Case studies (6 max sur la home) ─────────────────────
$caseStudies = strapi_get('case-studies', [
    'filters[publishedAt][$notNull]' => true,
    'sort[0]'            => 'publishedAt:desc',
    'pagination[limit]'  => 6,
    'populate'           => '*',
]) ?? [];

// ── Services (optionnel — 6 max) ─────────────────────────
$services = strapi_get('service-categories', [
    'sort[0]'            => 'display_order:asc',
    'pagination[limit]'  => 6,
    'populate'           => '*',
]) ?? [];

include view('public/home-page');
