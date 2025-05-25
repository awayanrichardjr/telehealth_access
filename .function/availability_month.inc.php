<?php
$jan = 1;
$feb = 2;
$mar = 3;
$apr = 4;
$may = 5;
$jun = 6;
$jul = 7;
$aug = 8;
$sept = 9;
$oct = 10;
$nov = 11;
$dec = 12;

if ((int)$_SESSION['appointment_month'] === $dec) {
    echo "December";
} else if ((int)$_SESSION['appointment_month'] === $nov) {
    echo "November";
} else if ((int)$_SESSION['appointment_month'] === $oct) {
    echo "October";
} else if ((int)$_SESSION['appointment_month'] === $sept) {
    echo "September";
} else if ((int)$_SESSION['appointment_month'] === $aug) {
    echo "August";
} else if ((int)$_SESSION['appointment_month'] === $jul) {
    echo "July";
} else if ((int)$_SESSION['appointment_month'] === $jun) {
    echo "June";
} else if ((int)$_SESSION['appointment_month'] === $may) {
    echo "May";
} else if ((int)$_SESSION['appointment_month'] === $apr) {
    echo "April";
} else if ((int)$_SESSION['appointment_month'] === $mar) {
    echo "March";
} else if ((int)$_SESSION['appointment_month'] === $feb) {
    echo "February";
} else if ((int)$_SESSION['appointment_month'] === $jan) {
    echo "January";
} else {
    echo "Unknown Month";
}
