<?php
include './src/TariffInterface.php';
include './src/ServiceInterface.php';
include './src/TariffAbstract.php';
include './src/class.TariffBasic.php';
include './src/class.TariffHour.php';
include './src/class.TariffStudent.php';
include './src/class.serviceGPS.php';
include './src/class.serviceDriver.php';

/** @var TariffInterface $tariff */
$tariffBasic = new TariffBasic(5, 60);
$tariffBasic->addService(new serviceGPS(15));
$tariffBasic->addService(new serviceDriver(100));
echo $tariffBasic->countPrice();
echo '<br>';
$tariffHour = new TariffHour(5, 119);
echo $tariffHour->countPrice();
echo '<br>';
$tariffStudent = new TariffStudent(5, 20);
echo $tariffStudent->countPrice();
// echo '<pre>';
// var_dump($tariff);