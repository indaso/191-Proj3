#!/usr/bin/python
import subprocess #run command line in python script
#get last number from script
subprocess.call('tail -1 visitcounter.txt > visitcounter2.txt', shell=True)
with open('visitcounter2.txt', 'r') as f:
    s = f.readline() #read first line
s = int(s) #convert to int
inc = s + int(1) #increment by one
s = str(inc) #convert back to string
with open('visitcounter2.txt', 'w') as f:
    f.write(s) #write to file
    f.write("\n") #add a new line
#convert back to text file
subprocess.call('tail -1 visitcounter2.txt > visitcounter.txt', shell=True)
#remove temp file
subprocess.call('rm visitcounter2.txt', shell=True)
