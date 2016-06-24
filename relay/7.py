#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme 

GPIO.cleanup() #turn all channels to input 

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(19,GPIO.OUT) #set gpio as output
                        #now the relay detects pin 19 as output

print "switch is now closed"

GPIO.output(19,GPIO.LOW)

