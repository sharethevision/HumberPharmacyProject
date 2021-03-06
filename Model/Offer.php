<?php
class Offer {
    private $offerid;
    private $productid;
    private $discountrate;
    private $dateadded;
    private $days;
    
    public function __construct($id,$productid,$discountrate,$dateadded,$days) {
        $this->offerid=$id;
        $this->productid=$productid;
        $this->discountrate=$discountrate;
        $this->dateadded=$dateadded;
        $this->days=$days;
    }
    
    public function getOfferID()
    {
        return $this->offerid;
    }
    public function getProductID()
    {
        return $this->productid;
    }
    public function getDiscountRate()
    {
        return $this->discountrate;
    }
    public function getDateAdded()
    {
        return $this->dateadded;
    }
    public function getDaysActive()
    {
        return $this->days;
    }
}
?>
