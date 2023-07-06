<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collection extends Controller
{
    $dataset = new Collection([
        ['Outlook' => 'Sunny', 'Temperature' => 'Hot', 'Humidity' => 'High', 'Windy' => 'Weak', 'Play' => 'No'],
        ['Outlook' => 'Sunny', 'Temperature' => 'Hot', 'Humidity' => 'High', 'Windy' => 'Strong', 'Play' => 'No'],
        ['Outlook' => 'Overcast', 'Temperature' => 'Hot', 'Humidity' => 'High', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Rain', 'Temperature' => 'Mild', 'Humidity' => 'High', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Rain', 'Temperature' => 'Cool', 'Humidity' => 'Normal', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Rain', 'Temperature' => 'Cool', 'Humidity' => 'Normal', 'Windy' => 'Strong', 'Play' => 'No'],
        ['Outlook' => 'Overcast', 'Temperature' => 'Cool', 'Humidity' => 'Normal', 'Windy' => 'Strong', 'Play' => 'Yes'],
        ['Outlook' => 'Sunny', 'Temperature' => 'Mild', 'Humidity' => 'High', 'Windy' => 'Weak', 'Play' => 'No'],
        ['Outlook' => 'Sunny', 'Temperature' => 'Cool', 'Humidity' => 'Normal', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Rain', 'Temperature' => 'Mild', 'Humidity' => 'Normal', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Sunny', 'Temperature' => 'Mild', 'Humidity' => 'Normal', 'Windy' => 'Strong', 'Play' => 'Yes'],
        ['Outlook' => 'Overcast', 'Temperature' => 'Mild', 'Humidity' => 'High', 'Windy' => 'Strong', 'Play' => 'Yes'],
        ['Outlook' => 'Overcast', 'Temperature' => 'Hot', 'Humidity' => 'Normal', 'Windy' => 'Weak', 'Play' => 'Yes'],
        ['Outlook' => 'Rain', 'Temperature' => 'Mild', 'Humidity' => 'High', 'Windy' => 'Strong', 'Play' => 'No'],
    ]);
    
    // Hitung entropy
    $entropy = DecisionTreeHelper::calculateEntropy($dataset, 'Play');
    echo "Entropy: $entropy\n";
    
    // Hitung gain
    $gains = DecisionTreeHelper::calculateGain($dataset, 'Play');
    print_r($gains);
}
