<?php

include_once("simple_html_dom.php");

// Load HTML
//$html = file_get_html('https://www.arin.net/knowledge/micro_allocations.html');
$html = file_get_html('2017-01-09-micro_allocations.html');

// 2nd ul class=rawlist
$e = $html->find('ul.rawlist', 1);
foreach($e->find('li') as $li) {
	// remove whitespace and echo
	echo str_replace(' ', '', $li->plaintext) . "\n";
}

// 3rd ul class=rawlist
$e = $html->find('ul.rawlist', 2);
foreach($e->find('li') as $li) {
	// remove whitespace and echo
	echo str_replace(' ', '', $li->plaintext) . "\n";
}

?>