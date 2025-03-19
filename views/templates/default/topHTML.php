
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="<?php echo $cssLink; ?>">
    <link rel="icon" type="image/png" href="../images/icons/favicon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        body {
            background-color: rgb(198, 225, 196);
            background-image: url("../images/Patinhas.png");
            background-size: 50%;
            background-position: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
            max-width: 1500px;
            margin: auto;
            padding: 12px;
        }

        .corpo {
            background-color: rgb(255, 255, 255);
            width: 90%;
            max-width: 1500px;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: auto;
            padding: 20px;
        }

        @media (max-width: 1440px) {
            .corpo {
                width: 85%;
            }
        }

        @media (max-width: 768px) {
            .corpo {
                width: 88%;
                padding: 15px;
            }
            
            body {
                background-size: 70%;
            }

            .sidebar{
                display: none;
            }
        }

        @media (max-width: 425px) {
            .corpo {
                width: 100%;
                padding: 10px;
            }

            body {
                background-size: 100%; 
            }

            .sidebar{
                display: none;
            }
        }
    </style>
</head>
<body>
<?php include('../templates/navbar'.$tipo.'.php'); ?>

<?php if ($tipo == "Adm"): ?>
<?php include('../templates/sidebarAdm.php'); ?>
<?php endif; ?>
    

<section class="corpo container" >