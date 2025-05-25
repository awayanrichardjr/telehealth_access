<?php

$mild = 0.10;
$moderate = 0.25;
$severe = 0.45;
$chronic = 0.70;
$emergency = 0.90;

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
} else {
    echo '<p style="color: grey;">' . $as . "%" . " monitoring" . '</p>';
}
