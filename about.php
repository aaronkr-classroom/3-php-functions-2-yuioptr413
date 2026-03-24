<?php
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'kr' => 1495.29,
];

function calculate_prices($usd, $x_rates) {
    $prices = [
        'pound' => $usd * $x_rates['uk'],
        'euro'  => $usd * $x_rates['eu'],
        'yen'   => $usd * $x_rates['jp'],
        'won'   => $usd * $x_rates['kr'],
    ];
    return $prices;
}
$global_prices = calculate_prices($us_price, $rates);
?>

<?php include 'includes/header.php'; ?>

<h2>Welcome!</h2>
<p>We sell chocolates to many countries!</p>
<p>US $<?= $us_price ?></p>
<p>
    (UK &pound; <?= $global_prices['pound'] ?> |
    EU &euro; <?= $global_prices['euro'] ?> |
    JP &yen; <?= $global_prices['yen'] ?> |
    KR &#8361; <?= $global_prices['won'] ?>)

<?php include 'includes/footer.php'; ?>
