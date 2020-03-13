<?php
  include_once('test.php');
// Object creation
$obj=new RomanNumber();
    $key= $_GET['key'];
    $array = array();
    function roman_convert($input_roman){
  $di=array('I'=>1,
'V'=>5,
'X'=>10,
'L'=>50,
'C'=>100,
'D'=>500,
'M'=>1000);
 $result=0;
 if($input_roman=='') return $result;
for($i=0;$i<strlen($input_roman);$i++){
$result=(($i+1)<strlen($input_roman) and
 $di[$input_roman[$i]]<$di[$input_roman[$i+1]])?($result-$di[$input_roman[$i]])
:($result+$di[$input_roman[$i]]);
}
 return $result;
}
$value = $obj->roman_convert($key);
if($value=='0'){
echo "<script>alert('Invalid details. Please try again');</script>";
}
?>