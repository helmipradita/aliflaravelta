<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DecisionTreeHelper extends Controller
{
    /**
     * Menghitung entropy dari sebuah himpunan data.
     *
     * @param Collection $data
     * @param string $targetAttribute
     * @return float
     */
    public static function calculateEntropy(Collection $data, string $targetAttribute): float
    {
        $totalInstances = $data->count();
        $targetCounts = $data->pluck($targetAttribute)->countBy();

        $entropy = 0;
        foreach ($targetCounts as $count) {
            $probability = $count / $totalInstances;
            $entropy -= $probability * log($probability, 2);
        }

        return $entropy;
    }

    /**
     * Menghitung gain informasi untuk setiap atribut pada data.
     *
     * @param Collection $data
     * @param string $targetAttribute
     * @param array $attributes
     * @return array
     */
    public static function calculateGain(Collection $data, string $targetAttribute, array $attributes): array
    {
        $entropy = self::calculateEntropy($data, $targetAttribute);
        $totalInstances = $data->count();
        $attributeGains = [];

        foreach ($attributes as $attribute) {
            $attributeEntropy = 0;
            $attributeCounts = $data->pluck($attribute)->countBy();

            foreach ($attributeCounts as $value => $count) {
                $valueProbability = $count / $totalInstances;
                $subData = $data->where($attribute, $value);
                $subEntropy = self::calculateEntropy($subData, $targetAttribute);
                $attributeEntropy += $valueProbability * $subEntropy;
            }

            $attributeGains[$attribute] = $entropy - $attributeEntropy;
        }

        return $attributeGains;
    }
}
