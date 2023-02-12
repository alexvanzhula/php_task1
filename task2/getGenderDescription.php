 <?php

function getPartsFromFullname ($result) {
    $genderDiscription = 0;
    $genderMale = 0;
    $genderFemale = 0;
    $name = mb_substr(['surname'][-1]);
    $surname = mb_substr(['name'][-2]);
    $patronomys = mb_substr(['patronomys'][-1])
    if ($name == 'я' ||  $surname == 'ва' || $patronomys == 'вна' ) { 
        return $genderFemale +=1;
    } else{
         return $genderMale +=1;   
        }
    }

      if (($genderDiscription = $genderFemale + $genderMale) > 0 ) {
        echo ('женский пол');
      } else {
        echo ('мужской пол');
      } 
?>

