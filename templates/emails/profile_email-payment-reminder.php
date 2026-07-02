<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rappel de paiement - <?= params('app_short_name') ?></title>
</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

    <div style="display:none; opacity:0; height:0; overflow:hidden;">
        Rappel : paiement requis avant traitement de votre demande d'évaluation.
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
                            <h2 style="margin:0; font-size:22px; font-weight:bold; color:#dc3545;">Rappel de paiement</h2>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">

                            Bonjour <?= htmlspecialchars((string)($payload['first_names'] ?? '')) ?> <?= htmlspecialchars((string)($payload['last_name'] ?? '')) ?>,<br><br>

                            Nous vous rappelons que le <b>paiement</b> de votre demande d'évaluation est requis avant que nous puissions procéder au traitement.<br><br>

                            <b>Montant :</b> <?= htmlspecialchars((string)($payload['amount'] ?? '')) ?> FCFA<br>
                            <b>Mode de paiement :</b> <?= htmlspecialchars((string)($payload['payment_choice_label'] ?? '')) ?><br><br>

                            <?php if (($payload['payment_choice'] ?? '') === 'agency'): ?>
                                Merci de vous rendre en agence pour effectuer le paiement. Une fois le paiement confirmé, votre demande pourra être traitée.<br><br>
                            <?php else: ?>
                                Merci de finaliser le paiement en ligne afin que nous puissions traiter votre demande.<br><br>
                            <?php endif; ?>

                            Cordialement,<br>
                            <b>L'équipe <?= params('app_short_name') ?></b>

                        </td>
                    </tr>

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
