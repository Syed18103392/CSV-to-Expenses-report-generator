<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
    <style>
    /* Apply some basic styling to the table */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

    /* Style the table header */
    th {
        background-color: #f2f2f2;
        color: #333;
        font-weight: bold;
        padding: 8px;
        text-align: left;
        border: 1px solid #ccc;
    }

    /* Style the table cells */
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ccc;
    }

    /* Apply alternate row colors for better readability */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Add hover effect to table rows */
    tr:hover {
        background-color: #ddd;
    }

    /* Style the table caption, if present */
    caption {
        font-size: 1.2em;
        font-weight: bold;
        margin: 10px 0;
    }

    /* Add a border to the table for better separation */
    table {
        border: 2px solid #333;
    }

    /* Style a specific column (e.g., the first column) */
    td:first-child {
        font-weight: bold;
        color: #007bff;
    }

    /* Add some spacing between the cells */
    td,
    th {
        padding: 10px;
    }

    .positive {
        color: green;
    }

    .negative {
        color: red;
    }

    .table-container {
        max-height: 300px;
        overflow-y: auto;
    }

    /* Add a zebra-stripe effect for the fixed header */
    .table-container table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Style specific cells or rows based on classes or IDs */
    /* Example for styling a row with a specific ID: */
    #special-row {
        background-color: yellow;
    }

    /* Example for styling a cell with a specific class: */
    .cell-highlight {
        background-color: #ffcccb;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <table>
        <tbody>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <?php
            $app_instance = new App();
            $files = $app_instance->readFile(FILES_PATH);

            /**
             * 
             * loop through all files from the array 
             * array(1) { [0]=> string(80) "/Users/syedsajib/Documents/projects/first_project/transaction_files/sample_1.csv" }
             * 
             */
            foreach ($files as $single_file) {
                $temp = $app_instance->readFileData($single_file);
            }
            echo $temp;

            ?>

        </tbody>
    </table>
</body>

</html>