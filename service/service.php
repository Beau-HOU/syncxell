<?php
//
function truncate_texte($texte, $lenght = 60, $tail = '...')
{
  if (!$texte) {
    return;
  }
  return (strlen($texte) > $lenght) ? substr($texte, 0, $lenght) . $tail : $texte;
}
//

function env()
{
  if ($_SERVER['HTTP_HOST'] != "localhost")
    return "prod";
  else
    return "dev";
}

//
function verifyGoogleCaptcha($response)
{
  $res = api_call("POST", "https://www.google.com/recaptcha/api/siteverify", [
    "secret" => params("app_google_captcha_secret_key"),
    "response" => $response
  ]);

  return json_decode($res, true);
}
/**
 * Code from stackoverflow
 */
function api_call($method, $url, $data = false)
{
  $curl = curl_init();

  switch ($method) {
    case "POST":
      curl_setopt($curl, CURLOPT_POST, 1);

      if ($data)
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      break;
    case "PUT":
      curl_setopt($curl, CURLOPT_PUT, 1);
      break;
    default:
      if ($data)
        $url = sprintf("%s?%s", $url, http_build_query($data));
  }

  // Optional Authentication:
  //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $result = curl_exec($curl);

  curl_close($curl);

  return $result;
}

function isXmlHttpRequest()
{
  return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
}

function goodDate(string $date)
{
  try {
    $d = new \DateTime($date);
  } catch (\Throwable $th) {
    return false;
  }
  return true;
}

function view(string $view)
{
  // afficher une vue
  return getProjetDir() . "templates/" . $view . ".php";
}

/**
 * Generer une suite de carateres aleatoire pour servir d'ID
 * $length: le nombre de caratere voulu
 */
function uniqidReal($lenght = 16)
{
  $bytes = '';
  if (function_exists("random_bytes")) {
    $bytes = random_bytes(ceil($lenght / 2));
  } elseif (function_exists("openssl_random_pseudo_bytes")) {
    $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
  } else {
    return uniqid();
  }
  return substr(bin2hex($bytes), 0, $lenght);
}

function stepInitials(string $name): string
{
  $name = trim($name);
  if ($name === '') return 'XX';

  $parts = preg_split('/\s+/', $name);
  if (!is_array($parts)) $parts = [$name];
  $parts = array_values(array_filter($parts, function ($p) {
    return trim((string)$p) !== '';
  }));
  if (count($parts) === 0) return 'XX';

  $first = (string)$parts[0];
  $second = (string)($parts[1] ?? '');
  $initials = '';
  if ($second !== '') {
    $initials = mb_substr($first, 0, 1) . mb_substr($second, 0, 1);
  } else {
    $initials = mb_substr($first, 0, 2);
  }

  $initials = strtoupper(preg_replace('/[^A-Z0-9]/i', '', (string)$initials));
  if ($initials === '') $initials = 'XX';
  if (strlen($initials) > 4) $initials = substr($initials, 0, 4);
  return $initials;
}

function generateStepUniqId(string $stepName): string
{
  return 'ET-' . stepInitials($stepName) . '-' . rand(1000, 9999);
}

function dd($data)
{
  if (in_array(env(), ['dev', 'local'])) {
    echo '<pre>';
    print_r($data);
    die('</pre>');
  } else {
    //log file
  }
}
function throwException(string $texte = "")
{
  throw new \Exception($texte, 1);
}
function params(string $param)
{
  $params = [
    "app_name"        => "SYNCXELL LLC",
    "app_short_name"  => "SYNCXELL",
    "app_url"         => getProjetUrl(),
    "app_phone"       => "+1 (800) 000-0000",
    "app_email"       => "info@syncxell.com",
    "admin_email"     => "admin@syncxell.com",
    "app_address"     => "United States",
    "app_linkedin"    => "https://www.linkedin.com/company/syncxell",
    "app_logo"        => "images/logo/logo-main.png",
    "app_description" => "Full-spectrum IT solutions for US Federal Government, Banking, and Legal sectors. Cloud, Cybersecurity, NIST/FISMA/CMMC compliance.",
    "app_author"      => getProjetName(),
    "app_keywords"    => ["IT solutions", "federal IT", "cybersecurity", "cloud infrastructure", "NIST", "FISMA", "CMMC"],
    "strapi_url"      => "http://localhost:1337",
    "cage_code"       => "XXXXXX",
    "uei"             => "XXXXXXXXXXXXXXXXX",
    "naics_codes"     => ["541512", "541519", "541611", "518210", "561499"],
  ];
  return isset($params[$param]) ? $params[$param] : throwException("Variable '" . $param . "' no found");
}

