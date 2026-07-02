<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour de votre demande - <?= params('app_short_name') ?></title>
</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

    <div style="display:none; opacity:0; height:0; overflow:hidden;">
        Mise à jour de votre demande d'évaluation de profil.
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
                            <h2 style="margin:0; font-size:22px; font-weight:bold; color:#dc3545;">Votre demande a été rejetée</h2>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">

                            Bonjour <?= htmlspecialchars((string)($payload['first_names'] ?? '')) ?> <?= htmlspecialchars((string)($payload['last_name'] ?? '')) ?>,<br><br>

                            Votre <b>demande d'évaluation de profil</b> a été examinée, mais elle a été rejetée.<br><br>

                            <?php if (!empty($payload['reason'] ?? '')): ?>
                                <div style="background:#fff5f5; border:1px solid #fecaca; padding:12px 14px; border-radius:8px;">
                                    <b>Motif :</b><br>
                                    <?= nl2br(htmlspecialchars((string)$payload['reason'])) ?>
                                </div>
                                <br>
                            <?php endif; ?>

                            <?php if (!empty($payload['generated_password'] ?? '')): ?>
                                <b>Accès à votre espace</b><br>
                                Identifiant : <b><?= htmlspecialchars((string)($payload['email'] ?? '')) ?></b><br>
                                Mot de passe : <b><?= htmlspecialchars((string)$payload['generated_password']) ?></b><br>
                                <div style="font-size:13px; color:#666; margin-top:8px;">
                                    Connectez-vous à votre espace pour suivre vos nouvelles demandes.
                                </div>
                                <br>
                            <?php else: ?>
                                <div style="font-size:13px; color:#666; margin-top:8px;">
                                    Connectez-vous à votre espace pour suivre vos nouvelles demandes.
                                </div>
                                <br>
                            <?php endif; ?>

                            <div style="text-align:center; margin:20px 0;">
                                <a href="<?= htmlspecialchars((string)($payload['login_url'] ?? params('app_url'))) ?>"
                                    style="display:inline-block; background:#dc3545; color:#fff; text-decoration:none; padding:12px 18px; border-radius:6px; font-weight:bold;">
                                    Accéder à mon compte
                                </a>
                            </div>

                            <?php if (!empty($payload['space_url'] ?? '')): ?>
                                <div style="text-align:center; margin-top:-8px; margin-bottom:16px;">
                                    <a href="<?= htmlspecialchars((string)$payload['space_url']) ?>" style="color:#dc3545; text-decoration:none; font-weight:700;">Voir mes évaluations</a>
                                </div>
                            <?php endif; ?>

                            <br>
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
