<?php

// Define a class for the Harmony House
class HarmonyHouse {
	
	// A property to hold the house name
	public $houseName;
	
	// A property to hold the size of the house
	public $houseSize;
	
	// A property to hold the number of bedrooms
	public $bedrooms;
	
	// A property to hold the number of bathrooms
	public $bathrooms;
	
	// A property to hold the number of occupants
	public $occupants;
	
	// A method to get the house name
	public function getHouseName() {
		return $this->houseName;
	}
	
	// A method to set the house name
	public function setHouseName($houseName) {
		$this->houseName = $houseName;
	}
	
	// A method to get the house size
	public function getHouseSize() {
		return $this->houseSize;
	}
	
	// A method to set the house size
	public function setHouseSize($houseSize) {
		$this->houseSize = $houseSize;
	}
	
	// A method to get the number of bedrooms
	public function getBedrooms() {
		return $this->bedrooms;
	}
	
	// A method to set the number of bedrooms
	public function setBedrooms($bedrooms) {
		$this->bedrooms = $bedrooms;
	}
	
	// A method to get the number of bathrooms
	public function getBathrooms() {
		return $this->bathrooms;
	}
	
	// A method to set the number of bathrooms
	public function setBathrooms($bathrooms) {
		$this->bathrooms = $bathrooms;
	}
	
	// A method to get the number of occupants
	public function getOccupants() {
		return $this->occupants;
	}
	
	// A method to set the number of occupants
	public function setOccupants($occupants) {
		$this->occupants = $occupants;
	}
	
	// A method to calculate the number of occupants per bedroom
	public function calculateOccupantsPerBedroom() {
		return $this->occupants / $this->bedrooms;
	}
	
	// A method to calculate the number of occupants per bathroom
	public function calculateOccupantsPerBathroom() {
		return $this->occupants / $this->bathrooms;
	}
	
	// A method to calculate the total number of square feet
	public function calculateTotalSquareFeet() {
		return $this->houseSize * $this->bedrooms * $this->bathrooms;
	}
	
	// A method to create a description of the house
	public function createHouseDescription() {
		$description = "Harmony House is a " . $this->houseSize . " square foot house with " . 
			$this->bedrooms . " bedrooms and " . $this->bathrooms . " bathrooms. It can comfortably house up to " . 
			$this->occupants . " occupants.";
		
		return $description;
	}
}

// Instantiate a HarmonyHouse object
$harmonyHouse = new HarmonyHouse();

// Set the house name
$harmonyHouse->setHouseName('Harmony House');

// Set the house size
$harmonyHouse->setHouseSize(3000);

// Set the number of bedrooms
$harmonyHouse->setBedrooms(4);

// Set the number of bathrooms
$harmonyHouse->setBathrooms(2);

// Set the number of occupants
$harmonyHouse->setOccupants(8);

// Get the house name
$houseName = $harmonyHouse->getHouseName();

// Get the house size
$houseSize = $harmonyHouse->getHouseSize();

// Get the number of bedrooms
$numBedrooms = $harmonyHouse->getBedrooms();

// Get the number of bathrooms
$numBathrooms = $harmonyHouse->getBathrooms();

// Get the number of occupants
$numOccupants = $harmonyHouse->getOccupants();

// Calculate the number of occupants per bedroom
$occupantsPerBedroom = $harmonyHouse->calculateOccupantsPerBedroom();

// Calculate the number of occupants per bathroom
$occupantsPerBathroom = $harmonyHouse->calculateOccupantsPerBathroom();

// Calculate the total number of square feet
$totalSquareFeet = $harmonyHouse->calculateTotalSquareFeet();

// Create a description of the house
$houseDescription = $harmonyHouse->createHouseDescription();

// Output the results
echo $houseName . ' is ' . $houseSize . ' square feet with ' . 
	$numBedrooms . ' bedrooms and ' . $numBathrooms . ' bathrooms. It can comfortably house up to ' . 
	$numOccupants . ' occupants. That\'s ' . $occupantsPerBedroom . 
	' occupants per bedroom and ' . $occupantsPerBathroom . 
	' occupants per bathroom. The total number of square feet is ' . 
	$totalSquareFeet . '.' . "\n\n" . $houseDescription;

?>