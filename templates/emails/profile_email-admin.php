<?php 
// require_once '../../service/service.php'; 
// require_once('../../service/url.php');
// require_once('../../service/service.php');
// require_once('../../config.php');
// require "../../model/Contact.php";
// require "../../model/Service.php";
// require "../../model/EvaluationProfile.php";

// require_once '../../vendor/autoload.php';

// $payload = EvaluationProfile::getAll([
//     "select" => "*",
//     "orderBy" => "id DESC",
//     "limit" => 1
// ])[0];

// // dd($evaluation);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouvelle demande d'évaluation - <?= params('app_short_name') ?></title>
</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<!-- Preheader -->
<div style="display:none; opacity:0; height:0; overflow:hidden;">
  Nouvelle demande d'évaluation de profil
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f6f9fc; padding:20px 0;">
<tr>
<td align="center">

<table width="600" cellspacing="0" cellpadding="0" border="0"
style="max-width:600px; width:100%; background:#ffffff; border-radius:6px; overflow:hidden;">

<!-- Logo -->
<tr>
<td style="padding:10px; text-align:center;">
<a href="<?= params('app_url') ?>">
<img src="<?= asset('img/logo/logo.png') ?>" width="160" style="display:block; margin:auto;">
</a>
</td>
</tr>

<!-- Titre -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
Nouvelle demande d'évaluation de profil
</h2>
</td>
</tr>

<!-- Contenu -->
<tr>
<td style="padding:0 30px 20px; font-size:15px; color:#333; line-height:1.6;">
Bonjour Administrateur <,<br><br>

Un utilisateur vient de soumettre une <b>demande d'évaluation de profil</b> sur
<b><?= params('app_short_name') ?></b>.  
Voici les informations reçues :

<br><br>

<table width="100%" cellpadding="0" cellspacing="0" style="font-size:14px;">

<!-- Identité -->
<tr><td colspan="2"><strong style="color:#ec4848;">Informations personnelles</strong></td></tr>
<tr><td><strong>Nom :</strong></td><td><?= $payload['last_name'] ?></td></tr>
<tr><td><strong>Prénoms :</strong></td><td><?= $payload['first_names'] ?></td></tr>
<tr><td><strong>Email :</strong></td><td><?= $payload['email'] ?></td></tr>
<tr><td><strong>Téléphone :</strong></td><td><?= $payload['phone'] ?></td></tr>
<tr><td><strong>Date de naissance :</strong></td><td><?= $payload['date_of_birth'] ?></td></tr>
<tr><td><strong>Sexe :</strong></td><td><?= ucfirst($payload['gender']) ?></td></tr>
<tr><td><strong>Situation matrimoniale :</strong></td><td><?= $payload['marital_status'] ?></td></tr>

<?php if (!empty($payload['visa_name'] ?? '')): ?>
<tr><td><strong>Type de visa souhaité :</strong></td><td><?= htmlspecialchars((string)($payload['visa_name'] ?? '')) ?></td></tr>
<?php endif; ?>


</table>

<br>
Merci de procéder à l'évaluation du profil dans l'espace administrateur.
</td>
</tr>

<!-- Footer -->
<tr>
<td style="padding:20px; font-size:12px; text-align:center; color:#777; border-top:1px solid #eee;">
Â© <?= date('Y') ?> <?= params('app_short_name') ?> – Tous droits réservés
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>
