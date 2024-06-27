<?php

echo 'Hi there, it\'s working!' . "<br/>";

// Check database connection
try {
    // TODO: Change the connection values here
    $mysqli = new mysqli('sample-project-mysql', 'sample_user', 'sample_user_123', 'sample_app');

    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    } else {
        echo 'Connected to MySQL.';
    }
} catch (\Exception $ex) {
    echo 'Error on connecting to MySQL: ' . $ex->getMessage();
}