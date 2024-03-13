<!-- views/events.view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasākumi Cēsīs</title>
</head>
<body>
    <h1>Pasākumi Cēsīs</h1>
    <?php if (!empty($rows)): ?>
        <ul>
        <?php foreach($rows as $row): ?>
            <li><?php echo $row['event_date'] . " / " . $row['event_name'] . " / " . $row['location']; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nav atrasti pasākumi.</p>
    <?php endif; ?>
</body>
</html>
