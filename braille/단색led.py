import RPi.GPIO as GPIO
import time

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

GPIO.setup(22,GPIO.IN, pull_up_down = GPIO.PUD_UP) #START
GPIO.setup(24,GPIO.IN, pull_up_down = GPIO.PUD_UP)
GPIO.setup(17,GPIO.OUT) #START
GPIO.setup(10,GPIO.OUT)

try:
    while True:
        button_in = GPIO.input(22)
        button_in = GPIO.input(22)
        if button_in == False:
            GPIO.output(17,True)
            GPIO.output(10,True)
            time.sleep(0.2)
        else:
            GPIO.output(17,False)
            GPIO.output(10,False)
except KeyboardInterrupt:
    GPIO.cleanup()