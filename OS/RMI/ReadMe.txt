Intialization:set u r path to java bin in cmd.Eg:set path=c:\programfiles\jdk1.3\bin

1.Compile al the files.(javac filename.java)
2.Create stub and skeleton for your AddServerImpl.java using the following command

rmic -vcompat AddServerImpl

3.Run the rmiregistry from bin of your jdk folder,leave it unclosed.
4.Run your server file with foolwing command:

java AddServer

5.Open new command prompt window,set the path and run your client code:

java AddClient 127.0.0.1 1 1
6.u should c the summed up value,here 127.0.0.1 is the local host(ur own system).