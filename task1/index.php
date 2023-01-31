<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
  <h1>Таблицы Истинности</h1>
    <table>
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
...
</table>

<br><br><br><br><br>


<!-- таблица номер 2  -->
<table> 
      <tr>
         <th></th>
         <th>true</th>
         <th>false</th>
         <th>1</th>
         <th>0</th>
         <th>-1</th>
         <th>'1'</th>
         <th>null</th>
         <th>'php'</th>
      </tr>
       <tr>
       <?php 
      $a = true;
      ?>
        <th>true</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = false;
      ?>
        <th>false</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 1;
      ?>
        <th>1</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 0;
      ?>
        <th>0</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = -1;
      ?>
        <th>-1</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = '1';
      ?>
        <th>'1'</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = NULL;
      ?>
        <th>null</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 'php';
      ?>
        <th>'php'</th>
        <th><?php var_dump($a===true);?></th>
        <th><?php var_dump($a===false);?></th>
        <th><?php var_dump($a===1);?></th>
        <th><?php var_dump($a===0);?></th>
        <th><?php var_dump($a===-1);?></th>
        <th><?php var_dump($a==='1');?></th>
        <th><?php var_dump($a===NULL);?></th>
        <th><?php var_dump($a==='php');?></th>
     </tr>
...
</table>
</body>
</html>