function asset(string $asset)
{
  return getProjetUrl() . "asset" . "/" . $asset;
}
function slug($text)
{
  // replace non letter or digits by -
  $text = preg_replace("~[^\pL\d]+~u", '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}

function uploadFile($file, array $extension, int $size, string $folder, string $prefixe)
{
  $act_file_name = basename($file['name']);
  $file_ext = strtolower(pathinfo($act_file_name, PATHINFO_EXTENSION));
  # sans erreur
  if (($file["error"] > 0)) {
    return ["error" => true, "message" => "Erreur du téléchargement"];
  }
  # extension
  if (!in_array($file_ext, $extension)) {
    return ["error" => true, "message" => "Veuillez choisir un fichier de typeé: " . implode(',', $extension)];
  }
  # taille
  if ($file['size'] > $size) {
    return ["error" => true, "message" => "Fichier trop voluminuex"];
  }
  # move file
  $f_name_to_store = $folder . "/" . $prefixe . time() . uniqid() . '.' . $file_ext; // ce quil faut enregistrer
  $path = getProjetDir() . "asset/" . $f_name_to_store;

  try {

    if (move_uploaded_file($file["tmp_name"], $path)) {
      return ["error" => false, "message" => "Download successful", "name" => $f_name_to_store];
    } else {
      return ["error" => true, "message" => "Une erreur est survenue lors du téléchargement de votre image"];
    }
  } catch (\Exception $th) {

    return ["error" => true, "message" => "Une erreur est survenue lors du téléchargement de votre image"];
  }
}
function uploadManyFile($files, array $extension, int $size, string $folder, string $prefixe)
{
  $names = [];
  $ret_error = [
    "error" => false,
    "message" => 'Téléchargement réussi'
  ];

  for ($i = 0; $i < count($files['error']); $i++) {
    //errors
    if ($files['error'][$i] > 0) {
      $ret_error["error"] = true;
      $ret_error['message'] .= "Erreur de téléchargement.  Fichier #" . ($i + 1) . "<br>";
    }
    //extension
    $act_file_name = basename($files['name'][$i]);
    $file_ext = strtolower(pathinfo($act_file_name, PATHINFO_EXTENSION));
    if (!in_array($file_ext, $extension)) {
      $ret_error["error"] = true;
      $ret_error['message'] = "Veuillez choisir un fichier de type: " . implode(',', $extension); //one message
    }
    //size
    if ($files['size'][$i] > $size) {
      $ret_error["error"] = true;
      $ret_error['message'] .= "Fichier trop volumineux. Fichier #" . ($i + 1) . '.<br>';
    }
    //
  }
  if ($ret_error['error']) {
    return $ret_error;
  }
  //
  $names = [];
  for ($i = 0; $i < count($files['name']); $i++) {
    # move file
    $act_file_name = basename($files['name'][$i]);
    $file_ext = strtolower(pathinfo($act_file_name, PATHINFO_EXTENSION));
    //
    $f_name_to_store = $folder . $prefixe . time() . uniqid() . '.' . $file_ext; // ce quil faut enregistrer
    $path = getProjetDir() . "asset/" . $f_name_to_store;

    try {

      if (move_uploaded_file($files["tmp_name"][$i], $path)) {
        $names[] = $f_name_to_store;
      } else {
        $ret_error["error"] = true;
        $ret_error['message'] .= "Une erreur est survenue lors du déplacement du fichier " . $i;
      }
    } catch (\Exception $th) {

      $ret_error["error"] = true;
      $ret_error['message'] .= "Une erreur est survenue lors du déplacement du fichier " . $i;
      //delete old
      for ($y = $i; $y >= 0; $y--) {
        if ($names[$y]) {
          deleteFile($names[$y]);
        }
      }
      //
      return $ret_error;
    }
  }
  return [
    "error" => false,
    "message" => "Téléchargement réussi",
    "names" => $names
  ];
}

function deleteFile(string $relativePath)
{
  if (empty($relativePath)) {
    return;
  }
  $path = getProjetDir() . "asset/" . $relativePath;
  if (file_exists($path)) {
    unlink($path);
  }
}


function create404Exception()
{
  http_response_code(404);
  header("Location:" . getProjetUrl() . "error/404");
  die();
}

function create500Exception()
{
  http_response_code(500);
  header("Location:" . getProjetUrl() . "error/500");
  die();
}

function create403Exception()
{
  http_response_code(403);
  header("Location:" . getProjetUrl() . "error/403");
  die();
}
function getProjetUrl()
{
  if (env() == 'prod') {
    return "https://syncxell.com/";
  }
  return "http://localhost/syncxell/";
}
function getProjetName()
{
  return "SYNCXELL LLC";
}

function getProjetDir()
{
  if (env() == 'prod') {
    return $_SERVER['DOCUMENT_ROOT'] . "/";
  }
  return $_SERVER['DOCUMENT_ROOT'] . "/syncxell/";
}

function formGoodField(array $fields)
{
  foreach ($fields as $f => $type) {
    if ($type == "POST") {
      if (!isset($_POST[$f])) {
        return false;
      }
    } elseif ($type == "FILES") {
      if (!isset($_FILES[$f])) {
        return false;
      }
    }
  }
  return true;
}

function formGoodAndNotEmptyField(array $fields)
{
  foreach ($fields as $f => $type) {
    if ($type == "POST") {
      if (!isset($_POST[$f]) or empty($_POST[$f])) {
        return false;
      }
    } elseif ($type == "FILES") {
      if (!isset($_FILES[$f])) {
        return false;
      }
    }
  }
  return true;
}


/**
 * Cette fonction vérifie que $field se trouve dans $_POST, sinon elle vérifie que $field1 se trouve dans array et affiche sa valeur
 */
function formOldValue($field, $field1 = '', $array = [])
{
  if (isset($_POST[$field])) {
    return htmlspecialchars($_POST[$field]);
  } else {
    if (isset($_GET[$field])) {
      return htmlspecialchars($_GET[$field]);
    } else {
      if (isset($array[$field1])) {
        return $array[$field1];
      } else {
        return false;
      }
    }
  }
}

function formFieldError($array, $field)
{
  echo isset($array[$field]) ? htmlspecialchars($array[$field]) : "";
}

function purifyString($var)
{
  return stripslashes(trim(htmlspecialchars($var)));
}

function flash(string $type, string $message)
{
  if (!in_array($type, ["success", "error", "warning", "info"])) {
    throw new \Exception('"' . $type . '" n\'est pas un type de message flash valide. Utilisez: success, error, warning, info');
  }
  if (isset($_SESSION)) {
    $_SESSION[$type] = $message;
    return true;
  }
}

function createAccessDeniedException()
{
  http_response_code(403);
  header("Location:" . getProjetUrl() . "error/403");
  die();
}

function denyAccessUnlessGranted(string $role)
{
  if ($role === "user") {
    if (User::isGranted('user')) {
      return true;
    }
    if (User::loginWithCookie() && User::isGranted('user')) {
      return true;
    }
    header("Location:" . m_path('user.login', [], true));
    exit(0);
  } elseif ($role === "admin") {
    if (User::isGranted('admin')) {
      return true;
    }
    if (User::loginAdminWithCookie() && User::isGranted('admin')) {
      return true;
    }
    if (User::isGranted('user')) {
      createAccessDeniedException();
    }
    header("Location:" . m_path('admin.login', [], true));
    exit(0);
  }
}

function datedifferences($date1, $date2)
{
  // Créez des objets DateTime à partir des chaînes de date
  $datetime1 = new DateTime($date1);
  $datetime2 = new DateTime($date2);

  // Calculez la différence entre les deux dates
  $interval = $datetime1->diff($datetime2);

  // Obtenez les valeurs de la différence sous forme d'un tableau associatif
  $duration = array(
    'years' => $interval->y,
    'months' => $interval->m,
    'days' => $interval->d,
    'hours' => $interval->h,
    'minutes' => $interval->i,
    'seconds' => $interval->s,
  );
  return $duration;
}



//
function auth()
{
  return User::AuthUser();
}

//////vik

function auth_admin()
{
  return User::AuthUser_admin();
}

function pagination($numPage, $numberPerPage, $total)
{
  $calc = $total - (($numPage - 1) * $numberPerPage);
  if ($calc < 0)
    return 1;
  else
    return $calc;
}

function authCustomer()
{
  if (isset($_SESSION["trusted-customer"]) && $_SESSION["trusted-customer"]) {
    return true;
  }
  return true;
}

function generate_otp_code(): int
{
  return random_int(100000, 999999);
}


function calculateTimeDifference($date)
{
  // Convertit la date en timestamp
  $taskDate = strtotime($date);

  // Obtient le timestamp actuel
  $currentTime = time();

  // Calcule la différence en secondes
  $difference = $currentTime - $taskDate;

  // Convertit la différence en unités plus lisibles (minutes, heures, jours, mois)
  if ($difference < 60) {
    $formattedDifference = "Il y a 0 minutes";
  } elseif ($difference < 3600) {
    $minutes = floor($difference / 60);
    $formattedDifference = "Il y a $minutes minute(s)";
  } elseif ($difference < 86400) {
    $hours = floor($difference / 3600);
    $formattedDifference = "Il y a $hours heure(s)";
  } elseif ($difference < 2592000) {
    $days = floor($difference / 86400);
    $formattedDifference = "Il y a $days jour(s)";
  } elseif ($difference < 31536000) {
    $months = floor($difference / 2592000);
    $formattedDifference = "Il y a $months mois";
  } else {
    $years = floor($difference / 31536000);
    $formattedDifference = "Il y a $years an(s)";
  }


  return $formattedDifference;
}


function calculateTimeDifference2($date)
{
  $taskDate = strtotime($date);

  $currentTime = time();

  $difference = $currentTime - $taskDate;

  if ($difference < 60) {
    $formattedDifference = "Il y a 0 minutes";
  } elseif ($difference < 3600) {
    $minutes = floor($difference / 60);
    $formattedDifference = "Il y a $minutes minute(s)";
  } elseif ($difference < 86400) {
    $hours = floor($difference / 3600);
    $formattedDifference = "Il y a $hours heure(s)";
  } elseif ($difference < 2592000) {
    $days = floor($difference / 86400);
    $formattedDifference = "Il y a $days jour(s)";
  } elseif ($difference < 31536000) {
    $months = floor($difference / 2592000);
    $formattedDifference = "Il y a $months mois";
  } else {
    $years = floor($difference / 31536000);
    $formattedDifference = "Il y a $years an(s)";
  }


  return $formattedDifference;
}


function isPdf($filename)
{
  $file_info = pathinfo($filename);
  return isset($file_info['extension']) && strtolower($file_info['extension']) === 'pdf';
}


function getFlashMessage($key)
{
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  if (isset($_SESSION[$key])) {
    $message = $_SESSION[$key];
    // 

    return $message;
  }
  return null;
}



function extractTextFromPDF($pdfFile)
{
  // Créer une instance de Parser
  $parser = new Parser();

  // Ouvrir le fichier PDF
  $pdf = $parser->parseFile($pdfFile);

  // Extraire le texte
  $text = $pdf->getText();

  return $text;
}


function formatDateInFr($date)
{
  // Vérifie si la date est valide
  if (strtotime($date)) {
    // Crée un formateur de date avec le locale français
    $formatter = new IntlDateFormatter(
      'fr_FR',
      IntlDateFormatter::LONG,
      IntlDateFormatter::NONE
    );

    // Convertit la date en format DateTime
    $dateTime = new DateTime($date);

    // Retourne la date formatée
    return $formatter->format($dateTime);
  } else {
    return "Date invalide";
  }
}


function formatDateTimeInFr($date)
{
  // Vérifie si la date est valide
  if (strtotime($date)) {
    // Crée un formateur de date avec le locale français et inclut l'heure
    $formatter = new IntlDateFormatter(
      'fr_FR',
      IntlDateFormatter::LONG, // Format de la date
      IntlDateFormatter::SHORT // Format de l'heure
    );

    // Convertit la date en format DateTime
    $dateTime = new DateTime($date);

    // Retourne la date et l'heure formatées
    return $formatter->format($dateTime);
  } else {
    return "Date invalide";
  }
}



function formatDateMonthYearInFr($date)
{
  // Vérifie si la date est valide
  if (strtotime($date)) {
    // Crée un formateur de date avec le locale français et un modéle personnalisé
    $formatter = new IntlDateFormatter(
      'fr_FR',
      IntlDateFormatter::NONE, // Pas besoin d'un format standard
      IntlDateFormatter::NONE,
      null,
      null,
      'MMMM yyyy' // Modéle pour afficher uniquement le mois et l'année
    );

    // Convertit la date en format DateTime
    $dateTime = new DateTime($date);

    // Retourne la date formatée
    return $formatter->format($dateTime);
  } else {
    return "Date invalide";
  }
}


function formatDateFrench($dateString)
{
  // Tableau des mois en anglais et leur traduction en français
  $months = [
    'January' => 'Janvier',
    'February' => 'Février',
    'March' => 'Mars',
    'April' => 'Avril',
    'May' => 'Mai',
    'June' => 'Juin',
    'July' => 'Juillet',
    'August' => 'Août',
    'September' => 'Septembre',
    'October' => 'Octobre',
    'November' => 'Novembre',
    'December' => 'Décembre'
  ];

  // Conversion de la chaîne de date en timestamp
  $timestamp = strtotime($dateString);

  // Extraction du jour de la date
  $day = date('d', $timestamp);  // Jour
  // Traduction du mois en français
  $month = $months[date('F', $timestamp)];  // Mois en français
  // Extraction de l'année de la date
  $year = date('Y', $timestamp);  // Année

  // Retour de la date formatée
  return "$day $month $year";
}

/**
 * Author Henoc VIK
 */
function excerpt(string $text, int $wordLimit = 20): string
{
  $text = strip_tags($text);
  $words = preg_split('/\s+/', $text);
  if (count($words) <= $wordLimit) {
    return implode(' ', $words);
  }
  return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
}

function excerptChars(string $text, int $charLimit = 100): string
{
  // Supprimer les balises HTML
  $text = strip_tags($text);

  // Si le texte est plus court que la limite, on retourne tel quel
  if (mb_strlen($text) <= $charLimit) {
    return $text;
  }

  // Découpe directe (slice)
  return mb_substr($text, 0, $charLimit) . '...';
}


/**
 * Author Henoc VIK
 */
function formatDateFrench2(string $dateString, bool $withTime = false): string
{
  $months = [
    'January' => 'janvier',
    'February' => 'février',
    'March' => 'mars',
    'April' => 'avril',
    'May' => 'mai',
    'June' => 'juin',
    'July' => 'juillet',
    'August' => 'août',
    'September' => 'septembre',
    'October' => 'octobre',
    'November' => 'novembre',
    'December' => 'décembre'
  ];

  $timestamp = strtotime($dateString);
  if (!$timestamp) return 'Date invalide';

  $day = date('d', $timestamp);
  $month = $months[date('F', $timestamp)];
  $year = date('Y', $timestamp);

  if ($withTime) {
    $hour = date('H', $timestamp);
    $minute = date('i', $timestamp);
    return "$day $month $year é {$hour}h{$minute}";
  } else {
    return "$day $month $year";
  }
}

function assetDir(string $asset)
{
  return getProjetDir() . "asset" . "/" . $asset;
}

// Fonction de chiffrement AES-256-CBC
function encryptData($data, $key)
{
  // Générer un IV aléatoire de 16 octets
  $iv = "^pé:r@#{[@#346a";

  // Chiffrement des données
  $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);

  // Combiner le résultat chiffré et l'IV dans un format que l'on peut stocker (base64)
  $encrypted_data = base64_encode($encrypted . '::' . $iv);

  return $encrypted_data;
}

// Fonction de déchiffrement AES-256-CBC
function decryptData($encrypted_data, $key)
{
  // Décoder la donnée cryptée et l'IV depuis le format base64
  list($encrypted, $iv) = explode('::', base64_decode($encrypted_data), 2);

  // Déchiffrement des données avec l'IV
  $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, '^pé:r@#{[@#346a');

  return $decrypted;
}

function decryptData2($encrypted_data, $key)
{
  $decoded = base64_decode($encrypted_data, true); // true => return false si invalide

  if (!$decoded || strpos($decoded, '::') === false) {
    // Format base64 invalide ou séparateur "::" manquant
    return false;
  }

  list($encrypted, $iv) = explode('::', $decoded, 2);

  // Le IV utilisé ici est fixe, pas celui du cryptage => attention
  $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, '^pé:r@#{[@#346a');

  return $decrypted;
}

$lang = 'fr'; // Ou 'en' selon la langue choisie


function getInitials(string $fullName): string
{
  $fullName = trim($fullName);

  if ($fullName === '') {
    return '';
  }

  // Découper le nom (gestion des espaces multiples)
  $parts = preg_split('/\s+/', $fullName);

  // Un seul mot ? 1 initiale
  if (count($parts) === 1) {
    return strtoupper(mb_substr($parts[0], 0, 1));
  }

  // Deux mots ou plus ? premier + deuxiéme
  return strtoupper(
    mb_substr($parts[0], 0, 1) .
      mb_substr($parts[1], 0, 1)
  );
}

$translations = [
  'fr' => [
   
  ],




  'en' => [
    
  ],
];
