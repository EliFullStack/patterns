<?php

interface carCouponGenerator {

    public function addSeasonDiscount ();

    public function addStockDiscount ();


}

class bmwCouponGenerator implements carCouponGenerator {

    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    

    public function addSeasonDiscount () {

        if (!$this->isHighSeason) {
           return $this->discount += 5;
        } else {
           return $this->discount +=0;
        }
    }


    public function addStockDiscount () {

        if ($this->bigStock) {
            return $this->discount += 7;
        } else {
            return $this->discount +=0;
        }    
    } 


}

class mercedesCouponGenerator implements carCouponGenerator {

    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    
    public function addSeasonDiscount () {

        if(!$this->isHighSeason) {
            return $this->discount += 4;
        } else {
            return $this->discount +=0;
        }
        
    
    }

    public function addStockDiscount () {

        if($this->bigStock) {
            return $this->discount += 10;
        } else {
            return $this->discount +=0;
        }
        

    }

}

class couponGenerator {

    private $carCoupon;
      
    public function __construct(carCouponGenerator $carCoupon)

    {
      $this->carCoupon = $carCoupon;
    }
      
    public function getCoupon()

    {
      $discount = $this->carCoupon->addSeasonDiscount();

      $discount = $this->carCoupon->addStockDiscount();
      
      return $coupon = "Get {$discount}% off the price of your new car ";
    }
  }

function couponObjectGenerator($car)
{
  if($car == "bmw")
  {
    $carObj = new bmwCouponGenerator;
  }
  else if($car == "mercedes")
  {
    $carObj = new mercedesCouponGenerator;
  }
      
  return $carObj;
}


$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo $couponGenerator->getCoupon(). $car;
  
echo "<br>";
    
$car = "mercedes";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo $couponGenerator->getCoupon(). $car;


?>