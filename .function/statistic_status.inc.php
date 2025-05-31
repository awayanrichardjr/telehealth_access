<?php

$mild = 10;
$moderate = 40;
$severe = 60;
$chronic = 80;
$emergency = 90;

// 10 15 20 25 30 35 40 45 50 55 60 65 70 75 80 85 90

if ($as >= $emergency) {
    echo '<p style="color: var(--emergency);">' . $as . "%" . " emergency" . '</p>';
} else if ($as >= $chronic) {
    echo '<p style="color: var(--chronic);">' . $as . "%" . " chronic" . '</p>';
} else if ($as >= $severe) {
    echo '<p style="color: var(--severe);">' . $as . "%" . " severe" . '</p>';
} else if ($as >= $moderate) {
    echo '<p style="color: var(--moderate);">' . $as . "%" . " moderate" . '</p>';
} else if ($as >= $mild) {
    echo '<p style="color: var(--mild);">' . $as . "%" . " mild" . '</p>';
} else if ($as < 0.01) {
    echo '<p style="color: grey;">' . $as . "%" . "" . '</p>';
} else {
    echo '<p style="color: var(--monitor);">' . $as . "%" . " monitoring" . '</p>';
}
