
<html>
<title>Roman Numeral To Decimal</title>
<style>
 body {
font-family: arial;
font-size: 18px;
font-weight: bold;
 };
</style>
<body>
<br>
 <h2>Roman Numeral To Decimal</h2>
<form action="" method="post">
Enter Roman Numeral
 <input type="text" name="input"
 value="<?php echo $input_A; ?>" size="5" autofocus required/>
 <br><br>
 <input type="submit" name="SubmitButton" value="Ok"/>
  
 <input type="submit" name="ClearButton" value="Clear"/>
</form>


<h2>Decimal To Roman Numeral</h2>
<form action="" method="post">
Enter Decimal Number

 <input type="text" name="inputNumber"
 value="<?php echo $input_Number; ?>" size="5" autofocus required/>
 <br><br>
 <input type="submit" name="SubButton" value="Ok"/>
  
 <input type="submit" name="ClrButton" value="Clear"/>
</form>

<?php
class RomanNumber {
	//Function will convert From Roman To Decimal
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

//Function will convert From Decimal To Roman 
function intToRoman($num)  
{  
    // storing roman values of digits from 0-9  
    // when placed at different places 
    $m = array("", "M", "MM", "MMM"); 
    $c = array("", "C", "CC", "CCC", "CD", "D",  
                   "DC", "DCC", "DCCC", "CM"); 
    $x = array("", "X", "XX", "XXX", "XL", "L",  
                   "LX", "LXX", "LXXX", "XC"); 
    $i = array("", "I", "II", "III", "IV", "V",  
                   "VI", "VII", "VIII", "IX"); 
          
    // Converting to roman 
    $thousands = $m[$num / 1000]; 
    $hundereds = $c[($num % 1000) / 100]; 
    $tens = $x[($num % 100) / 10]; 
    $ones = $i[$num % 10]; 
          
    $ans = $thousands . $hundereds . $tens . $ones; 
          
    return $ans; 
} 
}

$RomanNum = new RomanNumber();
 if(isset($_POST['ClearButton'])){
 $input_A="";
 }

 if(isset($_POST['ClrButton'])){
 $input_Number="";
 }

if(isset($_POST['SubButton'])){
$input_Number = $_POST['inputNumber'];
$original_value = $input_Number;
$value = $RomanNum->intToRoman($input_Number);
if($original_value=='0'){
echo "<script>alert('Invalid details. Please try again');</script>";
}
}

if(isset($_POST['SubmitButton'])){
$input_A = $_POST['input'];
$original = $input_A;
$Num_value = $RomanNum->roman_convert($input_A);
if($Num_value=='0'){
echo "<script>alert('Invalid details. Please try again');</script>";
}
}
?>
Output for Convertion from Roman to Decimal
<input type="text" name="output" size="5" value="<?php echo $Num_value; ?>"/>
<br><br><br><br>
Output for Convertion from Decimal to Roman 
<input type="text" name="output" size="5" value="<?php echo $value; ?>"/>
</body>
</html>