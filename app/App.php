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
    public function readFileData(string $file_path): string
    {
        $data = [];

        if (file_exists($file_path)) {
            $file = fopen($file_path, 'r');
            while (fgetcsv($file) != false)
                array_push($data, $this->separate_values(fgetcsv($file)));
        }
        $template = $this->generate_template($data);
        return $template;
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
    public function generate_template(array $data)
    {
        $temp = '';
        $get_total = 0;
        $amount_color = '';
        foreach ($data as $single_data) {
            $amount_color = ((float) $single_data['amount'] < 0) ? 'negative' : 'positive';
            $temp .= "<tr>
            <td>" . $single_data['data'] . "</td>
            <td>" . $single_data['check_number'] . "</td>
            <td>" . $single_data['des'] . "</td>
            <td class='" . $amount_color . "'>$" . $single_data['amount'] . "</td>
        </tr>";
            $get_total += (float) $single_data['amount'];
        }
        $temp .= "<td></td><td></td><td></td><td style='font-weight:bold'>$" . $get_total . "</td>";
        return $temp;
    }

}