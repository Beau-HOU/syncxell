<?php
function m_path(string $path, $params = [], bool $absolute = false)
{
  $urls = [
    // Public
    "home"           => "",
    "about"          => "about",
    "services"       => "services",
    "service.detail" => "services/*",
    "service.sub"    => "services/*/*",
    "gov.hub"        => "government-hub",
    "case.studies"   => "case-studies",
    "case.detail"    => "case-studies/*",
    "blog"           => "blog",
    "blog.detail"    => "blog/*",
    "contact"        => "contact",
    "rfq"            => "request-for-quote",

    // AJAX
    "ajax.rfq"       => "ajax/rfq",
    "ajax.contact"   => "ajax/contact",
  ];

  if (!isset($urls[$path])) {
    throwException("Url pour '" . $path . "' non trouvé");
  }

  $b = $urls[$path];

  if (!empty($params)) {
    if (strpos($b, '*') !== false) {
      foreach ($params as $value) {
        $b = preg_replace('/\*/', $value, $b, 1);
      }
    } else {
      $b .= '?' . http_build_query($params);
    }
  }

  return $absolute ? getProjetUrl() . $b : $b;
}
