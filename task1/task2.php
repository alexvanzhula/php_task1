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
  <caption>Таблица гибкого  сравнения</caption>
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
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==-1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = false;
      ?>
        <th>false</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 1;
      ?>
        <th>1</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 0;
      ?>
        <th>0</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = -1;
      ?>
        <th>-1</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==-1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = '1';
      ?>
        <th>'1'</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==-1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = NULL;
      ?>
        <th>null</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==-1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr>
     <tr>
       <?php 
      $a = 'php';
      ?>
        <th>'php'</th>
        <th><?php var_dump($a==true);?></th>
        <th><?php var_dump($a==false);?></th>
        <th><?php var_dump($a==1);?></th>
        <th><?php var_dump($a==0);?></th>
        <th><?php var_dump($a==-1);?></th>
        <th><?php var_dump($a=='1');?></th>
        <th><?php var_dump($a==NULL);?></th>
        <th><?php var_dump($a=='php');?></th>
     </tr> 
  


<table> 
  <caption>Таблица жесткого сравнения</caption>
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
</table>
</body>
</html>