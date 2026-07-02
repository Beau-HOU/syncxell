<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Bienvenue chez Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    Bienvenue dans votre studio audiovisuel - votre compte est prêt ???
  </div>

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;padding:40px 16px;">
    <tr><td align="center">
      <table width="560" cellpadding="0" cellspacing="0" border="0" style="max-width:560px;width:100%;">

        <!-- Logo -->
        <tr>
          <td align="center" style="padding:0 0 28px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="background:#00C46A;border-radius:12px;width:44px;height:44px;text-align:center;vertical-align:middle;">
                  <span style="font-size:20px;font-weight:900;color:#fff;line-height:44px;">P</span>
                </td>
                <td style="padding-left:12px;">
                  <span style="font-size:20px;font-weight:800;color:#E6EDF3;letter-spacing:-.5px;">Gocast</span>
                  <span style="font-size:20px;font-weight:400;color:#8B949E;"> Studio</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Carte -->
        <tr>
          <td style="background:#161B22;border-radius:20px;border:1px solid #21262D;overflow:hidden;">

            <!-- Hero sombre avec texte -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="background:linear-gradient(145deg,#161B22 0%,#0D1117 100%);padding:48px 40px 40px;text-align:center;border-bottom:1px solid #21262D;">

                  <!-- émoji studio -->
                  <div style="font-size:48px;margin-bottom:20px;line-height:1;">???</div>

                  <!-- Barre accent -->
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 24px;">
                    <tr>
                      <td style="background:#00C46A;height:3px;width:48px;border-radius:2px;"></td>
                    </tr>
                  </table>

                  <h1 style="margin:0 0 12px;font-size:26px;font-weight:900;color:#E6EDF3;letter-spacing:-.5px;">
                    Bienvenue, <?= htmlspecialchars($prenom ?? '') ?> !
                  </h1>
                  <p style="margin:0;font-size:15px;color:#8B949E;line-height:1.6;max-width:380px;margin:0 auto;">
                    Votre compte Gocast Studio est activé. Réservez votre créneau et donnez vie é vos projets audiovisuels.
                  </p>
                </td>
              </tr>
            </table>

            <!-- Fonctionnalités -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:36px 40px 28px;">
                  <p style="margin:0 0 20px;font-size:13px;font-weight:700;color:#6E7781;text-transform:uppercase;letter-spacing:1px;">Ce que vous pouvez faire</p>

                  <?php
                  $features = [
                    ['??', 'Réserver un studio', 'Choisissez votre créneau en quelques clics'],
                    ['??', 'Accéder é vos livrables', 'Téléchargez vos fichiers audio et vidéo'],
                    ['??', 'Suivre vos réservations', 'Historique complet de vos sessions'],
                  ];
                  foreach ($features as $f): ?>
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:14px;">
                    <tr>
                      <td style="background:#0D1117;border-radius:12px;border:1px solid #21262D;padding:16px 20px;">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="font-size:22px;width:40px;vertical-align:middle;"><?= $f[0] ?></td>
                            <td style="padding-left:14px;vertical-align:middle;">
                              <p style="margin:0 0 3px;font-size:14px;font-weight:700;color:#E6EDF3;"><?= $f[1] ?></p>
                              <p style="margin:0;font-size:13px;color:#6E7781;"><?= $f[2] ?></p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <?php endforeach; ?>

                </td>
              </tr>
            </table>

            <!-- CTA -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:0 40px 40px;text-align:center;">
                  <a href="<?= $loginUrl ?? '#' ?>" style="display:inline-block;background:#00C46A;color:#fff;font-size:15px;font-weight:700;text-decoration:none;padding:14px 36px;border-radius:10px;letter-spacing:-.2px;">
                    Accéder é mon espace ?
                  </a>
                  <p style="margin:16px 0 0;font-size:12px;color:#6E7781;">
                    Ou copiez ce lien : <a href="<?= $loginUrl ?? '#' ?>" style="color:#00C46A;text-decoration:none;"><?= $loginUrl ?? '' ?></a>
                  </p>
                </td>
              </tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 6px;font-size:12px;color:#6E7781;">é <?= date('Y') ?> Gocast Studio</p>
            <p style="margin:0;font-size:12px;color:#3D444D;">
              Une question ? <a href="mailto:contact@podgan.com" style="color:#00C46A;text-decoration:none;">contact@podgan.com</a>
            </p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
