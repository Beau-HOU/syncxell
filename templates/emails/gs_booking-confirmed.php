<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Réservation confirmée - Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    ? Votre réservation au <?= htmlspecialchars($studioNom ?? 'studio') ?> est confirmée - <?= $dateSession ?? '' ?>
  </div>

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;padding:40px 16px;">
    <tr><td align="center">
      <table width="580" cellpadding="0" cellspacing="0" border="0" style="max-width:580px;width:100%;">

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

            <!-- Bande verte + Statut -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td style="height:4px;background:linear-gradient(90deg,#00C46A,#00A85A 60%,#00C46A);"></td></tr>
              <tr>
                <td style="padding:36px 40px 28px;text-align:center;border-bottom:1px solid #21262D;">
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 20px;">
                    <tr>
                      <td style="background:rgba(0,196,106,.12);border:1.5px solid rgba(0,196,106,.30);border-radius:50px;padding:8px 20px;">
                        <span style="font-size:13px;font-weight:700;color:#00C46A;letter-spacing:.5px;">? CONFIRMéE</span>
                      </td>
                    </tr>
                  </table>
                  <h1 style="margin:0 0 8px;font-size:22px;font-weight:900;color:#E6EDF3;letter-spacing:-.4px;">
                    Votre session est réservée !
                  </h1>
                  <p style="margin:0;font-size:14px;color:#8B949E;">
                    Bonjour <?= htmlspecialchars($prenom ?? '') ?>, voici le récapitulatif de votre session au studio.
                  </p>
                </td>
              </tr>
            </table>

            <!-- Bloc studio -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:28px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;border-radius:14px;border:1px solid #21262D;overflow:hidden;">
                    <!-- Header du bloc -->
                    <tr>
                      <td style="background:rgba(0,196,106,.06);padding:14px 20px;border-bottom:1px solid #21262D;">
                        <span style="font-size:12px;font-weight:700;color:#00C46A;text-transform:uppercase;letter-spacing:.8px;">?? Détails de la session</span>
                      </td>
                    </tr>
                    <!-- Lignes de détail -->
                    <?php
                    $details = [
                      ['Studio',   $studioNom   ?? '-'],
                      ['Date',     $dateSession  ?? '-'],
                      ['Horaire',  $heureDebut ?? '-' . ' ? ' . $heureFin ?? ''],
                      ['Durée',    $duree       ?? '-'],
                    ];
                    foreach ($details as $i => [$label, $val]):
                      $bg = $i % 2 === 0 ? '' : 'background:#080B10;';
                    ?>
                    <tr>
                      <td style="padding:12px 20px;<?= $bg ?>border-bottom:1px solid #21262D;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="font-size:13px;color:#6E7781;width:45%;"><?= $label ?></td>
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

            <!-- Services additionnels -->
            <?php if (!empty($services)): ?>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:20px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;border-radius:14px;border:1px solid #21262D;overflow:hidden;">
                    <tr>
                      <td style="background:rgba(59,130,246,.06);padding:14px 20px;border-bottom:1px solid #21262D;">
                        <span style="font-size:12px;font-weight:700;color:#60A5FA;text-transform:uppercase;letter-spacing:.8px;">??? Services additionnels</span>
                      </td>
                    </tr>
                    <?php foreach ($services as $s): ?>
                    <tr>
                      <td style="padding:11px 20px;border-bottom:1px solid #21262D;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="font-size:13px;color:#C9D1D9;"><?= htmlspecialchars($s['nom'] ?? '') ?></td>
                            <td style="font-size:13px;color:#E6EDF3;font-weight:600;text-align:right;"><?= htmlspecialchars($s['prix'] ?? '') ?></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                </td>
              </tr>
            </table>
            <?php endif; ?>

            <!-- Total -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:20px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:rgba(0,196,106,.08);border-radius:12px;border:1.5px solid rgba(0,196,106,.25);padding:18px 20px;">
                    <tr>
                      <td style="font-size:14px;font-weight:700;color:#E6EDF3;">Montant total</td>
                      <td style="text-align:right;">
                        <span style="font-size:22px;font-weight:900;color:#00C46A;"><?= htmlspecialchars($montantTotal ?? '-') ?></span>
                      </td>
                    </tr>
                    <?php if (!empty($montantAcompte)): ?>
                    <tr>
                      <td colspan="2" style="padding-top:8px;font-size:12px;color:#6E7781;">
                        Acompte réglé : <strong style="color:#00C46A;"><?= htmlspecialchars($montantAcompte) ?></strong>
                        &nbsp;é&nbsp; Solde restant : <strong style="color:#F59E0B;"><?= htmlspecialchars($montantSolde ?? '-') ?></strong>
                      </td>
                    </tr>
                    <?php endif; ?>
                  </table>
                </td>
              </tr>
            </table>

            <!-- CTA -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:32px 40px 40px;text-align:center;">
                  <a href="<?= $reservationUrl ?? '#' ?>" style="display:inline-block;background:#00C46A;color:#fff;font-size:14px;font-weight:700;text-decoration:none;padding:13px 32px;border-radius:10px;letter-spacing:-.1px;">
                    Voir ma réservation ?
                  </a>
                </td>
              </tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 6px;font-size:12px;color:#6E7781;">é <?= date('Y') ?> Gocast Studio é <a href="mailto:contact@podgan.com" style="color:#00C46A;text-decoration:none;">contact@podgan.com</a></p>
            <p style="margin:0;font-size:11px;color:#3D444D;">Pour annuler, rendez-vous dans votre espace client (sous conditions).</p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
