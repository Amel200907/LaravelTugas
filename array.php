<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Array</title>
    </head>
    <body>
        <h1>Berlatih Array</h1>
        <?php
        echo "<h3>Soal 1</h3>";
        // Soal No 1: Kelompokkan nama-nama ke dalam array
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
        $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
        
        // Tampilkan array
        echo "Kids: ";
        echo "<pre>";
        print_r($kids);
        echo "</pre>";

        echo "Adults: ";
        echo "<pre>";
        print_r($adults);
        echo "</pre>";

        echo "<h3>Soal 2</h3>";
        // Soal No 2: Panjang array dan isi masing-masing
        echo "Cast Stranger Things:<br>";

        echo "Total Kids: " . count($kids) . "<br>";
        echo "<ol>";
        foreach ($kids as $kid) {
            echo "<li>$kid</li>";
        }
        echo "</ol>";

        echo "Total Adults: " . count($adults) . "<br>";
        echo "<ol>";
        foreach ($adults as $adult) {
            echo "<li>$adult</li>";
        }
        echo "</ol>";

        echo "<h3>Soal 3</h3>";
        // Soal No 3: Array Multidimensi dengan data asosiatif
        $characters = [
            [
                "Name" => "Will Byers",
                "Age" => 12,
                "Aliases" => "Will the Wise",
                "Status" => "Alive",
            ],
            [
                "Name" => "Mike Wheeler",
                "Age" => 12,
                "Aliases" => "Dungeon Master",
                "Status" => "Alive",
            ],
            [
                "Name" => "Jim Hopper",
                "Age" => 43,
                "Aliases" => "Chief Hopper",
                "Status" => "Deceased",
            ],
            [
                "Name" => "Eleven",
                "Age" => 12,
                "Aliases" => "El",
                "Status" => "Alive",
            ],
        ];

         // Menampilkan data array multidimensi
        echo "<pre>";
        print_r($characters);
        echo "</pre>";
        ?>
    </body>
</html>
