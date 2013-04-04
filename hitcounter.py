#!/usr/bin/python
import subprocess #run command line in python script
#get last number from script
subprocess.call('tail -1 visitcounter.txt > visitcounter2.txt', shell=True)
with open('visitcounter2.txt', 'r') as f:
    s = f.readline() #read first line
s = int(s) #convert to int
print s
