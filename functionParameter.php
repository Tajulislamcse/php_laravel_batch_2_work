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
	public function __destruct()
	{
		$this->_vehicle->start();
	}
}


class Vehicle implements IVehicle
{
	private $_engine;
	public function __construct(IEngine $engine)
	{
		$this->_engine=$engine;
	}
	public function start()
	{ 
		$this->_engine->start();
		echo "\n";
		print("vehicle is runnning");
	}
}
interface IVehicle
{
	public function start();
}

class Engine implements IEngine
{
	public function start()
	{
		print("engine is starting");
	}
}
interface IEngine{
	public function start();
}
$engine=new Engine();
$vehicle=new Vehicle($engine);
$driver=new Driver($vehicle);
//$driver->startVehicle();