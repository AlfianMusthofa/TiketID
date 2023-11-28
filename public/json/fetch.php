<?php

$conn = mysqli_connect("localhost", "root", "", "tiket_db");

function query($query)
{

    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function fetchRow2($conn)
{
    $row1 = mysqli_query($conn, "SELECT * FROM row1");
    $row2 = mysqli_query($conn, "SELECT row2.id, img, row2.name, row2.address, lp, np, city.name AS cityName FROM row2 JOIN city ON row2.cityID = city.id");
    $row3 = mysqli_query($conn, "SELECT row3.id, img, row3.name, row3.address, lp, np, city.name AS cityName FROM row3 JOIN city ON row3.cityID = city.id");
    $row4 = mysqli_query($conn, "SELECT * FROM row4");

    $data = array(
        'row1' => [],
        'row2' => [],
        'row3' => [],
        'row4' => []
    );

    while ($row = mysqli_fetch_assoc($row1)) {
        $data['row1'][] = $row;
    }
    while ($row = mysqli_fetch_assoc($row2)) {
        $data['row2'][] = $row;
    }
    while ($row = mysqli_fetch_assoc($row3)) {
        $data['row3'][] = $row;
    }
    while ($row = mysqli_fetch_assoc($row4)) {
        $data['row4'][] = $row;
    }


    return json_encode($data);
}

echo fetchRow2($conn);