<?php

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "blog");

$result = $mysqli->query("SELECT * FROM News");

$arrayResult = $result->fetch_all(MYSQLI_ASSOC);
//foreach ( as $row) {
//    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}