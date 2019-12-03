<?php

/**
 * 
 */
class Driver 
{
  private $_vehicle;
 public function __construct(IVehicle $vehicle)
	{
		# code...
		$this->_vehicle=$vehicle;
	}
	public function startVehicle()
	{
		$this->_vehicle->start();
	}
}

class Car implements IVehicle
{
	public function start()
	{
		print("car is runnning");
	}
}
class Plane implements IVehicle
{
	public function start()
	{
		print("plane is runnning");
	}
}
interface IVehicle
{
   public function start();
}
$car=new Car();
$plane=new Plane();
$driver=new Driver($plane);
$driver->startVehicle();