# live-search
Этот репозиторий создан для статьи https://sozdatisite.ru . 

После клонирования данного репозитория необходимо создать файл db.php (он указан в .gitignore) и указать данные для подключения к базе данных.

# Содержимое файла db.php

```php
<?php

// Подключение к базе данных
$connectionDB = mysqli_connect(

    "localhost", // Название хоста

    "username", // Пользователь

    "password", // Пароль пользователя

    "name_bd" // Название базы данных
);

// Проверка подключения
if (mysqli_connect_errno()) {

    echo "Невозможно подключится к MySQL: " . MySQLi_connect_error();

}
```

?>


