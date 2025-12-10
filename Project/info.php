<?php
$school = "My University";
$module = "Web Development";
$year = 2025;

$a = 10;
$b = 5;
$c = 2;

$sum = $a + $b;
$product = $b * $c;

$calcResult = isset($_GET['result']) ? $_GET['result'] : 'No result yet';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Info Page</title>
    <style>
        body { font-family: Arial; padding: 2rem; background: #f0f2f5; }
        h1 { color: #4CAF50; }
        .card { background: white; padding: 1rem; margin: 1rem 0; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h1>PHP Info Page</h1>

    <div class="card">
        <strong>School:</strong> <?php echo $school; ?><br>
        <strong>Module:</strong> <?php echo $module; ?><br>
        <strong>Year:</strong> <?php echo $year; ?>
    </div>

    <div class="card">
        <strong>Numbers:</strong> a = <?php echo $a; ?>, b = <?php echo $b; ?>, c = <?php echo $c; ?><br>
        <strong>Sum (a+b):</strong> <?php echo $sum; ?><br>
        <strong>Product (b*c):</strong> <?php echo $product; ?>
    </div>

    <div class="card">
        <strong>Last Calculator Result:</strong> <?php echo htmlspecialchars($calcResult); ?>
    </div>

    <a href="index.html">Back to Calculator</a>
</body>
</html>
