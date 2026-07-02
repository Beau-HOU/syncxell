<?php
$userFullName = trim(($firstname ?? '') . ' ' . ($name ?? ''));
$userDisplay  = $userFullName !== '' ? $userFullName : ($email ?? '');
$accountCreated = (bool)($accountCreated ?? false);
$hasPassword = isset($createdPassword) && $createdPassword !== null && trim((string)$createdPassword) !== '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Votre compte - <?= params('app_short_name') ?></title>
</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<div style="display:none; opacity:0; height:0; overflow:hidden;">
    Votre compte a été créé et votre demande de visa est enregistrée.
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f6f9fc; padding:20px 0;">
<tr>
<td align="center">

<table width="600" cellspacing="0" cellpadding="0" border="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:6px; overflow:hidden;">

<tr>
<td style="padding:10px; text-align:center;">
<a href="<?= params('app_url') ?>">
<img src="<?= asset('img/logo/logo.png') ?>" width="160" style="display:block; margin:0 auto;">
</a>
</td>
</tr>

<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:22px; font-weight:bold; color:#dc3545;">Accès à votre demande de visa</h2>
</td>
</tr>

<tr>
<td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">

Bonjour <?= htmlspecialchars($userDisplay) ?>,<br><br>

Votre demande de visa a été enregistrée et vous pouvez suivre votre dossier en ligne.<br><br>

<b>Type de visa :</b> <?= htmlspecialchars((string)($visaName ?? '')) ?><br>
<b>Lien de suivi :</b> <a href="<?= htmlspecialchars((string)($requestLink ?? '')) ?>">Accéder à ma demande</a><br><br>

<b>Identifiants de connexion :</b><br>
- Email : <?= htmlspecialchars((string)($email ?? '')) ?><br>
<?php if ($hasPassword): ?>
- Mot de passe : <b><?= htmlspecialchars((string)($createdPassword ?? '')) ?></b><br><br>
<?php else: ?>
<?php if ($accountCreated): ?>
<br>
<?php else: ?>
<br>
<?php endif; ?>
<?php endif; ?>

Vous pouvez vous connecter ici : <a href="<?= htmlspecialchars((string)($loginLink ?? '')) ?>">Se connecter</a>.<br><br>

Cordialement,<br>
<b>L'équipe <?= params('app_short_name') ?></b>

</td>
</tr>

<tr>
<td style="padding:20px 30px; font-size:12px; color:#777; text-align:center; border-top:1px solid #eee;">
<a href="<?= params('app_url') ?>" style="color:#dc3545; text-decoration:none;">
<?= params('app_short_name') ?>
</a>
&nbsp;Éé&nbsp;
<a href="mailto:<?= params('app_email') ?>" style="color:#777; text-decoration:none;">
<?= params('app_email') ?>
</a>
<br><br>
<a href="<?= m_path('privacy', [], true) ?>" style="color:#dc3545; text-decoration:none;">Politique de confidentialité</a>
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>
