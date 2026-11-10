
<?php
{
// PARENT CLASS
class Clothes {
    public $brand; //Bisa diakses dari dalam class, child class, dan luar class.
    protected $size; //Hanya bisa diakses dari class sendiri dan child class.
    public $color; //Bisa diakses dari mana saja.
    private $price; //Hanya bisa diakses dari class Clothes.

    // Constructor
    public function __construct($brand, $size, $color, $price) {
        $this->brand = $brand;
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;
    }

    // Method Public
    public function displayBrand() { //Bisa dipanggil dari mana saja.
        echo "Brand: " . $this->brand . "<br>";
    }

    // Method Protected
    protected function displaySize() { //Hanya bisa dipanggil dari class sendiri dan child class.
        echo "Size: " . $this->size . "<br>";
    }

    // Method menampilkan informasi umum
    public function displayInfo() { //Bisa dipanggil dari mana saja.
        $this->displayBrand();
        $this->displaySize();
        echo "Color: " . $this->color . "<br>";
    }

    // Method Private
    private function displayPrice() { //Hanya bisa dipanggil dari class Clothes.
        echo "Price: Rp " . number_format($this->price, 0, ',', '.') . "<br>";
    }

    // Method untuk menampilkan price
    public function showPrice() { //Bisa dipanggil dari mana saja.
        $this->displayPrice();
    }
}

// CHILD CLASS 1
class Jacket extends Clothes {
    public function showJacket() {
        echo "<h3>JACKET</h3>";
        $this->displayInfo();
        echo "Type: Hoodie<br>";
        $this->showPrice();
    }
}

// CHILD CLASS 2
class TShirt extends Clothes {
    public function showTShirt() {
        echo "<h3>T-SHIRT</h3>";
        $this->displayInfo();
        echo "Model: Oversize<br>";
        $this->showPrice();
    }
}

// CHILD CLASS 3
class Pants extends Clothes {
    public function showPants() {
        echo "<h3>PANTS</h3>";
        $this->displayInfo();
        echo "Material: Jeans<br>";
        $this->showPrice();
    }
}

// OBJECT
$jacket = new Jacket("Adidas", "L", "Black", 3500000);

$tshirt = new TShirt("Nike", "M", "White", 1500000);

$pants = new Pants("Levis", "L", "Blue", 2500000);

// MEMANGGIL METHOD
$jacket->showJacket();

$tshirt->showTShirt();

$pants->showPants();

}