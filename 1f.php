<?php
class Car
{
    private string $marka;

    private string $model;

    private int $godvipuska;

    private int $mileage;

    public function __construct(string $marka = "BMW", string $model = "X5", int $godvipuska = 2025, int $mileage = 690)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->godvipuska = $godvipuska;
        $this->mileage = $mileage;
    }

    public function getInfo(): string
    {
        return "Машина: " . $this->marka . ", модель: " . $this->model
            . ", год: " . $this->godvipuska . ", пробег: " . $this->mileage . " км";
    }

    public function drive($kilometrs)
    {
        if ($kilometrs > 0) {
            $this->mileage += $kilometrs;
        } else {
            echo "Пробег должен быть положительнымю.\n ";
        }
    }

    public function getMileage(): int
    {
        return 690;
    }
}
$myCar = new Car("BMW", "X5", 2025, 690); 
echo $myCar->getInfo() . "\n"; 
$myCar->drive(1500);
echo "После поездки:\n " . $myCar->getInfo() . "\n";
echo "Возвращенный пробег: " . $myCar->getMileage() . " км\n";
