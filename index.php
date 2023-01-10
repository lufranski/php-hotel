<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <?php
        $hotels = [
            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],
        ];
    ?>
</head>
<body>
    
        <?php
            
            foreach($hotels as $hotel) {

                $name = $hotel['name'];
                $description = $hotel['description'];
                $parking = $hotel['parking'];
                $vote = $hotel['vote'];
                $distance_to_center = $hotel['distance_to_center'];

                echo '<div>' 
                        . '<h1>' . $name . '</h1>'
                        . '<h3>' . 'parcheggio:' . ' ' . $parking . '</h3>'
                        . '<h3>' . 'voto:' . ' ' .$vote . '</h3>'
                        . '<h3>' . 'distanza dal centro:' . ' ' . $distance_to_center . '</h3>' 
                    . '</div>';

            }
        
        ?>
    
</body>
</html>