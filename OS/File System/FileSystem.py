import os
x=os.getcwd()
while True:
	a=input(x+":")
	if (a=="exit"):
		break
	elif (a=="ls"):
		b=listdir()
		for i in b :
			print(i)
	elif (a=="mkdir"):
		b=input("Enter Directory Name")
		os.mkdir(b);
	elif (a=="rmdir"):
		b=input("Enter Directory Name")
		x=os.getcwd()
	elif (a=="mv"):
		b=input("Enter Old File Name")
		c=input("Enter The New File Name")
		os.remove(b,c)
	elif (a=="rm"):
		os.remove(b)
	elif (a=="cd"):
		b=input("Enter The Directory")
		os.chdir(b)
	elif (a=="cd.."):
		os.chdir("..")
		x=os.getcwd()
	elif (a=="cat"):
		b=input("Enter The File Name")
		f=open(b,"r")
		print(f.read())
		f.close()
	else:
		print("Unknown Command")
		x=os.getcwd()
	
