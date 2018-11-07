#!/bin/bash

source ./src/.env
for number in $(cat ./src/data/subscribers.txt); do
    ${PHP_BIN} ./src/bin/send-sms.php "'$number'";
done