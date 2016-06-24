#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme(bcm stands for broadcom)

GPIO.cleanup() #turn all channels to input

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(6,GPIO.OUT) #set gpio as output
                        #now the relay detects pin 6 as output

print "switch is now open"

GPIO.output(6,GPIO.HIGH) 
