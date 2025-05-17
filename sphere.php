<?php
exec('vendor/bin/phpunit --colors=never testSp.php 2>&1', $outputLines, $returnVar);
$testsOk = ($returnVar === 0);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        .indicator {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: gray;
            margin-left: 10px;
        }
        .success {
            background-color: green;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="number" name="radius" id="input" required>
        <button type="submit">OK</button>
        <span class="indicator <?php echo $testsOk ? 'success' : ''; ?>"></span>
    </form>

    <a href="index.php">← Калькулятор</a>

    <?php
        require 'main.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['radius'])) {
            $radius = floatval($_POST['radius']);
            $sph = new Sphere();

            if (method_exists($sph, 'sphere')) {
                $result = $sph->sphere($radius);
                echo "<p>Результат: $result</p>";
            } else {
                echo "<p>Ошибка: метод sphere не найден</p>";
            }
        }
    ?>
</body>
</html>
