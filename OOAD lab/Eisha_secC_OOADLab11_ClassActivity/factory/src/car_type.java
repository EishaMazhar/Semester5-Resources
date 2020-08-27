public class car_type extends factory{
    @Override
    public  Car createcar(String type){
        Car car1;
        switch (type.toLowerCase()){
            case "small":
                car1 = new small();
                break;
            case "luxury":
                car1 = new luxury();
                break;
     
            default: throw new IllegalArgumentException("No such Thali.");
        }
  
        car1.addCar();
        return car1;
    }
}