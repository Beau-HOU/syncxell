<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Rappel - Votre session demain chez Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    ? Rappel - votre session Gocast Studio est demain é <?= $heureDebut ?? '' ?>
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

            <!-- Bande couleur + Hero -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td style="height:4px;background:linear-gradient(90deg,#F59E0B,#EF4444 50%,#F59E0B);"></td></tr>
              <tr>
                <td style="padding:44px 40px 32px;text-align:center;border-bottom:1px solid #21262D;">
                  <div style="font-size:48px;margin-bottom:16px;">?</div>

                  <!-- Badge "Demain" -->
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 20px;">
                    <tr>
                      <td style="background:rgba(245,158,11,.12);border:1.5px solid rgba(245,158,11,.35);border-radius:50px;padding:7px 18px;">
                        <span style="font-size:13px;font-weight:700;color:#FBBF24;">Rappel é Demain</span>
                      </td>
                    </tr>
                  </table>

                  <h1 style="margin:0 0 10px;font-size:22px;font-weight:900;color:#E6EDF3;letter-spacing:-.4px;">
                    Votre session est demain !
                  </h1>
                  <p style="margin:0;font-size:14px;color:#8B949E;line-height:1.6;">
                    Bonjour <?= htmlspecialchars($prenom ?? '') ?>, préparez-vous -<br>votre créneau au studio est confirmé.
                  </p>
                </td>
              </tr>
            </table>

            <!-- Compte é rebours visuel -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:32px 40px 0;text-align:center;">
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto;background:#0D1117;border-radius:16px;border:2px solid #F59E0B;padding:24px 40px;">
                    <tr>
                      <td style="text-align:center;">
                        <p style="margin:0 0 4px;font-size:38px;font-weight:900;color:#FBBF24;line-height:1;letter-spacing:-1px;">
                          <?= htmlspecialchars($heureDebut ?? '-') ?>
                        </p>
                        <p style="margin:0;font-size:13px;color:#6E7781;"><?= htmlspecialchars($dateSession ?? '-') ?></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- Détails -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:24px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;border-radius:12px;border:1px solid #21262D;">
                    <?php
                    $details = [
                      ['?? Studio',  $studioNom  ?? '-'],
                      ['?? Date',    $dateSession ?? '-'],
                      ['?? Début',   $heureDebut  ?? '-'],
                      ['?? Fin',     $heureFin    ?? '-'],
                      ['? Durée',   $duree       ?? '-'],
                    ];
                    foreach ($details as $i => [$label, $val]):
                      $border = $i < count($details) - 1 ? 'border-bottom:1px solid #21262D;' : '';
                    ?>
                    <tr>
                      <td style="padding:12px 20px;<?= $border ?>">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="font-size:13px;color:#6E7781;width:50%;"><?= $label ?></td>
                            <td style="font-size:13px;color:#E6EDF3;font-weight:600;"><?= htmlspecialchars($val) ?></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                </td>
              </tr>
            </table>

            <!-- Checklist préparation -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:24px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:rgba(0,196,106,.06);border-radius:12px;border:1px solid rgba(0,196,106,.18);padding:20px 24px;">
                    <tr>
                      <td>
                        <p style="margin:0 0 14px;font-size:12px;font-weight:700;color:#00C46A;text-transform:uppercase;letter-spacing:.8px;">? Checklist préparation</p>
                        <?php
                        $tips = [
                          'Arrivez 10 min en avance pour l\'installation',
                          'Munissez-vous de votre confirmation de réservation',
                          'Prévenez-nous en cas d\'imprévu : contact@podgan.com',
                        ];
                        foreach ($tips as $tip): ?>
                        <p style="margin:0 0 8px;font-size:13px;color:#8B949E;padding-left:14px;position:relative;">
                          <span style="color:#00C46A;margin-right:8px;">é</span><?= $tip ?>
                        </p>
                        <?php endforeach; ?>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- Spacer -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td style="height:40px;"></td></tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 6px;font-size:12px;color:#6E7781;">é <?= date('Y') ?> Gocast Studio é <a href="mailto:contact@podgan.com" style="color:#00C46A;text-decoration:none;">contact@podgan.com</a></p>
            <p style="margin:0;font-size:11px;color:#3D444D;">Bonne session ???</p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
