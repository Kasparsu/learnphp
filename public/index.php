<?php
session_start();
require '../vendor/autoload.php';

//var_dump($_SERVER);

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=my_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM persons");
  $stmt->execute();

  // set the resulting array to associative
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $persons = $stmt->fetchAll();
  //dump($persons);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch($path) {
    case '/':
        setcookie('mycookie', 'hello', time() + 60*60*24*30);
        //setcookie('mycookie', 'hello');
        dump($_COOKIE);
        dump($_SESSION['name']);
        include '../views/home.php';
        break;
    case '/about':
        $title = "about";
        include '../views/about.php';
        break;
    case '/form':
        include '../views/form.php';
        break;
    case '/response':
        dump($_GET);
        dump($_POST);
        dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], './uploaded/' . $_FILES['image']['name']);
        // dump($_ENV);
        // dump(getenv('path'));
        $_SESSION['name'] = $_POST['name'];
        break;
    default: 
        echo "404 page not found";
        http_response_code(404);
        break;
}