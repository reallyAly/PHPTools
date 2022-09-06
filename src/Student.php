<?php

declare(strict_types=1);

namespace Aly\PhpTools;

class Student {
    private string $firstname;
    private string $lastname;
    private int $age;

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function isOverEighteenYearsOld(){
        return $this->age > 18;
    }
}