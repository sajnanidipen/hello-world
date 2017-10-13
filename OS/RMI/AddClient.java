import java.rmi.*;
public class AddClient
{
public static void main (String args[])
{
try{
String addserverURL="rmi://"+args[0]+ "/AddServer";
AddServerIntf addserverintf=(AddServerIntf)Naming.lookup(addserverURL);
System.out.println("The first number is:"+args[1]);
double d1=Double.valueOf(args[1]).doubleValue();
System.out.println("the second number is:"+args[2]);
double d2=Double.valueOf(args[2]).doubleValue();
System.out.println("The sum is:"+addserverintf.add(d1,d2));
}
catch(Exception e)
{
System.out.println("Exception:"+e);
}
}
}