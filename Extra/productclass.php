<?php
// Category Class
class Category {
    private $categoryName;

    public function __construct($categoryName) {
        $this->categoryName = $categoryName;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }
}

// Product Class
class Product {
    private $productName;
    private $price;
    private $category;

    public function __construct($productName, $price, Category $category) {
        $this->productName = $productName;
        $this->price = $price;
        $this->category = $category;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category->getCategoryName();
    }
}

// Order Class
class Order {
    private $product;
    private $quantity;

    public function __construct(Product $product, $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getOrderDetails() {
        return "Product: " . $this->product->getProductName() .
               ", Category: " . $this->product->getCategory() .
               ", Quantity: " . $this->quantity .
               ", Total Price: " . ($this->product->getPrice() * $this->quantity);
    }
}

// Create Objects
$category = new Category("Electronics");
$product = new Product("Laptop", 50000, $category);
$order = new Order($product, 2);

// Display Order Details
echo $order->getOrderDetails();
?>
