<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
$min = 0;
$max = 100;
$chiffres_pairs = 0;
$i = 0;
 
        for ($i = 0; $i < 100; $i++)
        {
            $chiffres_pairs = $i+1;
        }
 
echo "Les chiffres pairs compris entre 0 et 100 sont:" . $chiffres_pairs;
?>
    <p>PHP</p>

<?php
$dev = "front";
$technos = ["Php", "Ruby", "Javascript", "Html"];
                    //EXO 2

echo 'Je suis un dev ' . $dev . ' et je connais le ' . $technos[2] . ' et ' . $technos[3];
                    //EXO 2
   array_push($technos, "Python");       
   print_r($technos);          
?>
<p>Vos identifiants sont <?php echo $_GET['login'] . " " . $_GET['password']; ?></p>

</body>
</html>