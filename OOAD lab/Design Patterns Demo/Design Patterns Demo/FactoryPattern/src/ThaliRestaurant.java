public class ThaliRestaurant extends BaseThaliRestaurant{
    @Override
    public  Thali createThali(String type){
        Thali thali;
        switch (type.toLowerCase())
        {
            case "gujarati":
                thali = new GujaratiThali();
                break;
            case "punjabi":
                thali = new PunjabiThali();
                break;
     
            default: throw new IllegalArgumentException("No such Thali.");
        }
  
        thali.addSabji();
        thali.addRice();
        thali.addDal();
        thali.addRoti();
        thali.makeThali();
        return thali;
    }
}