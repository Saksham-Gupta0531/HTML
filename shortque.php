//Table display
<?php
$num=(int)readline("Enter the Number:-");
for($i=1; $i<11; $i++){
    $mul=$i*$num;
    echo "$i * $num = $mul\n";
}
?>





//prime no
<?php
$num=(int)readline("Enter the Given Number:-");
echo"All Prime Number are\n";
for($i=1; $i<$num; $i++){
    $k=0;
    for($j=1; $j<=$i; $j++)
 {
        if($i%$j==0)
        {
            $k++;
        }
    }
    if($k==2){
        echo"$i ";
    }
}
?>


// string reversal and conversion to uppercase and conversion to lowercase of the given string
<?php
$st1=readline("Enter the String");
$String_length=strlen($st1);
$reverse=strrev($st1);
$upper=strtoupper($st1);
$lower=strtolower($st1);
echo"Length:- $String_length \n Reverse:-$reverse \n Upper:- $upper \n Lower:- $lower";
?>




//swap two integer values 
<?php
function swap_num($a,$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "Swap Value is $a $b ";
}
$a=10;
$b=20;
echo "Before Swap $a $b \n";
swap_num($a,$b);
?>




