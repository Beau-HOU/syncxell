<?php
// require_once '../../service/service.php'; 
// require_once('../../service/url.php');
// require_once('../../service/service.php');
// require_once('../../config.php');
// require "../../model/Contact.php";
// require "../../model/Service.php";

// $contact = Contact::get([
//     "select" => "*",
//     "where"  => "id = 9",
//     "execute" => []
// ]);

// $subject = "Test";
// $replyContent = "Nous avons bien reçu votre message et vous répond et pensond que il serais mieux de vous contacter directement par téléphone ou par email pour traiter votre demande. ";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouveau contact sur <?= params('app_short_name') ?></title>
</head>
<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<div style="display:none; opacity:0; height:0; overflow:hidden;">
  Nouveau message reçu via le formulaire de contact.
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

<!-- Title -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
Nouveau contact sur votre site
</h2>
</td>
</tr>

<!-- Content -->
<tr>
<td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">
Bonjour Admin <,<br><br>
Vous avez reçu un nouveau message :
<br><br>

<table width="100%" cellpadding="0" cellspacing="0" style="font-size:15px; color:#333; line-height:1.6;">
<tr>
<td width="45%" style="padding:4px 0;"><strong style="color:#dc3545;">Nom :</strong></td>
<td><?= ($contact["name"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;">Email :</strong></td>
<td><?= ($contact["email"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0;"><strong style="color:#dc3545;">Numéro de téléphone :</strong></td>
<td><?= ($contact["phone"]) ?></td>
</tr>
<tr>
<td style="padding:4px 0; vertical-align:top;"><strong style="color:#dc3545;">Message :</strong> <br>
</td>
<td style="word-break:break-word;"><?= nl2br(($contact["message"])) ?></td>
</tr>
</table>

<br>
Merci de répondre à l'expéditeur si nécessaire 
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
