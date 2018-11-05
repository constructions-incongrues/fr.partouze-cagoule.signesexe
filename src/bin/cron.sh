#!/bin/bash
source ../.env
for number in $(cat signesexe.partouze-cagoule.fr/src/data/subscribers.txt); do
    ${PHP_BIN} signesexe.partouze-cagoule.fr/src/bin/send-sms.php "'$number'";
done