<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Vos fichiers sont prêts - Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    ?? Vos fichiers Gocast Studio sont disponibles en téléchargement !
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

        <tr>
          <td style="background:#161B22;border-radius:20px;border:1px solid #21262D;overflow:hidden;">

            <!-- Bande + hero -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td style="height:4px;background:linear-gradient(90deg,#00C46A,#00A85A 60%,#00C46A);"></td></tr>
              <tr>
                <td style="padding:44px 40px 32px;text-align:center;border-bottom:1px solid #21262D;">
                  <div style="font-size:52px;margin-bottom:20px;line-height:1;">??</div>
                  <h1 style="margin:0 0 10px;font-size:24px;font-weight:900;color:#E6EDF3;letter-spacing:-.4px;">
                    Vos fichiers sont prêts !
                  </h1>
                  <p style="margin:0;font-size:14px;color:#8B949E;line-height:1.6;">
                    Bonjour <?= htmlspecialchars($prenom ?? '') ?>,<br>
                    vos livrables de session sont disponibles en téléchargement.
                  </p>
                </td>
              </tr>
            </table>

            <!-- Infos session -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:28px 40px 0;">
                  <p style="margin:0 0 14px;font-size:12px;font-weight:700;color:#6E7781;text-transform:uppercase;letter-spacing:.8px;">Session concernée</p>
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;border-radius:10px;border:1px solid #21262D;padding:16px 20px;">
                    <tr>
                      <td style="font-size:14px;font-weight:700;color:#E6EDF3;"><?= htmlspecialchars($studioNom ?? '-') ?></td>
                      <td style="text-align:right;font-size:13px;color:#8B949E;"><?= htmlspecialchars($dateSession ?? '-') ?></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- Liste des fichiers -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:20px 40px 0;">
                  <p style="margin:0 0 14px;font-size:12px;font-weight:700;color:#6E7781;text-transform:uppercase;letter-spacing:.8px;">Fichiers disponibles (<?= count($deliverables ?? []) ?>)</p>

                  <?php foreach ($deliverables ?? [] as $d): ?>
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:10px;">
                    <tr>
                      <td style="background:#0D1117;border-radius:10px;border:1px solid #21262D;padding:14px 18px;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td>
                              <p style="margin:0 0 3px;font-size:13.5px;font-weight:600;color:#C9D1D9;"><?= htmlspecialchars($d['nom'] ?? 'Fichier') ?></p>
                              <p style="margin:0;font-size:12px;color:#6E7781;"><?= htmlspecialchars($d['type'] ?? '') ?><?= !empty($d['taille']) ? ' é ' . $d['taille'] : '' ?></p>
                            </td>
                            <td style="text-align:right;white-space:nowrap;">
                              <a href="<?= htmlspecialchars($d['url'] ?? '#') ?>" style="display:inline-block;background:rgba(0,196,106,.12);border:1px solid rgba(0,196,106,.3);color:#00C46A;font-size:12.5px;font-weight:700;text-decoration:none;padding:7px 16px;border-radius:7px;">
                                ? Télécharger
                              </a>
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

            <!-- CTA principal -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:28px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:rgba(0,196,106,.07);border-radius:12px;border:1px solid rgba(0,196,106,.2);padding:20px 24px;">
                    <tr>
                      <td>
                        <p style="margin:0 0 12px;font-size:14px;font-weight:700;color:#E6EDF3;">Accéder é tous vos livrables</p>
                        <p style="margin:0 0 16px;font-size:13px;color:#8B949E;">Retrouvez tous vos fichiers dans votre espace client.</p>
                        <a href="<?= $deliverablesUrl ?? '#' ?>" style="display:inline-block;background:#00C46A;color:#fff;font-size:13.5px;font-weight:700;text-decoration:none;padding:11px 24px;border-radius:8px;">
                          Mon espace livrables ?
                        </a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- Expiration -->
            <?php if (!empty($expireDate)): ?>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:16px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:rgba(245,158,11,.07);border-radius:10px;border:1px solid rgba(245,158,11,.2);padding:12px 18px;">
                    <tr>
                      <td style="font-size:13px;color:#FBBF24;">
                        ? Ces liens expirent le <strong><?= htmlspecialchars($expireDate) ?></strong>. Téléchargez vos fichiers avant cette date.
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <?php endif; ?>

            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td style="height:40px;"></td></tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 6px;font-size:12px;color:#6E7781;">é <?= date('Y') ?> Gocast Studio é <a href="mailto:contact@podgan.com" style="color:#00C46A;text-decoration:none;">contact@podgan.com</a></p>
            <p style="margin:0;font-size:11px;color:#3D444D;">Merci de votre confiance ???</p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
