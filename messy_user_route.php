<?php
// Simple messy route/controller code
Route::post('/add-user', function() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $db = new PDO("mysql:host=localhost;dbname=test","root","");
    $db->exec("INSERT INTO users (name,email) VALUES ('$name','$email')");
    echo "user added";
});
