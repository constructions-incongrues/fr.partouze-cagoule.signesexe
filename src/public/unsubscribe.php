<?php
$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

if (isset($data['number'])) {
    file_put_contents(__DIR__.'/../data/blacklist.txt', $data['number']."\n", FILE_APPEND);
}