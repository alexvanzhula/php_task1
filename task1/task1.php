<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>php</title>
</head>
<body>
    <table>
      <caption>Таблица Истинности</caption>
      <tr>
         <th>A</th>
         <th>B</th>
         <th>!A</th>
         <th>A || B</th>
         <th>A && B</th>
         <th>A xor B</th>
      </tr>
    
      <tr>
      <?php 
      $a=0;
      $b=0;
      ?>
        <th><?php echo $a;?></th>
        <th><?php echo $b;?></th>
        <th><?php var_dump($a);?></th>
        <th><?php var_dump($a || $b);?></th>
        <th><?php var_dump($a === $b);?></th>
        <th><?php var_dump($test_array) ;?></th>
     </tr>
     <tr>
      <?php 
      $a=0;
      $b=1;
      ?>
        <th><?php echo $a;?></th>
        <th><?php echo $b;?></th>
        <th><?php var_dump($a);?></th>
        <th><?php var_dump($a || $b);?></th>
        <th><?php var_dump($a === $b);?></th>
        <th><?php var_dump($test_array) ;?></th>
     </tr>
     <tr>
      <?php 
      $a=1;
      $b=0;
      ?>
        <th><?php echo $a;?></th>
        <th><?php echo $b;?></th>
        <th><?php var_dump($a);?></th>
        <th><?php var_dump($a || $b);?></th>
        <th><?php var_dump($a === $b);?></th>
        <th><?php var_dump($test_array) ;?></th>
     </tr>
     <tr>
      <?php 
      $a=1;
      $b=1;
      ?>
        <th><?php echo $a;?></th>
        <th><?php echo $b;?></th>
        <th><?php var_dump($a);?></th>
        <th><?php var_dump($a || $b);?></th>
        <th><?php var_dump($a === $b);?></th>
        <th><?php var_dump($test_array) ;?></th>
     </tr>
</table>
</body>
</html>