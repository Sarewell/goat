<?php
// debug array
function debug_array($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

// print error message
function errorMsg($name)
{
    global $error;
    if (isset($error[$name])) {
        echo $error[$name];
    }
}

// show value of input
function showInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
//nettoyage des input
function cleanInput($string)
{
    return trim(htmlspecialchars($string));
}