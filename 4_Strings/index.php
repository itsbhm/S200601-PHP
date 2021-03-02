<?php

$msg = "Hello im written in PHP";

//-------------------------------------------//

$countLen = strlen($msg);

echo "Char Count: " . $countLen;


//-----------------------------------------//
echo "<hr>";

$countWord = str_word_count($msg);

echo "Word Count: " . $countWord;

//-----------------------------------------//
echo "<hr>";

$revStr = strrev($msg);

echo "Reverse String: " . $revStr;

//-----------------------------------------//
echo "<hr>";

$searchStr = strpos($msg, "im");

echo "Search For a Text Within a String: " . $searchStr;

//-----------------------------------------//
echo "<hr>";

$strReplace = str_replace("PHP", "Java", $msg);

echo "Replace Text Within a String: " . $strReplace;
?>