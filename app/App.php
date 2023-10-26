<?php

class App
{

    /**!SECTION
     * 
     * Read the file from the directory
     * 
     */

    public function readFile($dir): array
    {
        $files = [];
        foreach (scandir($dir) as $file) {
            if (is_dir($file)) {
                continue;
            }
            array_push($files, $dir . $file);
        }
        return $files;
    }

    /**ANCHOR - readFileData
     * 
     * 
     * 
     */
    public function readFileData(string $file_path): array
    {
        $data = [];

        if (file_exists($file_path)) {
            $file = fopen($file_path, 'r');
            while (fgetcsv($file) != false)
                array_push($data, $this->separate_values(fgetcsv($file)));
        }
        var_dump($data);
        die();
        return $data;
    }

    /**ANCHOR - separate_values
     * 
     * 
     * readFileData
     */
    public function separate_values(array $rows): array
    {
        [$data, $check_number, $des, $amount] = $rows;
        $data = [
            'data' => $data,
            'check_number' => $check_number,
            'des' => $des,
            'amount' => str_replace(['$', ',', ' '], '', $amount),
        ];

        return $data;
    }
}