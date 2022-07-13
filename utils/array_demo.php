<?php

    $numbers = [1, 2, 3, 44, 5]; //это массив чисел
    //echo $numbers[4]; //на странице будет выведена цифра 5, так как в массиве нумерация практически всешда идет с нуля, то есть 1,2,3,44,4=0,1,2,3,4
    foreach($numbers as $x) {
        echo "$x<br />";
    }



   /* $people = [
        ["Yuri", "Moscow"], 
        ["Alex", "Pushkino"], 
        ["Daniil", "Novosibirsk"], 
        ["Eugeniy", "Moscow"]
    ];


    $i = 1;
    foreach($people as $person) {
        $name = $person[0];
        $city = $person[1];
        echo ("$i. $name from $city<br />");
        $i = $i + 1;
    } */

    //$person1 =array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 25000);
    //echo $person1['FirstName']." ".$person1['LastName']." ".$person1['City']." ".$person1['Salary'];

    $people = [
        array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 25000),
        array("FirstName" => "Alex", "LastName" => "Kriuchkov", "City" => "Moscow", "Salary" => 200000),
        array("FirstName" => "Ivan", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 25000)
    ];

    foreach ($people as $person) {
        echo $person['FirstName']." ".$person['LastName']." ".$person['City']." ".$person['Salary']."<br />";
    }

    
