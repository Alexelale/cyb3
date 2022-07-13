<?php

    //симуляция: обычно список данных извлекается программным кодом, например, из БД
    $people = [
        array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 25000),
        array("FirstName" => "Alex", "LastName" => "Kriuchkov", "City" => "Moscow", "Salary" => 200000),
        array("FirstName" => "Ivan", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 25000),
        array("FirstName" => "Roman", "LastName" => "Anasha", "City" => "Novosib", "Salary" => 37000),
        array("FirstName" => "Ivan", "LastName" => "Arazumanin", "City" => "London", "Salary" => 47000),
    ];


    //Фильтруем данные по первым буквам фамилии
    $letters = strtolower($_REQUEST["letters"]);

    $results = [];
    foreach($people as $person) {
        if (str_starts_with(strtolower($person["LastName"]), $letters)) {
            array_push($results, $person);
        }
    }

    //Отправим извлеченные данные в формате JSON
    echo json_encode($results);
