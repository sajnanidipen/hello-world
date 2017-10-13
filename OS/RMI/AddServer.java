import java.net.*;
import java.rmi.*;
public class AddServer
{
public static void main(String args[])
{
try{
AddServerImpl addserverimpl=new AddServerImpl();
Naming.rebind("AddServer",addserverimpl);
}
catch(Exception e)
{
System.out.println("Exception"+e);
}
}
}