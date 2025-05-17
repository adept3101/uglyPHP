<?php
exec('vendor/bin/phpunit --colors=never test.php 2>&1', $outputLines, $returnVar);

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

    <form method="post" action="index.php">
        <input type="number" name="a" required step="any">

        <select name="operation">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multyply">*</option>
            <option value="del">/</option>
        </select>

        <input type="number" name="b" required step="any">

        <button type="submit">Вычислить</button>
        <span class="indicator <?php echo $testsOk ? 'success' : ''; ?>"></span>
    </form>
    <a href="sphere.php">Рассчитать объём сферы</a>

    <?php
    require 'main.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operation'])) {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $operation = $_POST['operation'];

        $calc = new Calculator();

        if(method_exists($calc, $operation)) {
            $result = $calc->$operation($a, $b);
            echo "<p>Результат: $result</p>";
        } else {
            echo "<p>Ошибка: неизвестная операция</p>";
        }
    }
    ?>

</body>
</html>
