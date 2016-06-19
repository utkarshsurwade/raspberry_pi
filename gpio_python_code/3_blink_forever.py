#!/usr/bin/python

import time # time library      

import RPi.GPIO as GPIO #gpio library

GPIO.setmode(GPIO.BCM) #gpio order scheme

GPIO.setwarnings(False) #set warnings off


GPIO.setup(12,GPIO.OUT) #set gpio as output

while 1:        #loop forever
	
	GPIO.output(12,GPIO.HIGH)
	time.sleep(1) #pause any executions of code for 1 second
	
	GPIO.output(12,GPIO.LOW)
	time.sleep(1)
