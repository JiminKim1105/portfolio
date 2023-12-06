import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

# 사용하는 핀 번호 할당 
SW = 5
LED_R = 16 # 빨강은 16핀
LED_G = 20 # 초록은 20핀
LED_B = 21 # 파랑은 21핀 

# SW핀을 입력 핀으로 설정
GPIO.setup(SW,GPIO.IN)

GPIO.setup(LED_R,GPIO.OUT)
GPIO.setup(LED_G,GPIO.OUT)
GPIO.setup(LED_B,GPIO.OUT)

count = 0

try:
    while True:
        # 스위치 상태를 key_in에 할당
        key_in = GPIO.input(SW)
        
        if key_in == 0 and count == 0: #빨강
            GPIO.output(LED_R,GPIO.HIGH)
            GPIO.output(LED_G,GPIO.LOW)
            GPIO.output(LED_B,GPIO.LOW)
            time.sleep(1)
            count += 1
        
        elif key_in == 0 and count == 1:#초록
            GPIO.output(LED_R,GPIO.LOW)
            GPIO.output(LED_G,GPIO.HIGH)
            GPIO.output(LED_B,GPIO.LOW)
            time.sleep(1)
            count += 1

        elif key_in == 0 and count == 2:#파랑
            GPIO.output(LED_R,GPIO.LOW)
            GPIO.output(LED_G,GPIO.LOW)
            GPIO.output(LED_B,GPIO.HIGH)
            time.sleep(1)
            count += 1

        else:
            GPIO.output(LED_R,GPIO.LOW)
            GPIO.output(LED_G,GPIO.LOW)
            GPIO.output(LED_B,GPIO.LOW)

# 키보드 예외 검출
except KeyboardInterrupt:
    GPIO.output(LED_R,GPIO.LOW)
    GPIO.output(LED_G,GPIO.LOW)
    GPIO.output(LED_B,GPIO.LOW)

# GPIO 개방
GPIO.cleanup()