<?php

function database_connect()
{
    /*
     * Load the current settings using the .env file
     */
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);

    /**
     * Check connection
     */
    if ($connection->connect_errno) {
        die('Failed to connect to MySQL: ' . $connection->connect_error);
    }

    return $connection;
}
