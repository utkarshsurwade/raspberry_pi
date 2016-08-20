#!/bin/sh

#shell scripts can be executed in many ways:type in terminal
#1 bash "script_name.sh"
#2 ./bla/blal/blal/script_name.sh (most preferred)[ownership is required]
#3 when shabang preprocessor directive is not present then type in
#sh script_name
 
if sudo rsync -av /var/lib/motion utkarsh@192.168.0.105:~/Desktop #ssh keys for root user is required for this command to word
then
sudo rm -rf /var/lib/motion/ #less effective-rm -r /var/lib/motion/*
else
echo "motion was unable to shift"
fi
