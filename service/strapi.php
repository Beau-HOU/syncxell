<?php
/**
 * Strapi v5 API client
 */

function strapi_get(string $endpoint, array $query = []): ?array
{
    $base  = defined('STRAPI_URL') ? STRAPI_URL : 'http://127.0.0.1:1337';
    $token = defined('STRAPI_TOKEN') ? STRAPI_TOKEN : '';

    $url = rtrim($base, '/') . '/api/' . ltrim($endpoint, '/');
    if (!empty($query)) {
        $url .= '?' . http_build_query($query);
    }

    $headers = ['Content-Type: application/json'];
    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 5,
        CURLOPT_HTTPHEADER     => $headers,
    ]);

    $result = curl_exec($ch);
    $err    = curl_errno($ch);
    curl_close($ch);

    if ($err || !$result) return null;

    $decoded = json_decode($result, true);
    return $decoded['data'] ?? null;
}

function strapi_post(string $endpoint, array $body): ?array
{
    $base  = defined('STRAPI_URL') ? STRAPI_URL : 'http://127.0.0.1:1337';
    $token = defined('STRAPI_TOKEN') ? STRAPI_TOKEN : '';

    $headers = ['Content-Type: application/json'];
    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    $ch = curl_init(rtrim($base, '/') . '/api/' . ltrim($endpoint, '/'));
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode(['data' => $body]),
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_HTTPHEADER     => $headers,
    ]);

    $result   = curl_exec($ch);
    $curlErr  = curl_errno($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($curlErr || !$result) {
        error_log('Strapi POST curl error ' . $curlErr . ' on ' . $endpoint);
        return null;
    }
    $decoded = json_decode($result, true);
    if ($httpCode >= 400) {
        error_log('Strapi POST ' . $httpCode . ' on ' . $endpoint . ': ' . $result);
    }
    return $decoded;
}

/**
 * Upload un fichier vers Strapi (/api/upload) et le lie à une entrée existante.
 * refId  = id entier de l'entrée
 * ref    = uid du content-type (ex: "api::rfq-submission.rfq-submission")
 * field  = nom du champ média (ex: "rfp_documents")
 */
function strapi_upload(string $tmpPath, string $filename, string $mimeType, int $refId, string $ref, string $field): ?int
{
    $base  = defined('STRAPI_URL') ? STRAPI_URL : 'http://127.0.0.1:1337';
    $token = defined('STRAPI_TOKEN') ? STRAPI_TOKEN : '';

    $headers = [];
    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    $ch = curl_init(rtrim($base, '/') . '/api/upload');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => [
            'files'  => new CURLFile($tmpPath, $mimeType, $filename),
            'refId'  => (string) $refId,
            'ref'    => $ref,
            'field'  => $field,
        ],
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_HTTPHEADER     => $headers,
    ]);

    $result  = curl_exec($ch);
    $curlErr = curl_errno($ch);
    curl_close($ch);

    if ($curlErr || !$result) {
        error_log('Strapi upload curl error ' . $curlErr . ' for ' . $filename);
        return null;
    }
    $decoded = json_decode($result, true);
    return $decoded[0]['id'] ?? null;
}

/**
 * Normalise v4 ({ attributes:{} }) et v5 (champs à la racine)
 */
function strapi_attr(array $item): array
{
    return $item['attributes'] ?? $item;
}

/**
 * Extrait l'URL d'un champ media Strapi (v4 et v5).
 * Retourne l'URL absolue ou null si non disponible.
 */
function strapi_img(?array $media): ?string
{
    if (empty($media)) return null;

    $base = defined('STRAPI_URL') ? STRAPI_URL : 'http://127.0.0.1:1337';

    // Strapi v5 : { url: "/uploads/..." }
    $url = $media['url']
        // Strapi v4 : { data: { attributes: { url: "..." } } }
        ?? $media['data']['attributes']['url']
        ?? null;

    if (!$url) return null;

    return str_starts_with($url, 'http') ? $url : rtrim($base, '/') . $url;
}
