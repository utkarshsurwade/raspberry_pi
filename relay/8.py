#!/usr/bin/python

import RPi.GPIO as GPIO #library

GPIO.setmode(GPIO.BCM) #gpio order scheme 

GPIO.cleanup() #turn all channels to input 

GPIO.setwarnings(False) #turn off warnings

GPIO.setup(26,GPIO.OUT) #set gpio as output
                        #now the relay detects pin 26 as output

print "switch is now closed"

GPIO.output(26,GPIO.LOW)

