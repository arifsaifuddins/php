<?php 

  // control flow

  // 1. loop/pengulangan

  // for
  for ($a=0; $a < 5; $a++) { 
    echo "Hello World! <br>";
  }

  // while
  $b = 0;
  while ($b <= 10) {
    echo "arief <br>";
  $b++;
  }

  // do ... while
  $c = 0;
  do {
    echo "saifuddien <br>";
  $c++;
  } while ($c <= 5);

  // foreach(array)

  // 2. conditional

  // if ... else
  $d = 30;
  if ($d < 20) {
    echo "wrong";
  } else {
    echo "right";
  }

  // if ... else if
  $e = 30;
  if ($e < 20) {
    echo "salah";
  } else if ($e == 30) {
    echo "benar";
  } else {
    echo "bingo";
  }
  // ternary
  // switch

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>control flow</title>
  <style>
  .warna {
    color: grey;
  }

  .bg {
    background-color: rgba(200, 0, 0, 0.5);
  }
  </style>
</head>

<body>

  <!-- loop -->

  <table cellpadding="10" cellspacing="0" border="2">
    <?php for($i = 0; $i <= 4; $i++) : /* { */ ?>
    <tr>
      <?php for($j = 0; $j <= 5; $j++) : /* { */ ?>
      <td><?= "$i,$j" ?></td>
      <?php endfor; /* } */ ?>
    </tr>
    <?php endfor; /* } */ ?>
  </table>


  <!-- condition -->

  <table cellpadding="10" cellspacing="0" border="2">
    <?php for($i = 0; $i <= 4; $i++) : /* { */ ?>
    <?php if ($i % 2 == 0) : ?>
    <tr class="warna">
      <?php else : ?>
    <tr class="bg">
      <?php endif; ?>
      <?php for($j = 0; $j <= 5; $j++) : /* { */ ?>
      <td><?= "$i,$j" ?></td>
      <?php endfor; /* } */ ?>
      <?php echo "satu" ?>
    </tr>
    <?php endfor; /* } */ ?>
  </table>

</body>

</html>