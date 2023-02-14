<?php 
function getFullnameFromParts($example_persons_array){
    $allFullNames = [];
   foreach($example_persons_array as $value){
        $allFullNames[] = $value['fullname'];
   }
   return $allFullNames;
}

function getPartsFromFullname($allFullNames){
    $result = [];
    foreach($allFullNames as $value){
        $differentNames = explode(' ',$value);
        $result[] = [
            'surname' => $differentNames[0],
            'name' => $differentNames[1],
            'patronomyc' => $differentNames[2]
        ];        
    }        
    return $result;
}

?>

