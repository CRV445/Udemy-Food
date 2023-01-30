<?php
// для работы с JSON-форматом 
$_POST = json_decode(file_get_contents("php://input"), true);
// работа через formData
echo var_dump($_POST);
