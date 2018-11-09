<?php
$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

if (isset($data['sexto'])) {
    file_put_contents(__DIR__.'/database-new.txt', $data['sexto']."\n", FILE_APPEND);
}
