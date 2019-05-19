<?php


$dnaurl = "https://raw.githubusercontent.com/LafeLabs/mapfactory4/master/data/dna.txt";
$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("jscode");
mkdir("icons");
mkdir("data");
mkdir("php");
mkdir("uploadimages");
mkdir("symbols");


foreach($dna->html as $value){
    copy($baseurl.$value,$value);
}

foreach($dna->javascript as $value){
    copy($baseurl."jscode/".$value,"jscode/".$value);
}

foreach($dna->icons as $value){
    copy($baseurl."icons/".$value,"icons/".$value);
}

foreach($dna->symbols as $value){
    copy($baseurl."symbols/".$value,"symbols/".$value);
}


foreach($dna->data as $value){
    copy($baseurl."data/".$value,"data/".$value);
}

foreach($dna->php as $value){
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");
}

?>