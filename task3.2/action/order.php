<?php
include '../src/config.php';
include '../src/class.db.php';
include '../src/class.burger.php';

$burger = new Burger();

$email = $_POST['email'];
// $adressFields = ['street', 'home', 'part', 'appt', 'floor'];
$data = [
    'adress' => $_POST['street'] . ', ' . $_POST['home'] . ', ' . $_POST['part'] . ', ' . $_POST['appt'] . ', ' . $_POST['floor']
];
$adress = $data['adress'];

$user = $burger->getUserByEmail($email);

if ($user) {
    $userId = $user['id'];
    $burger->inOrders($user['id']);
    $orderNumber = $user['orders_count'] + 1;
} else {
    $userId = $burger->createUser($email);
    $orderNumber = 1;
}

$orderId = $burger->addOrder($userId, $data);

echo '
Спасибо, ваш заказ будет доставлен по адресу: $adress <br>
Номер вашего заказа: $orderId <br>
Это ваш $orderNumber заказ! <br>
';