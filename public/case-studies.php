<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
require_once '../service/strapi.php';

$studies = strapi_get('case-studies', [
    'sort[0]'    => 'is_featured:desc',
    'sort[1]'    => 'title:asc',
    'populate'   => '*',
]) ?? [];

$sectorLabels = [
    'federal'   => 'Federal Government',
    'local_gov' => 'Local & Municipal Gov',
    'banking'   => 'Banking & Finance',
    'legal'     => 'Legal',
    'other'     => 'Other Industries',
];

// Onglets : uniquement les secteurs réellement présents
$activeSectors = [];
foreach ($studies as $cs) {
    $s = $cs['client_sector'] ?? '';
    if (isset($sectorLabels[$s])) $activeSectors[$s] = $sectorLabels[$s];
}

$pageTitle  = 'Case Studies & Past Performance';
$pageDesc   = 'Proven results across Federal Government, Banking, and Legal sectors — cloud migrations, compliance authorizations, and mission-critical IT delivery by SYNCXELL LLC.';
$activePage = 'case-studies';
include view('public/case-studies-page');
