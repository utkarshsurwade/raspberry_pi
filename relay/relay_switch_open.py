#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme(bcm stands for broadcom)

GPIO.cleanup() #turn all channels to input

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(26,GPIO.OUT) #set gpio as output
                        #now the relay detects pin 26 as output

print "switch is now open"

GPIO.output(26,GPIO.HIGH) 

#general relay explanation

#when current flows through switch-relay then due to electromagnetism the
#the switch is pulled upward and is now open
