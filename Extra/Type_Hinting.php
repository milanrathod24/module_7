<?php
class Order {

    // Method with type-hinted array parameter
    public function calculateTotal(array $products) {

        $total = 0;

        foreach ($products as $price) {
            $total += $price;
        }

        return $total;
    }
}

// Create object
$order = new Order();

// Array of product prices
$products = [500, 1200, 800, 300];

// Calculate total
$totalAmount = $order->calculateTotal($products);

// Display result
echo "Total Order Amount: " . $totalAmount;
?>
