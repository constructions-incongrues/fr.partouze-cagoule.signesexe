#!/bin/bash
for number in $(cat signesexe.partouze-cagoule.fr/src/data/subscribers.txt); do
    php signesexe.partouze-cagoule.fr/src/bin/send-sms.php "'$number'";
done