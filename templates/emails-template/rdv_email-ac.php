<?php
require_once '../../service/service.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <meta name="theme-color" content="#dc3545">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Réponse à votre message de contact.">

  <title>Réponse à votre message - <?= params('app_short_name') ?></title>
</head>
<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

  <!-- Preheader -->
  <div style="display:none; max-height:0; overflow:hidden; opacity:0;">
    L'équipe <?= params('app_short_name') ?> a répondu à votre message.
  </div>

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f6f9fc; padding:20px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" border="0" style="background:#ffffff; border-radius:6px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.05);">

          <!-- Logo -->
          <tr>
            <td style="padding:10px; text-align:center; background:#ffffff;">
              <a href="<?= params('app_url') ?>">
                <img src="<?= asset('img/logo/logo.png') ?>" alt="Logo de <?= params('app_short_name') ?>" width="160" height="auto" style="display:block; margin:0 auto;">
              </a>
            </td>
          </tr>

          <!-- Titre -->
          <tr>
            <td style="padding:10px 30px; text-align:center;">
              <h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
                Réponse à votre message
              </h2>
            </td>
          </tr>

          <!-- Message principal -->
          <tr>
            <td style="padding:0 30px 20px; font-size:15px; line-height:1.6;">
              Bonjour {{ nom_client }},<br>
              L'équipe <?= params('app_short_name') ?> a répondu à votre message :<br><br>

              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size:15px; line-height:1.6; color:#333;">
                <tr>
                  <td width="30%" style="padding:4px 0;"><strong style="color:#dc3545;">Objet :</strong></td>
                  <td>{{ sujet_message }}</td>
                </tr>
                <tr>
                  <td style="padding:4px 0;"><strong style="color:#dc3545;">Message envoyé :</strong></td>
                  <td>{{ contenu_message }}</td>
                </tr>
                <tr>
                  <td style="padding:4px 0;"><strong style="color:#dc3545;">Réponse :</strong></td>
                  <td>{{ reponse_admin }}</td>
                </tr>
              </table>

              <br>
              Nous restons disponibles pour toute question complémentaire.<br><br>
              Cordialement,<br>
              L'équipe <?= params('app_short_name') ?>.
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:20px 30px; font-size:12px; color:#777777; text-align:center; border-top:1px solid #eeeeee;">
              <a href="<?= params('app_url') ?>" style="color:#dc3545; text-decoration:none; margin-bottom:10px;">
                <?= params('app_short_name') ?>
              </a>

              <a href="tel:<?= str_replace(' ', '', params('app_telphone')) ?>" style="color:#777777; text-decoration:none;">
                <?= params('app_telphone') ?>
              </a> 
              &nbsp;Éé&nbsp;
              <a href="mailto:<?= params('app_email') ?>" style="color:#777777; text-decoration:none;">
                <?= params('app_email') ?>
              </a>
              <br><br>

              Merci pour votre confiance !<br><br>

              <a href="<?= params('app_url') ?>/politique-de-confidentialite" style="color:#dc3545; text-decoration:none;">Politique de confidentialité</a>
              &nbsp;Éé&nbsp;
              <a href="<?= params('app_url') ?>/se-desabonner" style="color:#dc3545; text-decoration:none;">Se désabonner</a>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
