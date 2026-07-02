<?php 
// require_once '../../service/service.php'; 
// require_once('../../service/url.php');
// require_once('../../service/service.php');
// require_once('../../config.php');
// require "../../model/Contact.php";
// require "../../model/Service.php";
// require "../../model/EvaluationProfile.php";

// require_once '../../vendor/autoload.php';

// $payload = EvaluationProfile::getAll([
//     "select" => "*",
//     "orderBy" => "id DESC",
//     "limit" => 1
// ])[0];

// // dd($evaluation);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmation de votre demande - <?= params('app_short_name') ?></title>
</head>

<body style="margin:0; padding:0; background-color:#f6f9fc; font-family:Arial, sans-serif;">

<!-- Preheader -->
<div style="display:none; opacity:0; height:0; overflow:hidden;">
Votre demande d'évaluation de profil a été enregistrée avec succès
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f6f9fc; padding:20px 0;">
<tr>
<td align="center">

<table width="600" cellspacing="0" cellpadding="0" border="0"
style="max-width:600px; width:100%; background:#ffffff; border-radius:6px; overflow:hidden;">

<!-- Logo -->
<tr>
<td style="padding:10px; text-align:center;">
<a href="<?= params('app_url') ?>">
<img src="<?= asset('img/logo/logo.png') ?>" width="160" style="display:block; margin:0 auto;">
</a>
</td>
</tr>

<!-- Titre -->
<tr>
<td style="padding:10px 30px; text-align:center;">
<h2 style="margin:0; font-size:24px; font-weight:bold; color:#28a745;">
Demande d'évaluation envoyée avec succès
</h2>
</td>
</tr>

<!-- Contenu -->
<tr>
<td style="padding:0 30px 20px; color:#333; font-size:15px; line-height:1.6;">

Salut M/Mme <?= $payload['first_names'] ?> <?= $payload['last_name'] ?> ,<br><br>

Merci d'avoir soumis votre <b>demande d'évaluation de profil</b> auprès de
<b><?= params('app_short_name') ?></b>.<br>
Votre demande est actuellement <b>en cours de traitement</b>.  
Voici le récapitulatif complet :

<br><br>

<table width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#333; line-height:1.6;">

<!-- ================= INFORMATIONS PERSONNELLES ================= -->
<tr>
<td colspan="2" style="padding:6px 0;">
<strong style="color:#dc3545;">Informations personnelles</strong>
</td>
</tr>
<tr><td>Nom :</td><td><?= $payload['last_name'] ?></td></tr>
<tr><td>Prénoms :</td><td><?= $payload['first_names'] ?></td></tr>
<tr><td>Email :</td><td><?= $payload['email'] ?></td></tr>
<tr><td>Téléphone :</td><td><?= $payload['phone'] ?></td></tr>
<tr><td>Date de naissance :</td><td><?= $payload['date_of_birth'] ?></td></tr>
<tr><td>Sexe :</td><td><?= ucfirst($payload['gender']) ?></td></tr>
<tr><td>Situation matrimoniale :</td><td><?= $payload['marital_status'] ?></td></tr>

<?php if (!empty($payload['visa_name'] ?? '')): ?>
<tr><td>Type de visa souhaité :</td><td><?= htmlspecialchars((string)($payload['visa_name'] ?? '')) ?></td></tr>
<?php endif; ?>

<!-- ================= SITUATION FAMILIALE ================= -->
<tr><td colspan="2" style="padding-top:10px;"><strong style="color:#dc3545;">Situation familiale</strong></td></tr>
<tr><td>Nombre d'enfants :</td><td><?= $payload['number_of_children'] ?></td></tr>
<tr><td>Âges des enfants :</td><td><?= $payload['children_ages'] ?: '–' ?></td></tr>
<tr><td>Famille au Canada :</td><td><?= $payload['family_in_canada'] ? 'Oui' : 'Non' ?></td></tr>
<?php if($payload['family_in_canada'] == 'Oui'): ?>
<tr><td>Type de relation :</td><td><?= $payload['relationship'] ?></td></tr>
<?php endif; ?>
<tr><td>Déjà visité le Canada :</td><td><?= $payload['previously_visited_canada'] ? 'Oui' : 'Non' ?></td></tr>


<!-- ================= 'UDES ================= -->
<tr><td colspan="2" style="padding-top:10px;"><strong style="color:#dc3545;">Études</strong></td></tr>
<tr><td>Diplôme le plus élevé :</td><td><?= $payload['highest_degree'] ?></td></tr>
<tr><td>Domaine d'études :</td><td><?= $payload['field_of_study'] ?></td></tr>
<tr><td>Année d'obtention :</td><td><?= $payload['graduation_year'] ?></td></tr>
<tr><td>Diplôme reconnu :</td><td><?= $payload['degree_recognized'] ? 'Oui' : 'Non' ?></td></tr>

<!-- ================= EXPÉRIENCE ================= -->
<tr><td colspan="2" style="padding-top:10px;"><strong style="color:#dc3545;">Expérience professionnelle</strong></td></tr>
<tr><td>Années d'expérience :</td><td><?= $payload['years_of_work_experience'] ?> ans</td></tr>

<!-- ================= LANGUES ================= -->
<tr><td colspan="2" style="padding-top:10px;"><strong style="color:#dc3545;">Compétences linguistiques</strong></td></tr>
<tr>
<td>Français :</td>
<td>Parler: <?= $payload['french_speaking'] ?> | Comprendre: <?= $payload['french_listening'] ?> | Lire: <?= $payload['french_reading'] ?> | Écrire: <?= $payload['french_writing'] ?></td>
</tr>
<tr>
<td>Anglais :</td>
<td>Parler: <?= $payload['english_speaking'] ?> | Comprendre: <?= $payload['english_listening'] ?> | Lire: <?= $payload['english_reading'] ?> | Écrire: <?= $payload['english_writing'] ?></td>
</tr>

<!-- ================= CONJOINT ================= -->
<?php if (!empty($payload['spouse_date_of_birth'])): ?>
<tr><td colspan="2" style="padding-top:10px;"><strong style="color:#dc3545;">Informations sur le conjoint</strong></td></tr>
<tr><td>Date de naissance :</td><td><?= $payload['spouse_date_of_birth'] ?></td></tr>
<tr><td>Diplôme :</td><td><?= $payload['spouse_highest_degree'] ?></td></tr>
<tr><td>Domaine :</td><td><?= $payload['spouse_field_of_study'] ?></td></tr>
<tr><td>Année d'obtention :</td><td><?= $payload['spouse_graduation_year'] ?></td></tr>
<tr><td>Expérience :</td><td><?= $payload['spouse_years_of_work_experience'] ?> ans</td></tr>
<?php endif; ?>

</table>

<br>

Nous vous contacterons très prochainement avec une analyse détaillée et des
recommandations adaptées à votre profil 

<br><br>
À très bientôt,<br>
<b>L'équipe <?= params('app_short_name') ?></b>

</td>
</tr>

<!-- Footer -->
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

<!-- Contacts -->
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

