<?php
// phpcs:ignore
ini_set('dislay_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__DIR__) . '/vendor/autoload.php';
// require __DIR__ . '/../app/Products.php';
use App\Models\User;

// $user = new User("username", "password", "email");
// $category = new Category("name");
// $cart = new Cart($user);
// $cartItem = new CartItem($cart, "name", $category);

$timezone = new DateTimeZone('UTC');
$created_at = new DateTime('NOW', $timezone);
$updated_at = new DateTime('NOW', $timezone);

$user = new User(
    'name',
    'password',
    'mail@gmail.com',
    $created_at,
    $updated_at
);

print_r($user);
