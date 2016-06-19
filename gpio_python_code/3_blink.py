#!/usr/bin/python

import time #library (to pause programming(executions) for certain amount of time)

import RPi.GPIO as GPIO #gpio library

GPIO.setmode(GPIO.BCM) #gpio order scheme

GPIO.setwarnings(False) #set warnings off

GPIO.setup(12,GPIO.OUT)
#Turn LEDs on
GPIO.output(12,GPIO.HIGH)
time.sleep(1) #sleep for 1 second

#Turn LEDs off
GPIO.output(12,GPIO.LOW)
time.sleep(1) #pause any executions of code for 1 second

#Turn LEDs on
GPIO.output(12,GPIO.HIGH)
time.sleep(1)

#Turn LEDs off
GPIO.output(12,GPIO.LOW)

GPIO.cleanup #turn all channels to input

