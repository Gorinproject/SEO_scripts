<?php
// Login
$login = curl_init('website_name');

curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($login, CURLOPT_COOKIE, 'add_cookie');
curl_setopt($login, CURLOPT_USERPWD, 'Username:Password');
//curl_setopt($login, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($login, CURLOPT_FOLLOWLOCATION, 1);
$Username = '';
$Password = '';

$output = curl_exec($login);
$info = curl_getinfo($login);

echo($output);

$items=$output;
$search = 'php';
function choose($item){
    global $search;
    if (strpos($item,$search) !== false){
        return true;
    }
    return false;
}

echo '<h3>Match found:</h3>';
var_dump(array_filter($items,'choose'));

echo '<pre>';

print_r($output);


?>