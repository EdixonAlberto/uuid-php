<?php

require_once __DIR__ . '../../vendor/autoload.php';

$id = '90fd5a80-a517-4a2e-b09f-5ca2e9bec010';
$result = \Libraries\Gui::validate($id);

var_dump($result);
