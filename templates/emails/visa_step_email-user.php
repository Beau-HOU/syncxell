<?php
$userFullName = trim(($user['firstname'] ?? '') . ' ' . ($user['name'] ?? ''));
$userDisplay  = $userFullName !== '' ? $userFullName : $userEmail;

$statusLabel = $kind === 'rejected' ? 'Rejetée' : 'Terminée';
$statusColor = $kind === 'rejected' ? '#dc3545' : '#28a745';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmation de votre demande - <?= params('app_short_name') ?></title>

</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<!-- Preheader -->
<div style="display:none; opacity:0; height:0; overflow:hidden;">
    Vous essayer de vous connecter à votre compte
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
<img src="<?= asset('img/logo/logo.png') ?>" width="160" style="display:block; margin:0 auto;">
</a>
</td>
</tr>
<!-- Titre -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
Mise à jour de votre demande de visa
</h2>
</td>
</tr>

<!-- Contenu -->
<tr>
<td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">

<p>
Votre demande de visa a été mise à jour. Voici les détails importants pour cette étape :
</p>

<p>
<b>Type de visa :</b> <?= htmlspecialchars($visaName) ?>
</p>

<p>
<b>Étape :</b> <?= htmlspecialchars($stepName) ?>
</p>

<p>
<b>Statut :</b> 
<span style="color:<?= $statusColor ?>; font-weight:bold;">
<?= htmlspecialchars($statusLabel) ?>
</span>
</p>

<?php if (!empty($msg)): ?>
<p>
<?= nl2br(htmlspecialchars($msg)) ?>
</p>
<?php endif; ?>

<?php if (!empty($report)): ?>
<p>
<b>Rapport / instructions :</b><br>
<?= nl2br(htmlspecialchars($report)) ?>
</p>
<?php endif; ?>

<!-- Bouton -->
<div style="margin:24px 0; text-align:center;">
<a href="<?= htmlspecialchars($userLink) ?>"
   style="display:inline-block;
          background:#dc3545;
          color:#ffffff;
          text-decoration:none;
          padding:12px 18px;
          border-radius:6px;
          font-weight:700;">
Accéder à mon espace
</a>
</div>

<p>
Merci de suivre ces informations pour assurer le bon traitement de votre demande.<br>
Cordialement,<br>
<b>Destination Canada</b>
</p>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="padding:20px 30px; font-size:12px; color:#777; text-align:center; border-top:1px solid #eee;">

<a href="<?= params('app_url') ?>" style="color:#dc3545; text-decoration:none;">
<?= params('app_short_name') ?>
</a>
&nbsp;|&nbsp;
<a href="mailto:<?= params('app_email') ?>" style="color:#777; text-decoration:none;">
<?= params('app_email') ?>
</a>

<br><br>

<!-- Contacts -->
<div style="line-height:1.8; font-size:12px; color:#555;">
<div><b>Bénin – Cotonou :</b> +229 01 96 74 77 24 / 01 96 74 77 10</div>
<div><b>Bénin – Porto-Novo :</b> +229 01 40 50 44 10 / 01 50 70 71 77</div>
<div><b>Canada :</b> +1 514 576 6074</div>
<div><b>Togo :</b> +228 96 63 61 61 / 70 46 61 61</div>
<div><b>Gabon :</b> +241 06 26 61 597 / 07 65 49 459</div>
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

