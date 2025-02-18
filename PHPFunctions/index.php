<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and String</title>
</head>
<body>

<p>Question 1</p>

<?php
$x = 12;
$y = 10;
function swaper($num1, $num2)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    return "x = $num1 y= $num2";
};

echo swaper($x, $y);
?>
<br>
<hr>
<p>Question 2</p>

<?php
$armstrong = "407";

function armstronger($num)
{
    $splited = str_split($num);
    if ($splited[0]  **3 + $splited[1]  **3 + $splited[2] ** 3 == $num) {
        return "Armstrong number";
    } else {
        return "Not an Armstrong number";
    }
};
echo armstronger($armstrong);
?>
<br>
<hr>
<p>Question 3</p>

<?php
function isPalindrome($str) {
    $cleanStr = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    $reversedStr = strrev($cleanStr);
    return $cleanStr === $reversedStr;
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>
<br>
<hr>
<p>Question 4</p>
<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);

print_r($array1);
?>
<br>
<hr>
<p>Question 5</p>

<?php
echo strrev("remove");
?>
<br>
<hr>
<p>Question 6</p>

<?php

$lower = "rerove";
$splited = str_split($lower);
if ($splited == str_split(strtolower($lower))) {
    echo "Your string is ok";
} else {
    echo "Your string is not ok";
}
?>

<br>
<hr>
<p>Question 7</p>
<?php
$text = "group orange coding ";
echo strtoupper ($text);
echo '<br>';
echo strtolower ($text);
echo '<br>';
echo ucfirst ($text);
echo '<br>';
echo ucwords($text);
echo '<br>';
?>
<br>
<hr>
<p>Question 8</p>

<?php

$number = "085119";
$result =str_split($number,2);

echo implode (" :",$result);

?>

<br>
<hr>
<p>Question 9</p>

<?php

$texts = 'I am a full stack developer at orange coding academy';
$word = 'orange';

if(strpos($texts, $word) !== false)
{ echo "Word Found!";
 } else{ echo "Word Not Found!"; }

?>
<br>
<hr>
<p>Question 10</p>
<?php 
$url = 'www.orange.com/index.php';
$path = basename ($url);
echo $path;

?>

<br>
<hr>
<p>Question 11</p>

<?php
function findFirstDifference($str1, $str2) {
    $minLength = min(strlen($str1), strlen($str2));

    for ($i = 0; $i < $minLength; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }

    return "No difference found within the common length.";
}

$string1 = "dragonball";
$string2 = "dragonboll";

echo findFirstDifference($string1, $string2);
?>
<br>
<hr>
<p>Question 12</p>

<?php
function getNextLetter($char) {
    return ($char === 'z') ? 'a' : chr(ord($char) + 1);
}

echo getNextLetter('a') . "\n"; 
echo getNextLetter('z') . "\n"; 

?> 

<br>
<hr>
<p>Question 13</p>

<?php
function removeLeadingZeros($num) {
    return ltrim($num, '0');
}

$input = '0000657022.24';
echo removeLeadingZeros($input);
?>


<br>
<hr>
<p>Question 14</p>

<?php

$every = '"\1+2/3*2:2-3/4*3';
$cleaning = preg_replace("/[^a-zA-Z0-9]/", " ", $every);
echo $cleaning;

?>

<br>
<hr>
<p>Question 15</p>

<?php

$str = "the quick brown fox jumps over the lazy dog";
$a = preg_split("~\s+~", $str);
echo $a[0] . " " . $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4];

?>


</body>
</html>