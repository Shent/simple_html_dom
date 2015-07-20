<?php
include(__DIR__ . '/../vendor/autoload.php');

echo file_get_html('http://www.google.com/')->plaintext;
