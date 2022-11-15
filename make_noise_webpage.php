<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Maak geluid weergave</title>
    <style>
        * {
            text-align: center;
        }
        h3 {
            background-color: aquamarine;
            border-radius: 5px;
            margin: 10px 33%;
        }
        table {
            margin: 0px 30%;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include_once('make_noise_classes.php');

            // See what is being posted:
            var_dump ($_POST);

            if (isset($_POST["imakenoise"])) {
                // Create an array of animals with the IMakeNoise interface
                $animals = [
                    $myDog = new Dog("Vagebond"),
                    $myFish = new Fish("Nemo"),
                    $myBird = new Bird("Tweety"),
                ];

                // Let all the animals make a noise:
                foreach ($animals as $animal) {
                    echo "<h3>";
                    echo $animal->getName() . " says: " . $animal->makeNoise();
                    echo "</h3>";
                }
            } else {
                echo "<h3>Implementatie moet nog gedaan worden</h3>";
            }

        }
    ?>

    <form action="" method="post">
        <h1>Maak geluid</h1>
        <h2>Interface:</h2>
        <input type="submit" class="button" name="imakenoise" value="Maak geluid" /><br><br>
        <input type="submit" class="button" name="idomovement" value="Doe beweging" /><br><br>

        <h2>Classes:</h2>
        <table>
            <tr>
                <td>Hond</td>
                <td>Vis</td>
                <td>Vogel</td>
            </tr>
            <tr>
                <td><img src="images/dog.png"></td>
                <td><img src="images/fish.png"></td>
                <td><img src="images/bird.png"></td>
            </tr>
            <tr>
                <td><input type="submit" class="button" name="dogmakenoise" value="Maak geluid" /></td>
                <td><input type="submit" class="button" name="fishmakenoise" value="Maak geluid" /></td>
                <td><input type="submit" class="button" name="birdmakenoise" value="Maak geluid" /></td>
            </tr>
            <tr>
                <td><input type="submit" class="button" name="dogdomovement" value="Doe beweging" /></td>
                <td><input type="submit" class="button" name="fishdomovement" value="Doe beweging" /></td>
                <td><input type="submit" class="button" name="birddomovement" value="Doe beweging" /></td>
            </tr>
        </table>
    </form>



</body>
</html>