<?php 
$html = file_get_contents('https://journals.sagepub.com/home/VRT');
$htmlDom = new DOMDocument;
@$htmlDom->loadHTML($html);
$links = $htmlDom->getElementsByTagName('a');
$extractedLinks = array();
foreach($links as $link){
    $linkText = $link->nodeValue; 
    if($linkText == "Thereapeutic Advances in Infectious Disease"){
    $linkHref = $link->getAttribute('href');
    $extractedLinks[] = array(
        'href' => $linkHref
    );
 }
}
var_dump($extractedLinks);

?>