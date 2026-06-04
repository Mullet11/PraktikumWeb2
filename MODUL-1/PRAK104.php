<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 104</title>
    <style>
        table{
            font-family: 'Times New Roman', Times, serif;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 4px 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    
    <?php
    $smartphone = [
        'Samsung Galaxy S22',
        'Samsung Galaxy S22+',
        'Samsung Galaxy A03',
        'Samsung Galaxy Xcover 5'
    ];
    ?>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php foreach ($smartphone as $phone): ?>
            <tr>
                <td><?php echo $phone ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>