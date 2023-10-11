<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSON u HTML tablici</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    </tr>
    <?php
    $polazniciJson = file_get_contents('polaznici.json');

    $polaznici = json_decode($polazniciJson, true);

    foreach ($polaznici as $attribute) {
        echo "<tr>";
        echo "<td>" . $attribute['Ime'] . "</td>";
        echo "<td>" . $attribute['Prezime'] . "</td>";
        echo "<td>" . $attribute['Godine'] . "</td>";
        echo "<td>" . $attribute['Email'] . "</td>";
        echo "<td>" . $attribute['Telefon'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSON u HTML tablici</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    </tr>
    <?php
    $polazniciJson = file_get_contents('polaznici.json');

    $polaznici = json_decode($polazniciJson, true);

    $polaznici[]=[
        'Ime'=>'Jasmin',
        'Prezime'=>'Jasić',
        'Godine'=>'31',
        'Email'=>'jasmin.jasic',
        'Telefon'=>'09122233345'
    ];

    foreach ($polaznici as $attribute) {
        echo "<tr>";
        echo "<td>" . $attribute['Ime'] . "</td>";
        echo "<td>" . $attribute['Prezime'] . "</td>";
        echo "<td>" . $attribute['Godine'] . "</td>";
        echo "<td>" . $attribute['Email'] . "</td>";
        echo "<td>" . $attribute['Telefon'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
