<?php 
// require_once '../../service/service.php'; 
// require_once('../../service/url.php');
// require_once('../../service/service.php');
// require_once('../../config.php');
// require "../../model/Contact.php";
// require "../../model/Service.php";
// require "../../model/Blog.php";
// require "../../model/Rdv.php";
// require "../../model/RdvDate.php";
// require "../../model/RdvHour.php";

// require_once '../../vendor/autoload.php';

// $rdv = Rdv::getAll([
//     "select" => "*",
//     "orderBy" => "id DESC",
//     "limit" => 1
// ])[0];

// // dd($rdv);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouveau rendez-vous - <?= params('app_short_name') ?></title>
</head>
<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<!-- Preheader (caché) -->
<div style="display:none; opacity:0; height:0; overflow:hidden;">
  Un nouveau rendez-vous vient d'être enregistré 
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f6f9fc; padding:20px 0;">
<tr>
<td align="center">

<table width="600" cellspacing="0" cellpadding="0" border="0"
style="max-width:600px; width:100%; background:#ffffff; border-radius:6px; overflow:hidden;">

<!-- Logo -->
<tr>
<td style="padding:10px; text-align:center; background:#ffffff;">
<a href="<?= params('app_url') ?>" style="text-decoration:none; display:inline-block;">
<img src="<?= asset('img/logo/logo.png') ?>"
alt="Logo - <?= params('app_short_name') ?>"
width="160" height="auto"
style="display:block; margin:0 auto; text-decoration:none; border:0;">
</a>
</td>
</tr>

<!-- Titre -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
Nouveau rendez-vous enregistré !
</h2>
</td>
</tr>

<!-- Contenu -->
<tr>
<td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">
Cher administrateur <,<br>
Un utilisateur vient de réserver un nouveau rendez-vous sur <?= params('app_short_name') ?>. Voici les informations envoyées :
<br><br>

<table width="100%" cellpadding="0" cellspacing="0" style="font-size:15px; color:#333; line-height:1.6;">
<tr>
<td width="45%" style="padding:4px 0;"><strong style="color:#dc3545;"> Nom & Prénom :</strong></td>
<td><?= ($rdv["user_name"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Email :</strong></td>
<td><?= ($rdv["email"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Téléphone :</strong></td>
<td><?= ($rdv["phone"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Objet :</strong></td>
<td><?= ($rdv["subject"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Date & Heure :</strong></td>
<td><?= ($rdv["rdv_date"]) ?></td>
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
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Prix total :</strong></td>
<td><?= ($rdv["price"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;"> Payement :</strong></td>
<td><b><?= ($rdv["payment"] ? "Effectué" : "Non effectué") ?></b></td>
</tr>
</table>

<br>
Merci de contacter le client pour confirmer ou modifier le rendez-vous si nécessaire 
</td>
</tr>

<!-- Footer -->
<tr>
<td style="padding:20px 30px; font-size:12px; color:#777; text-align:center; border-top:1px solid #eee;">
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

<a href="<?= m_path('privacy', [], true) ?>" style="color:#dc3545; text-decoration:none;">
Politique de confidentialité
</a>
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>
