<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $results = '';
    $message = '';


    if ($height === '' || $height < 0 || is_nan($height)) {
        $results = 'Please provide a valid height';
    } else if ($weight === '' || $weight < 0 || is_nan($weight)) {
        $results = 'Please provide a valid weight';
    } else {
        $bmi = number_format($weight / (($height * $height) / 10000), 2);

        $results = '<span>' . $bmi . '</span>';

        if ($bmi < 18.6) {
            $message = 'You Are Underweights';
        } else if ($bmi > 18.6 && $bmi < 24.9) {
            $message = 'You Are Normal';
        } else if ($bmi > 24.9 && $bmi < 29.9) {
            $message = 'You Are Overweight';
        } else if ($bmi > 29.9 && $bmi < 34.9) {
            $message = 'You Are Obese';
        } else if ($bmi > 34.9) {
            $message = 'You Are Extremely Obese';
        }
    }
}
