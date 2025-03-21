<?php

abstract class Animal
{
    protected string $name;
    protected int $age;
    protected string $species;

    public function __construct(string $name, int $age, string $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    abstract public function makeSound(): void;

    public function getInfo(): string
    {
        return "Имя: {$this->name}, Вид: {$this->species}, Возраст: {$this->age}";
    }
}

class Dog extends Animal
{
    private string $breed;

    public function __construct(string $name, int $age, string $breed)
    {
        parent::__construct($name, $age, "Собака");
        $this->breed = $breed;
    }

    public function makeSound(): void
    {
        echo "{$this->name} говорит: Гав-гав!\n";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Порода: {$this->breed}";
    }
}

class Cat extends Animal
{
    private string $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, "Кошка");
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo "{$this->name} говорит: Мяу!\n";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Цвет: {$this->color}";
    }
}

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function listAnimals(): void
    {
        echo "Животные в зоопарке:\n";
        foreach ($this->animals as $animal) {
            echo $animal->getInfo() . "\n";
        }
    }

    public function animalSounds(): void
    {
        echo "Звуки животных:\n";
        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }
}


$dog1 = new Dog("Герта", 13, "Лайка");
$dog2 = new Dog("Буля", 15, "Дворняжка");
$cat1 = new Cat("Персик", 1 , "Рыжий");
$cat2 = new Cat("Барсик", 3, "Черный");

$zoo = new Zoo();

$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);

$zoo->listAnimals();

$zoo->animalSounds();
