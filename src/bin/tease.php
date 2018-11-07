<?php
$sextos = file(__DIR__.'/../public/database-verified.txt');
$messageBody = sprintf("%s... - https://ss.partouze-cagoule.fr", substr($sextos[array_rand($sextos)], 0, 17));

echo html_entity_decode($messageBody, ENT_QUOTES | ENT_XML1, 'UTF-8'), "\n";