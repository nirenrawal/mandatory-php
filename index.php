<?php
require_once __DIR__.'/helpers.php';
require_once('./classes/person.php');

header('Content-Type: text/html; charset=utf-8');



function getPersonObejct($minValue=1, $maxValue=1) {
    $persons = json_decode(file_get_contents('./data/persons.json'), true)['persons'];

    for ($x = $minValue; $x <= $maxValue; $x++) {

        $name = $persons[$x]['name'];
        $surname = $persons[$x]['surname'];
        $gender = $persons[$x]['gender'];
        $person = new Person($name, $surname, $gender);

        $dob = generateDOB();
        $person->setDOB($dob);

        $cpr = generateCpr($person->getDOB(), $person->getGender());
        $person->setCpr($cpr);

        $phone = generatePhoneNumber();
        $person->setPhoneNumber($phone);

        $cityName = getRandomStreetName();
        $houseNr = getRandomHouseNr();
        $floorNum = floorNumber();
        $doorSide = randomDoorSideText();
        $city_postal_code = getRandomCityPost();
        $address = $cityName . " " .$houseNr .",<br>" .$floorNum . " " . $doorSide . ",<br>" . $city_postal_code;
        $person->setAddress($address);
    


        echo $person->getFullNameAndGender() .'<br>'.'Date of Birth: '. $person->getDOB(). '<br>'.'CPR: '. $person->getCpr().'<br>'.'<br>'.'Address:'. 
        '<br>'. $person->getAddress().
        '<br>'.'Tlf: '. $person->getPhoneNumber(). '<br><hr><br>';
      } 
    
}


getPersonObejct(1, 99);


