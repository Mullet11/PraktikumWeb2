<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style>
        table{
            font-family: 'Times New Roman', Times, serif;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            font-size: 18px;
            padding: 1px 1px;
            text-align: left;
        }

        th {
            background-color: red;
            font-size: 28px;
            font-weight: bold;
            padding: 16px 1px;
        }
    </style>
</head>
<body>
    <?php 
    $smartphones = [
        "HP1" => "Samsung Galaxy S22",
        "HP2" => "Samsung Galaxy S22+",
        "HP3" => "Samsung Galaxy A03",
        "HP4" => "Samsung Galaxy Xcover 5",
    ];
    ?>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php foreach ($smartphones as $kunci => $nilai):?>
            <tr>
                <td><?php echo $nilai; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html> 