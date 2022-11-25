<?php

$paragraph = $_GET ["newParagraph"];
$filterWord = $_GET ["badWord"]; 

echo "Hai inserito questo testo:" ."<br>" .$paragraph ."<br><br>" ."Il testo inserito è lungo " .strlen($paragraph) ." caratteri" ."<br><br>";
$filterParagraph = str_replace($filterWord, '***', $paragraph);
echo "Il testo filtrato è:" ."<br>" .$filterParagraph ."<br><br>" ."Ed è lungo " .strlen($filterParagraph) ." caratteri" ;
