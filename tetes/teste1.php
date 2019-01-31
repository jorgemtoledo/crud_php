<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Teste 1</title>
</head>
<body>

  <?php
  include("ClassCaneta.php");

  $c1 = new ClassCaneta("Bic", "Azul", 0.5);
  echo "<pre>";
  // $c1->setModelo("Bic");
  // $c1->modelo = "Bic";
  // $c1->setPonta(0.5);
  // $c1->ponta = "teste";
  print_r($c1);
  // echo "A caneta de modelo {$c1->getModelo()} e ponta {$c1->getPonta()} ";
  echo "</pre>";
  ?>

</body>
</html>