<?php

// Подключаем файл конфигурации
include "db.php";

// Получаем значение переменной "search" из файла "script.js".
if (isset($_POST['search'])) {

    // Помещаем поисковой запрос в переменной
    $Name = $_POST['search'];

    // Запрос для выбора из базы данных
    $Query = "SELECT Name FROM users WHERE Name LIKE '%$Name%' LIMIT 5";

    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($connectionDB, $Query);

    // Создаем список для отображения результатов
    echo '<ul>';

    //Перебираем результаты из базы данных
    while ($Result = mysqli_fetch_array($ExecQuery)) {
?>
        <!-- Создаем элементы списка. При клике на результат вызываем функцию обработчика fill() из файла "script.js". В параметре передаем найденное имя-->

        <li onclick='fill("<?php echo $Result['Name']; ?>")'>
            <a>
                <?php echo $Result['Name']; ?>
            </a>
        </li>

<?php
    }
}
?>
    </ul>