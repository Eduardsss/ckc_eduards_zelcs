<!-- views/groups.view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKC kolektīvi</title>
</head>
<body>
    <h1>CKC kolektīvi</h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
        </tr>
        <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>