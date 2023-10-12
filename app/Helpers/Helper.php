<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('getDataSeniorCsvAssets')) {
    function getDataSeniorCsvAssets(string $file): array
    {
        $content = [];
        $rows = str_getcsv(Storage::disk('assets')->get($file), "\n");
        $header = str_getcsv($rows[0], ";");
        for ($i = 1; $i < count($rows); $i++) {
            $array = [];
            foreach (str_getcsv($rows[$i], ";") as $key => $value) {
                $array[$header[$key]] = $value;
            }
            $content[] = (object)$array;
        }

        return $content;

    }
}
