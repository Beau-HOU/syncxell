<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light">
  <title>Votre code de vérification - Gocast Studio</title>
</head>
<body style="margin:0;padding:0;background:#0D1117;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;">

  <!-- Préheader invisible -->
  <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;">
    Votre code de vérification Gocast Studio : <?= $otp ?? '------' ?>
  </div>

  <!-- Wrapper -->
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#0D1117;padding:40px 16px;">
    <tr><td align="center">

      <!-- Carte principale -->
      <table width="560" cellpadding="0" cellspacing="0" border="0" style="max-width:560px;width:100%;">

        <!-- En-tête logo -->
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

        <!-- Corps -->
        <tr>
          <td style="background:#161B22;border-radius:20px;border:1px solid #21262D;overflow:hidden;">

            <!-- Bande accent verte -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="height:4px;background:linear-gradient(90deg,#00C46A,#00A85A 60%,#00C46A);"></td>
              </tr>
            </table>

            <!-- Contenu -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:40px 40px 12px;">

                  <!-- Icéne -->
                  <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 28px;">
                    <tr>
                      <td style="width:64px;height:64px;background:rgba(0,196,106,.12);border-radius:16px;text-align:center;vertical-align:middle;border:1px solid rgba(0,196,106,.25);">
                        <span style="font-size:28px;line-height:64px;">??</span>
                      </td>
                    </tr>
                  </table>

                  <h1 style="margin:0 0 8px;font-size:22px;font-weight:800;color:#E6EDF3;text-align:center;letter-spacing:-.4px;">
                    Code de vérification
                  </h1>
                  <p style="margin:0 0 32px;font-size:14px;color:#8B949E;text-align:center;line-height:1.6;">
                    Bonjour <?= htmlspecialchars($prenom ?? 'lé') ?>, utilisez ce code pour<br>confirmer votre action sur Gocast Studio.
                  </p>

                  <!-- Code OTP -->
                  <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background:#0D1117;border-radius:12px;border:2px solid #00C46A;padding:20px;text-align:center;">
                        <span style="font-size:42px;font-weight:900;color:#00C46A;letter-spacing:10px;font-variant-numeric:tabular-nums;">
                          <?= $otp ?? '------' ?>
                        </span>
                      </td>
                    </tr>
                  </table>

                  <!-- Timer -->
                  <p style="margin:20px 0 0;font-size:13px;color:#6E7781;text-align:center;">
                    ? Ce code expire dans <strong style="color:#F59E0B;">10 minutes</strong>
                  </p>

                </td>
              </tr>

              <!-- Séparateur -->
              <tr>
                <td style="padding:28px 40px 0;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr><td style="height:1px;background:#21262D;"></td></tr>
                  </table>
                </td>
              </tr>

              <!-- Avertissement -->
              <tr>
                <td style="padding:24px 40px 40px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background:rgba(239,68,68,.08);border-left:3px solid #EF4444;border-radius:0 8px 8px 0;padding:14px 16px;">
                        <p style="margin:0;font-size:13px;color:#F87171;line-height:1.5;">
                          <strong>Ne partagez jamais ce code.</strong> Gocast Studio ne vous demandera jamais votre code par téléphone ou email.
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            </table>
          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="padding:28px 0 0;text-align:center;">
            <p style="margin:0 0 8px;font-size:12px;color:#6E7781;">
              é <?= date('Y') ?> Gocast Studio - Tous droits réservés
            </p>
            <p style="margin:0;font-size:12px;color:#3D444D;">
              Si vous n'avez pas demandé ce code, ignorez simplement cet email.
            </p>
          </td>
        </tr>

      </table>
    </td></tr>
  </table>

</body>
</html>
