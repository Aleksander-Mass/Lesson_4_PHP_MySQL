<?php
// Получаем имя из URL-параметра "name"
$name = $_GET['name'] ?? '';

// Открываем файл chat.txt в режиме чтения и записи
$file = fopen('chat.txt', 'a+');

// Добавляем новое сообщение в файл
if (!empty($name) && isset($_GET['message'])) {
    $message = $_GET['message'];
    $newMessage = $name . ': ' . $message . "\n";
    fwrite($file, $newMessage);
}

// Читаем содержимое файла
rewind($file);
$lines = [];
while (!feof($file)) {
    $line = fgets($file);
    if ($line !== false) {
        array_push($lines, $line);
    }
}

// Обрезаем массив до последних 10 сообщений
$lastTenMessages = array_slice(array_reverse($lines), 0, 10);

// Выводим последние 10 сообщений
foreach ($lastTenMessages as $message) {
    echo $message;
}

// Закрываем файл
fclose($file);
?>