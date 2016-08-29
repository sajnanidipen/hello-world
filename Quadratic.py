("Enter A B C in the format of ax^2+by+c")
a=input("Enter Value Of A=")
a=int(a)
b=input("Enter Value Of B=")
b=int(b)
c=input("Enter Value Of C=")
c=int(c)
d=(b**2)-(4*a*c)
e=d**0.5
f=e/2*a
b=-b
r1=(b+f)
r2=(b-f)
print ("The Roots Of Quadratic Equation Are:" ,r1 ,"And" ,r2,"Respectively")

input("Enter To Continue")
