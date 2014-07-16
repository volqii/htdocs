#!/usr/local/bin/python
#-*-coding:utf-8-*-
import requests,serial,sys,time

arduino=serial.Serial("/dev/ttyACM0",9600)

def post():
	line=arduino.readline()
	payload={"gelen":line}
	r=requests.post("http://localhost/ver.php",data=payload)
	return r.text+"--"+line

for i in range(1,10):
	
	print post()