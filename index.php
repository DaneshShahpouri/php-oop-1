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
</head>

<body>

    <table>

        <thead>
            <td>Titolo</td>
            <td>Genere</td>
            <td>Regista</td>
            <td>Anno</td>
            <td>Durata</td>
            <td>Star</td>
            <td>A colori</td>
        </thead>
        <tbody>

            <?php
            foreach ($movie_list as $movie) {

                ?>

                <tr>

                    <?php
                    foreach ($movie as $key) {
                        ?>
                        <td>
                            <?php
                            echo $key
                                ?>
                        </td>

                        <?php
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