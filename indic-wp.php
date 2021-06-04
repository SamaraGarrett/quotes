<?php
// live indic-wp location, uncomment when uploading this file to main site
//require_once '/home2/icsbinco/public_html/indic-wp/telugu_parser.php';

///*
// local indic-wp location, comment out when uploading this file to main site
$file = "../indic-wp/telugu_parser.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "Error: indic-wp not found<br>
    If you are developing on localhost:<br>
    - Please download the latest version of sjasthi/indic-wp from GitHub and place it in the folder where the Quotes app is located.<br>
    - This folder must be titled <b>indic-wp</b>.<br>
    - For example, if quotes is in <b>htdocs/quotes/</b> then indic-wp should be in <b>htdocs/indic-wp/</b>";
    exit; // don't load page
}
//*/