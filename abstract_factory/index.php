<?php
interface Car
{
    public function getParking();
    
}

interface Bus
{
    public function getMaxPassengers();
 
    public function getComfortability();
}

interface TransportFactory
{
    public function transit(): transit;
    public function fusion(): fusion;
    public function mondeo(): mondeo;
}

class FordFactory implements TransportFactory
{
    public function transit() : transit
    {
        return new Ford_transit();
    }

    public function fusion() : fusion
    {
        return new Ford_fusion();
    }

    public function mondeo() : mondeo
    {
        return new Ford_mondeo();
    }

}

class CarFord implements Car
{
    public function getParking()
    {

    }
}

class BusFord implements Bus
{
    public function getMaxPassengers()
    {
        // code
    }
 
    public function getComfortability()
    {
        // code
    }
}


?>