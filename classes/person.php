<?php
class Person{
    private $name;
    private $surname;
    private $gender;
    private $cpr;
    private $dob;
    private $address;
    private $phoneNumber;
    

    function __construct($name, $surname, $gender)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
    }

    function getFullNameAndGender() {
        return $this->name . ' ' . $this->surname . '<br/>' . 'Gender: ' . $this->gender;
    }


    function getGender(){
        return $this->gender;
    }


    function setDOB($dob){
       $this->dob = $dob;
    }


    function getDOB(){
        return $this->dob;
    }


    function setCpr($cpr){
        $this->cpr = $cpr;
    }


    function getCpr(){
        return $this->cpr;
    }


    function setAddress($address){
        $this->address = $address; 
    }


    function getAddress(){
        return $this->address;
    }


    function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }

    
    function getPhoneNumber(){
        return $this->phoneNumber;
    }

}