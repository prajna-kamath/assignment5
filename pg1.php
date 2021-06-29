<?php
$file=fopen("file.txt","r");
$count=readfile("file.txt");
echo"<br>";
$str=file_get_contents("file.txt");
$vcount=0;
$ccount=0;
$dcount=0;
$scount=0;
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++)
{
    if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i'|| $str[$i]=='o' || $str[$i]=='u')
    {
        $vcount++;
    }
    else if 
       ($str[$i]>='a'  &&    $str[$i]>='z')
    {
        $ccount++; 
    }
    
    
    else if 
        ( $str[$i]>='0'  &&    $str[$i]>='9')
     {
         $dcount++; 
     }
     else  {  $scount++;
    }
     
     
}

$line = count(file("file.txt"));
echo"number of lines:", $line;  echo"<br>";
echo"number of words:", str_word_count($str); echo"<br>";
echo"number of characters:", mb_strlen($str); echo"<br>";
echo"number of vowels:", $vcount; echo"<br>";
echo"number of constants:", $ccount; echo"<br>";
echo"number of digits:", $dcount; echo"<br>";
echo"number of special characters:", $scount - $dcount-1; echo"<br>";
$data=filesize("file.txt"); echo"<br>";
echo 'size of the file is:'.$data; echo"<br>";
fclose($file);
?>
