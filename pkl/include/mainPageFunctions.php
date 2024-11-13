<?php
function escape($string)
{
    global $connection;

    // Escape string to prevent SQL injection
    return mysqli_real_escape_string($connection, trim($string));
}

function confirm_query($result)
{
    global $connection;

    // Check if query execution failed
    if (!$result) {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}

function redirect($location)
{
    // Redirect to specified location
    header("Location: " . $location);
    exit;
}

function ifItIsMethod($method = null)
{
    // Check if the current request method matches the specified method
    if ($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {
        return true;
    }

    return false;
}

function isLoggedIn()
{
    // Check if user role is set in session
    return isset($_SESSION['user_role']);
}

function checkIfUserIsLoggedInAndRedirect($redirectLocation = null)
{
    // Redirect if user is already logged in
    if (isLoggedIn()) {
        redirect($redirectLocation);
    }
}

function username_exists($username)
{
    global $connection;

    // Query to check if username exists in the login_pkl table
    $query = "SELECT username FROM login_pkl WHERE username = '" . escape($username) . "'";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    // Check if any rows were returned
    return mysqli_num_rows($result) > 0;
}
