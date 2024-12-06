<?php
// Зчитуємо поточне значення лічильника завантажень
$file = 'download_count.txt';
if (file_exists($file)) {
    $count = file_get_contents($file);
} else {
    $count = 0;
}

// Збільшуємо лічильник на 1
$count++;

// Оновлюємо лічильник у файлі
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shupa Horror aka Classroom Escape Horror</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #ecf0f1;
        }
        .btn {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            margin: 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h1>Shupa Horror aka Classroom Escape Horror BETA</h1>
    <p>
        Версия билда: 041224-88 Тип: beta
    </p>
    <p>
        Кількість завантажень: <?php echo $count; ?>
    </p>
    <a href="rel/build-041224-88.apk" class="btn" download>Android</a>

</body>
<footer>
    © 2024 | HorrorIndi Games
</footer>
</html>
