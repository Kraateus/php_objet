<?php

/*Askip c'est du code de merde*/
/*class Person {
    public $firstname;
    public $lastname;
}

    $person1 =new Person();
    $person1->firstname="john";
    $person1->lastname="Doe";
    var_dump($person1);

    $person2 =new Person();
    $person2->firstname="ololo";
    $person2->lastname="bipbip";
    var_dump($person2);    */

/*Version bien*/

    class Person {
        Private $firstname;
        Private $lastname;
        /*Setter*/  
        public function setFirstname($pFirstname) {
            $this->firstname = $pFirstname;
        }
        /*Setter*/
        /*Getter*/
        public function getFirtname() {
            return $this->firstname;
        }
        /*Getter*/
        public function setLastname($plastname) {
            $this->lastname = $plastname;
        }

        public function getLastname() {
            return $this->lastname;
        }
    }
    
        $person1 =new Person();
        $person1->setFirstname("john");
        $person1->setLastname("john");
        var_dump($person1->getFirtname());
        var_dump($person1->getLastname());
    
        $person2 =new Person();
        $person2->setFirstname("je vais");
        $person2->setLastname("réussir");
        var_dump($person2->getFirtname());
        var_dump($person2->getLastname());
        