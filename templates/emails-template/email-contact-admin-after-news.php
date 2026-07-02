<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Contact Admin Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6em;
            background-color: #f6f6f6;
            margin: 0;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /*background-color: #fff;*/
            padding: 20px;
           /* border-bottom: 3px solid #5d6dc3;*/
        }
        .header img {
            height: 30px;
        }
        .header .links a {
            margin-left: 10px;
            color: #1B1B33;
            text-decoration: none;
            font-size: 14px;
        }
        .content {
            background-color: #fff;
            padding: 30px;
            border: 3px solid #1B1B33;
            border-radius: 7px;
        }
        .btn-primary {
            display: inline-block;
            padding: 8px 16px;
            background: #1B1B33;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            color: #999;
            font-size: 12px;
            margin-top: 20px;
        }
        .footer a {
            color: #1B1B33;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <table class="container" width="700">
        <!-- Header -->
        <tr>
            <td>
                <div class="header">
                    <img src="<?=asset('images/logos/logo-greydesign-bleue.png')?>" alt="Logo de <?= getProjetName() ?>">
                    <div class="links">
                        <a href="<?= getProjetUrl()  ?>">Acceuil</a>
                        <a href="<?= m_path('about.us', [],true)  ?>">A Propos</a>
                        <a href="<?= m_path('our.services', [],true)  ?>">Nos services</a>
                        <a href="<?= m_path('our.portfolio', [],true)  ?>">Portfolio</a>
                        <a href="<?= m_path('contacts', [],true)  ?>">Contacts</a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- Main Content -->
        <tr>
            <td>
                <div class="content">
                    <h2>Salut chers Administrateurs</h2>
                    <strong>Vous avez reçu une nouvelle demande de rendez-vous sur votre site</strong>
                   
                    
                    
                   
                </div>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td>
                <div class="footer">
                    <p>
                       
                        <a href="<?= m_path('confidentiality.policy', [],true)  ?>">Politique de  confidentialité</a> |
                        <a href="<?= m_path('cgu', [],true)  ?>">Conditions d'utilisations</a>
                    </p>
                    <p>&copy; 2024 <?= getProjetName()?>. Tous droits réservés.</p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>

