class MyProcess:
    def __init__(self,pid,p_name,num_inst,priority):
        self.p_id=pid
        self.pname = p_name
        self.num_inst1=num_inst
        self.priority1=priority
    def display(self):
        print(self.p_id,'\n',self.pname,'\n', self.num_inst1,'\n', self.priority1)

x=int(input("Enter Process ID:"))
m=input("Enter Process Nm:")
n=int(input("No. of instructions:"))
p=int(input("Enter Process ID for Priority"))
y=MyProcess(x,m,n,p)
y.display()
