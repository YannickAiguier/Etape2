<?php
$sanitized = implode(" ", filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
$filename = "contact/contact_".date("Y-m-d-H-i-s").".txt";
file_put_contents($filename, $sanitized, FILE_APPEND);