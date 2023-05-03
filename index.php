<!DOCTYPE html>
<html lang="it">

<?php
require_once './models/db.php'
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <table>

        <thead>
            <th>Titolo</th>
            <th>Genere</th>
            <th>Regista</th>
            <th>Anno</th>
            <th>Durata</th>
            <th>Star</th>
            <th>A colori</th>
        </thead>
        <tbody>

            <?php
            foreach ($movie_list as $movie) {

                ?>

                <tr>

                    <?php
                    foreach ($movie as $item) {

                        if (is_array($item)) {

                            ?>
                            <td>
                                <?php
                                foreach ($item as $key => $value) {
                                    if ($key == (count($item) - 1)) {
                                        echo $value;
                                    } else if ($key == (count($item) - 2)) {
                                        echo $value . ' e ';
                                    } else {

                                        echo $value . ', ';
                                    }

                                }
                                ?>
                            </td>

                            <?php

                        } else {



                            ?>
                            <td>
                                <?php
                                echo $item
                                    ?>
                            </td>

                            <?php
                        }
                    }
                    ?>



                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>