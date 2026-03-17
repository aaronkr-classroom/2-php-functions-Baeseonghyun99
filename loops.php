<!-- loops.php -->
 <?php
 // WHILE
$counter = 10;
$packs = 5;
$price = 1.99;

// FOREACH
$products = [
    'Toffee' => 2.99,
    'Mints'  => 1.99,
    'Fudge'  => 3.49,
]
?>
<!DOCTYPE html>
<html>
    <head>
        <title>while, for, foreach</title>
        <link re1="styleheet" href="./css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>

        <h2>Chocolate</h2>
        <ol>
        <?php
        do {
            echo '<li>';
            echo "$counter packs cost \$"; // escape $"(출력 위해) 
            echo $price * $counter;
            echo '</li>';
            $counter++;
        } while ($counter <= $packs);
        ?>
        </ol>

        <h2>Mints</h2>
        <ul>
        <?php
        for ($i = 1; $i <= 100; $i = $i + 10) {
            echo '<li>';
            echo '$i packs cost$';
            echo $price * $i;
            echo '</li>';
        } 
        ?>
        </ul>

        <h2>$products</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            <?php foreach ($products as $item => $price) { ?>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>
            </table>
         </body>
</html>
