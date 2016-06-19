#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme 

GPIO.cleanup() #turn all channels to input 

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(12,GPIO.OUT) #set gpio as output

print "Lights off"

GPIO.output(12,GPIO.LOW)

GPIO.cleanup() #just in case
