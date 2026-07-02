<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Reçu de paiement - Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    Paiement reçu - <?= htmlspecialchars($montant ?? '') ?> pour votre session Gocast Studio ??
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

            <!-- Hero paiement -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:44px 40px 32px;text-align:center;border-bottom:1px solid #21262D;">

                  <!-- Montant central -->
                  <p style="margin:0 0 6px;font-size:13px;font-weight:700;color:#6E7781;text-transform:uppercase;letter-spacing:1px;">Paiement reçu</p>
                  <p style="margin:0 0 4px;font-size:48px;font-weight:900;color:#00C46A;letter-spacing:-2px;line-height:1;">
                    <?= htmlspecialchars($montant ?? '-') ?>
                  </p>
                  <p style="margin:0 0 24px;font-size:13px;color:#8B949E;">
                    <?= htmlspecialchars($typePaiement ?? 'Paiement') ?> é <?= date('d/m/Y é H\hi', strtotime($datePaiement ?? 'now')) ?>
                  </p>

                  <!-- Badge -->
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto;">
                    <tr>
                      <td style="background:rgba(0,196,106,.12);border:1.5px solid rgba(0,196,106,.3);border-radius:50px;padding:7px 18px;">
                        <span style="font-size:13px;font-weight:700;color:#00C46A;">? Transaction validée</span>
                      </td>
                    </tr>
                  </table>

                </td>
              </tr>
            </table>

            <!-- Référence -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:28px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;border-radius:12px;border:1px solid #21262D;">

                    <?php
                    $lignes = [
                      ['Né Paiement',     $refPaiement   ?? '-'],
                      ['Réservation',     '#' . ($refReservation ?? '-')],
                      ['Studio',          $studioNom     ?? '-'],
                      ['Client',          ($prenom ?? '') . ' ' . ($nom ?? '')],
                      ['Mode de paiement',$modePaiement  ?? '-'],
                    ];
                    foreach ($lignes as $i => [$label, $val]):
                      $border = $i < count($lignes) - 1 ? 'border-bottom:1px solid #21262D;' : '';
                    ?>
                    <tr>
                      <td style="padding:13px 20px;<?= $border ?>">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="font-size:12.5px;color:#6E7781;width:50%;"><?= $label ?></td>
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

            <!-- Résumé solde si partiel -->
            <?php if (!empty($montantSolde) && $montantSolde !== '0'): ?>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:16px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:rgba(245,158,11,.07);border-radius:10px;border:1px solid rgba(245,158,11,.25);padding:14px 18px;">
                    <tr>
                      <td style="font-size:13px;color:#FBBF24;">
                        ?? Il reste <strong><?= htmlspecialchars($montantSolde) ?></strong> é régler avant votre session.
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <?php endif; ?>

            <!-- CTA -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:32px 40px 40px;text-align:center;">
                  <a href="<?= $reservationUrl ?? '#' ?>" style="display:inline-block;background:#00C46A;color:#fff;font-size:14px;font-weight:700;text-decoration:none;padding:13px 32px;border-radius:10px;">
                    Voir ma réservation ?
                  </a>
                  <p style="margin:14px 0 0;font-size:12px;color:#6E7781;">
                    Conservez cet email comme preuve de paiement.
                  </p>
                </td>
              </tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 6px;font-size:12px;color:#6E7781;">é <?= date('Y') ?> Gocast Studio é <a href="mailto:contact@podgan.com" style="color:#00C46A;text-decoration:none;">contact@podgan.com</a></p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
