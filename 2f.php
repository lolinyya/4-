<?php
class Rectangle
{
    public float $dlina;

    public float $chirina;

    public function __construct(float $dlina = 20, float $chirina = 30,)
    {
        if ($dlina <= 0 || $chirina <= 0) {
            echo "Ошибка: Длина и ширина должны быть положительными числами.\n";
            exit();
        }
        $this->dlina = $dlina;
        $this->chirina = $chirina;
    }

    public function getInfo(): string
    {
        return "Прмоугольник: " . $this->dlina . ", Длинна: " . $this->chirina
            . ", Ширина: ";
    }

    public function getArea(): float
    {
        return $this->dlina * $this->chirina;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->dlina + $this->chirina);
    }
}
$Rectangle = new Rectangle(10, 30.27);
echo "Площадь: " . $Rectangle->getArea() . "\n";
echo "Периметр: " . $Rectangle->getPerimeter() . "\n";