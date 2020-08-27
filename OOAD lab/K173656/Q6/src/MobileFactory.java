public class MobileFactory extends MobileType{
    @Override
    public  Mobile createmob(String type){
        Moblie mobile;
        switch (type.toLowerCase())
        {
            case "sony":
                mobile = new SonyMobile();
                break;
            case "iphone":
                mobile = new IphoneMobile();
            case "samsung":
                mobile = new SamsungMobile();
                break;
     
            default: throw new IllegalArgumentException("No such mobile.");
        }
        return mobile;
    }
}