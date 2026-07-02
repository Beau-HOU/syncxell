<?php 
// require_once '../../service/service.php'; 
// require_once('../../service/url.php');
// require_once('../../config.php');
// require "../../model/Rdv.php";
// require "../../model/RdvDate.php";
// require "../../model/RdvHour.php";

// require_once '../../vendor/autoload.php';

// $rdv = Rdv::getAll([
//     "select" => "*",
//     "orderBy" => "id DESC",
//     "limit" => 10
// ])[2];
// $message = $rdv["subject"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rendez-vous confirmé - <?= params('app_short_name') ?></title>
</head>
<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<!-- Preheader -->
<div style="display:none; opacity:0; height:0; overflow:hidden;">
  Bonne nouvelle ! Votre rendez-vous a été confirmé .
</div>

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f6f9fc; padding:20px 0;">
<tr><td align="center">

<table width="600" cellpadding="0" cellspacing="0" border="0"
style="max-width:600px; width:100%; background:#ffffff; border-radius:6px; overflow:hidden;">

<!-- Logo -->
<tr>
<td style="padding:10px; text-align:center; background:#ffffff;">
<a href="<?= params('app_url') ?>">
<img src="<?= asset('img/logo/logo.png') ?>" width="160"
alt="<?= params('app_short_name') ?>" style="display:block;margin:auto;border:0;">
</a>
</td>
</tr>

<!-- Titre -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0;font-size:24px;font-weight:bold;color:#28a745;">
Votre rendez-vous est confirmé !
</h2>
</td>
</tr>

<!-- Contenu -->
<tr>
<td style="padding:0 30px 20px;color:#333;font-size:15px;line-height:1.6;">

Bonjour <?= $rdv["user_name"] ?> <,<br><br>

Nous avons le plaisir de vous informer que votre rendez-vous avec notre agence d'immigration
a été <strong style="color:#28a745;">accepté et confirmé</strong> par le consultant .<br>
Voici les informations de votre rendez-vous :

<br><br>

<table width="100%" cellpadding="0" cellspacing="0" style="font-size:15px;color:#333;line-height:1.6;">

<tr>
<td width="45%" style="padding:4px 0;"><strong style="color:#dc3545;"> Nom & Prénom :</strong></td>
<td><?= $rdv["user_name"] ?></td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Email :</strong></td>
<td><?= $rdv["email"] ?></td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Téléphone :</strong></td>
<td><?= $rdv["phone"] ?></td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Objet :</strong></td>
<td><?= $rdv["subject"] ?></td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Date & Heure :</strong></td>
<td><?= $rdv["rdv_date"] ?></td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Canal :</strong></td>
<td>
  <?php if (($rdv['lieu'] ?? '') === 'presentiel'): ?>
    <?php if (!empty($rdv['agency'])): ?>
      En agence - <?= ($rdv['agency']) ?>
    <?php else: ?>
      En agence
    <?php endif; ?>
  <?php else: ?>
    <?= ucfirst($rdv['lieu'] ?? '') ?>
  <?php endif; ?>
</td>
</tr>

<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Temps nécessaire :</strong></td>
<td><?= ($rdv["time_needed"]) ?>h</td>
</tr>


<?php if (!empty($rdv["link"])): ?>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;">- Lien de réunion :</strong></td>
<td><a href="<?= $rdv["link"] ?>" style="color:#dc3545;text-decoration:none;">
<?= $rdv["link"] ?></a></td>
</tr>
<?php endif; ?>
</table>

<br>

<!-- Message du consultant -->
<?php if (!empty($message)): ?>
<div style="background:#e9f9ed;border-left:4px solid #28a745;padding:12px 15px;margin:10px 0;border-radius:4px;">
<strong style="color:#28a745;"> Message du consultant :</strong><br>
<?= nl2br($message) ?>
</div>
<?php endif; ?>

</td>
</tr>

<!-- Bouton (si lien visioconférence) -->
<?php if (!empty($rdv["link"])): ?>
<tr><td align="center" style="padding:15px 0 25px;">
<a href="<?= $rdv["link"] ?>"
style="background:#28a745;padding:14px 24px;border-radius:4px;color:#fff;
text-decoration:none;font-size:15px;font-weight:bold;display:inline-block;">
Rejoindre la réunion É'
</a>
</td></tr>
<?php endif; ?>

<!-- Footer -->
<tr>
<td style="padding:20px 30px;font-size:12px;color:#777;text-align:center;border-top:1px solid #eee;">
<a href="<?= params('app_url') ?>" style="color:#dc3545; text-decoration:none;">
<?= params('app_short_name') ?>
</a> &nbsp;|&nbsp;
<a href="mailto:<?= urlencode(params('app_email')) ?>" style="color:#777; text-decoration:none;">
<?= params('app_email') ?>
</a>

<br><br>
<!-- Bloc Contacts -->
<div style="line-height:1.8; font-size:12px; color:#555;">
<div>
<b>Bénin – Cotonou :</b>
<a href="tel:+2290196747724" style="color:#555; text-decoration:none;">+229 01 96 74 77 24</a>
/
<a href="tel:+2290196747710" style="color:#555; text-decoration:none;">01 96 74 77 10</a>
</div>
<div>
<b>Bénin – Porto-Novo :</b>
<a href="tel:+2290140504410" style="color:#555; text-decoration:none;">+229 01 40 50 44 10</a>
/
<a href="tel:+2290150707177" style="color:#555; text-decoration:none;">01 50 70 71 77</a>
</div>
<div>
<b>Canada :</b>
<a href="tel:+15145766074" style="color:#555; text-decoration:none;">+1 514 576 6074</a>
</div>
<div>
<b>Togo :</b>
<a href="tel:+22896636161" style="color:#555; text-decoration:none;">+228 96 63 61 61</a>
/
<a href="tel:+22870466161" style="color:#555; text-decoration:none;">70 46 61 61</a>
</div>
<div>
<b>Gabon :</b>
<a href="tel:+241062661597" style="color:#555; text-decoration:none;">+241 06 26 61 597</a>
/
<a href="tel:+241076549459" style="color:#555; text-decoration:none;">07 65 49 459</a>
</div>

</div>

<br>

Nous sommes impatients de vous accompagner dans votre projet <br><br>

<a href="<?= m_path('privacy', [], true) ?>" style="color:#dc3545;text-decoration:none;">
Politique de confidentialité
</a>

</td>
</tr>

</table>

</td></tr>
</table>

</body>
</html>
