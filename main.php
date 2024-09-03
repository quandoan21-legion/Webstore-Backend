<?php
include("./checkDBExist.php");
include("./connect.php");
include("./setUpDatabase.php");
include("./CreateDatabase.php");
include("./CreateUserForm.php");
function main()
{
    $conn = connect();
    $dbName = "website123";
    if (checkDBExist($conn, $dbName)) {
        echo ("db exist");
    } else {
        CreateDatabase($conn, $dbName);
        SetUpDatabase($conn, $dbName);
    }
    CreateUserForm();
}
