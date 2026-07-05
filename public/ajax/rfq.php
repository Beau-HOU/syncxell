<?php
session_start();
require_once '../../service/url.php';
require_once '../../service/service.php';
require_once '../../service/strapi.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Required fields
$required = ['contact_first_name', 'contact_last_name', 'contact_email', 'organization', 'sector', 'project_description', 'consent_to_contact'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
        exit;
    }
}

$payload = [
    'contact_first_name'  => trim($_POST['contact_first_name']),
    'contact_last_name'   => trim($_POST['contact_last_name']),
    'contact_email'       => trim($_POST['contact_email']),
    'contact_phone'       => trim($_POST['contact_phone'] ?? '') ?: null,
    'organization'        => trim($_POST['organization']),
    'sector'              => $_POST['sector'],
    'project_description' => trim($_POST['project_description']),
    'federal_agency'      => trim($_POST['federal_agency']      ?? '') ?: null,
    'solicitation_number' => trim($_POST['solicitation_number'] ?? '') ?: null,
    'municipality_name'   => trim($_POST['municipality_name']   ?? '') ?: null,
    'consent_to_contact'  => true,
    'services_requested'  => $_POST['services_requested'] ?? [],
    'compliance_needs'    => $_POST['compliance_needs']   ?? [],
];

// Optional enum fields — null if empty string
foreach (['desired_timeline', 'it_budget_range', 'how_did_you_hear', 'set_aside_type'] as $f) {
    $v = $_POST[$f] ?? '';
    $payload[$f] = $v !== '' ? $v : null;
}

// Étape 1 — créer l'entrée RFQ (sans les fichiers)
$result = strapi_post('rfq-submissions', $payload);

if ($result === null) {
    error_log('RFQ: strapi_post returned null — Strapi may be down or unreachable');
    echo json_encode(['success' => false, 'message' => 'Could not reach the submission service. Please try again or email us directly.']);
    exit;
}

if (empty($result['data']['id']) || !empty($result['error'])) {
    $strapiMsg = $result['error']['message'] ?? null;
    error_log('RFQ Strapi error: ' . json_encode($result));
    echo json_encode([
        'success' => false,
        'message' => $strapiMsg ?: 'Submission failed. Please try again or email us directly.',
    ]);
    exit;
}

$entryId = (int) $result['data']['id'];

// Étape 2 — upload des fichiers RFP liés à l'entrée créée
if (!empty($_FILES['rfp_documents']['tmp_name'])) {
    $f        = $_FILES['rfp_documents'];
    $tmpNames = is_array($f['tmp_name']) ? $f['tmp_name'] : [$f['tmp_name']];
    $names    = is_array($f['name'])     ? $f['name']     : [$f['name']];
    $types    = is_array($f['type'])     ? $f['type']     : [$f['type']];
    $errors   = is_array($f['error'])    ? $f['error']    : [$f['error']];

    foreach ($tmpNames as $i => $tmp) {
        if ($errors[$i] !== UPLOAD_ERR_OK || empty($tmp)) continue;
        strapi_upload(
            $tmp,
            $names[$i],
            $types[$i] ?: 'application/octet-stream',
            $entryId,
            'api::rfq-submission.rfq-submission',
            'rfp_documents'
        );
    }
}

echo json_encode(['success' => true]);
