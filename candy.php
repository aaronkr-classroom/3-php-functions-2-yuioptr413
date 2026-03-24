<?php 
declare(strict_types = 1);
$candy = [
    'Toffee' => ['price' => 3.00, 'stock' => 12],
    'Mints'  => ['price' => 2.00, 'stock' => 26],
    'Fudge'  => ['price' => 4.00, 'stock' => 8],
];
$tax = 20; // %

// Functions (함수들)
function get_reorder_msg(int $stock): string {
    //return 조건 ? 참 : 거짓; <= 반환할 문자열
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $stock): float {
    return $price * $stock; 
}

function get_tax_due(float $price, int $stock, int $tax = 10): float {
    //return ($price * $stock) * ($tax / 100);
    return get_total_value($price, $stock) * ($tax / 100);
}
?>

<?php include 'includes/header.php'; ?>

<h2>Candy Stock Control</h2>

<table>
    <tr>
        <th>Candy</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total value</th>
        <th>Tax due</th>   
    </tr>
    <?php foreach ($candy as $product => $data) { ?>
    <tr>
        <td><?= $product ?></td>
        <td><?= $data['stock'] ?></td>
        <td><?= get_reorder_msg($data['stock']) ?></td>
        <td>$<?= get_total_value($data['price'], $data['stock']) ?></td>
        <td>$<?= get_tax_due(stock: $data['stock'], price: $data['price']) ?></td>
    </tr>
    <?php } ?>
</table>

<?php include 'includes/footer.php'; ?>
