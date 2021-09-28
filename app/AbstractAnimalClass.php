<?php

echo '<br><br>=== AbstractAnimalClass.php === <br><br>';
echo '------------ Abstract classes ------------ <br>';

abstract class Animal{
    protected int $paws = 4;
    abstract public function color() : string;
    abstract public function voice() : string;

    public function paws() : string {
        return "count of paws is $this->paws";
    }
}

class Dog extends Animal{
    public function color() : string {
        return 'Black tail';
    }
    public function voice() : string {
        return 'Woof-woof';
    }

    public function __toString() : string {
        return "I'm dog, i say {$this->voice()} and i am {$this->color()}" . $this->paws();
    }
}

class Cat extends Animal{
    public function color() : string {
        return 'white muzzle';
    }
    public function voice() : string {
        return 'Meow-meow';
    }
    public function paws() : string {
        return "$this->paws paws but lands at 2";
    }

    public function __toString() : string {
        return "I'm cat, i say {$this->voice()} and i am {$this->color()}" . $this->paws();
    }
}

class Parrot extends Animal{
    protected int $paws = 2;
    public function color() : string {
        return 'red wings';
    }
    public function voice() : string {
        return 'Meow-meow';
    }

    public function __toString() : string {
        return "I'm parrot, i say {$this->voice()} and i am {$this->color()} " . $this->paws();
    }
}

echo new Dog() . '<br>';
echo new Cat(). '<br>';
echo new Parrot(). '<br>';

echo '<br> ==========================';