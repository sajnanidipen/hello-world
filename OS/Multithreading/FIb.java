public class FIb extends Thread
{
    private int x;
    public int answer;

    public FIb(int x) {
        this.x = x;
    }

    public void run() {
        if( x <= 2 )
            answer = 1;
        else {
            try {
                FIb f1 = new FIb(x-1);
                FIb f2 = new FIb(x-2);
                f1.start();
                f2.start();
                f1.join();
                f2.join();
                answer = f1.answer + f2.answer;
            }
            catch(InterruptedException ex) { }
        }
    }

    public static void main(String[] args)
        throws Exception
    {
        try {
            FIb f = new FIb( Integer.parseInt(args[0]) );
            f.start();
            f.join();
            System.out.println(f.answer);
        }
        catch(Exception e) {
            System.out.println("usage: java FIb NUMBER");
        }
    }
}