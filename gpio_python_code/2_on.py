#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme(bcm stands for broadcom)

GPIO.cleanup() #turn all channels to input

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(12,GPIO.OUT) #set gpio as output

print "Lights on"

GPIO.output(12,GPIO.HIGH) 

