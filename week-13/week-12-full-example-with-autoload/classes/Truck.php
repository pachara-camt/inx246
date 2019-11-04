<?php
class Truck extends Car
{
	private $fuel;
	private $payload;
	
	function __construct($owner, $pistonv)
	{
		parent::__construct($owner, $pistonv);
		$this->fuel = 0;
		$this->payload = 0;
	}
	
	function load($payload)
	{
		$this->payload = $payload;
	}
	
	function currentPayload()
	{
		return $this->payload;
	}
	
	function fuelUsed()
	{
		return $this->fuel;
	}
	
	function runFor($km)
	{
		$result = parent::runFor($km);
		
		if($result) {
			$this->fuel += (($km / 20) * ( $this->pistonVolume() / 1000))
				+ ($this->payload * $km / 10000);
		}
		
		return $result;
	}
	
	function showLongInfo()
	{
		$result = parent::showLongInfo();
		
		if($result) {
			printf("Current payload:  %6d kg\n", $this->currentPayload());
		}
		
		return $result;
	}
}
