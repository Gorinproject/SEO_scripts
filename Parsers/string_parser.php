<?php

$ch = curl_init('website_url');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_COOKIE, '');
curl_setopt($ch, CURLOPT_USERPWD, 'Username:Password');
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$Username = '';
$Password = '';

$output = curl_exec($ch);
$info = curl_getinfo($ch);

echo($output);

include('simple_html_dom.php');
$html = str_get_html($output);
$doc = new DOMDocument();

$doc->loadHTML($html);

$xpath = new DomXPath($doc);
$classname="field-item even";

$nodeList = $xpath->query("//td [@class='field_domain']|/a/@href|//td[@class='field_domain'] //td[@class='field_domainpop']");

print_r($nodeList);

echo '<div class="table-striped">';
echo '<div class="row">';
foreach($nodeList as $node){

$values[] = $node->nodeValue;
echo '<div class="col-6 col-sm-3">' . $node->nodeValue . "</div>";
}

echo '</div>';
echo '</div>';

echo '<pre>';

$items=$values;
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

print_r($values);
?>