<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $content=$_POST["content"];

}
$file="ppt.txt";
$handle=fopen($file,"w");
if(fwrite($handle,$content)==FALSE){
    echo "Error in Appending";
}
else{
    echo "Data is Appended Successfully .<br>";
}
$max_len=0;
$st3="";
$st2="";
for($i=0; $i < strlen($content); $i++){
    if( $content[$i]!=" "){
        $st2=$st2.$content[$i];
    }
    else{
        if(strlen($st2) >= $max_len){
            $max_len=strlen($st2);
            $st3=$st2;
        }
        $st2="";
    }
}
echo "Max length Word in Content $max_len $st3 ";
?>
