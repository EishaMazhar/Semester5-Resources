public class TestFactoryPattern {
     
    public static void main(String args[]){
    MobileFactory mobilefac = new MobileType();
        Mobile iphone = MobileFactory.createmob("Iphone");
        Mobile samsung = MobileFactory.createmob("Samsung");
        Mobile sony = MobileFactory.createmob("Sony");
    }
}