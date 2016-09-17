#!/bin/sh

#shell scripts can be executed in many ways:type in terminal
#1 bash "script_name.sh"
#2 ./bla/blal/blal/script_name.sh (most preferred)[ownership is required]
#3 when shabang preprocessor directive is not present then type in
#sh script_name

if sudo bash /home/pi/Desktop/Dropbox-Uploader/dropbox_uploader.sh -s upload /var/lib/motion/ /$(date '+%d-%b-%Y')
then
sudo rm -rf /var/lib/motion/ #less effective-rm -r /var/lib/motion/*
else
echo "motion was unable to shift to drive"
fi
