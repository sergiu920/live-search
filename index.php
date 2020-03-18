<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Живой поиск</title>
    <!-- Подключаем библиотеку jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Подключаем наш файл скрптов -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Подключаем наш файл стилей-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form>
        <!-- Поле поиска -->
        <label>
            <input type="text" id="search" placeholder="Поиск людей" />
        </label>
    </form>

    <p>
        <b>Например: </b>
        <i>Василий, Татьяна, Наталия, Иван, Андрей</i>
    </p>

    <!-- Контейнер для результатов поиска -->
    <div id="display"></div>
</body>
</html>
