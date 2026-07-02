<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$pageTitle  = 'Our Solutions — SYNCXELL LLC';
$pageDesc   = 'Full-spectrum IT solutions for US Federal Government, Banking, and Legal: Software Development, Cloud, Cybersecurity, Network, Data & Analytics, Virtualization.';
$activePage = 'services';

$services = strapi_get('service-categories', [
    'sort[0]'  => 'display_order:asc',
    'populate' => '*',
]) ?? [];

include view('public/services-page');
