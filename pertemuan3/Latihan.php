<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" >
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr> -->
        <?php
            //metode tanpa tamplating
            // for ($i = 1; $i <= 3; $i++){
            //     echo "<tr>";
            //     for ($j = 1; $j <= 5; $j++ ){
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // }

            //metode templating

        ?>
        <?php for ($i = 1; $i <= 3; $i++):?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++ ): ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>