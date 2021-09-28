<?php
echo '<br><br>======= PointClass.php ======= <br><br>';
echo '--------------- PointClass --------------- <br>';

class PointClass {
    public function __construct(private int $x = 0, private int $y = 0) {

    }

    public function setX(int $x) {
        $this->x = $x;
    }
    public function setY(int $y) {
        $this->y = $y;
    }
    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }

    public function __toString() {
        return "Distance {{$this->getX()}; {$this->getY()}} - {$this->getDistance()}";
    }

    public function getDistance() {
        return sqrt($this->x **2 + $this->y**2);
    }
}

echo new PointClass(12, 42);

echo '<br> ==========================';