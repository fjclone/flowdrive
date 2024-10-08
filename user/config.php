<?php

$conn = mysqli_connect("localhost", "root", "", "ppts");

if (!$conn) {
    echo "Connection Failed";
}