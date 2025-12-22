<?php



abstract class Payment
{

    protected $amount;

    public function __construct($amount)
    {

        $this->amount = $amount;

    }

    abstract public function pay();


    public function get_amount()
    {
        return $this->amount;

    }

    protected function set_amount($amount){
        $this->amount = $amount;
    }


}


interface Refunds
{

    public function refund();


}



class PayPal extends Payment implements Refunds
{


    public function pay()
    {
        return "Paid {$this->amount} using PayPal";
    }

    public function refund()
    {
        return "Refunded {$this->amount} via PayPal";
    }



    public function set_amount($amount){

    }

}



class Creditard extends Payment
{

    public function pay()
    {
        return "Paid {$this->amount} using Credit Card";
    }



    public function refund()
    {
        return "Refunded {$this->amount} to Credit Card";
    }


}



class Crypto extends Payment
{

    public function pay()
    {
        return "Paid {$this->amount} using Cryptocurrency";
    }


    public function refund()
    {
        return "Refunded {$this->amount} to Crypto Wallet";
    }



}









?>