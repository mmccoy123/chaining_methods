<?php  

class Bike {

	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price, $max_speed) 
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	public function displayInfo()
	{
		echo "This bike costs: $" . $this->price . "<br>";
		echo "It has a maximum speed of: " . $this->max_speed . " MPH<br>";
		echo "Total distance driven: " . $this->miles . " miles<br><br>";

		return $this;

	}

	public function drive() 
	{
		echo "Driving<br><br>";
		$this->miles += 10;

		return $this;
	}

	public function reverse()
	{
		echo "Reversing<br><br>";
		$this->miles -= 5;

		if ($this->miles < 0 )
		{
			$this->miles = 0;
		}

		return $this;
	}

}

$bike1 = new Bike(300, 50);
$bike2 = new Bike(500, 100);
$bike3 = new Bike(5, 1000000);


echo "Bike #1<br>";
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

echo "Bike #2<br>";
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

echo "Bike #3<br>";
$bike3->reverse()->reverse()->reverse()->displayInfo();

?>

