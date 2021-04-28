<?php
// store our database credentials into variables
$host = 'localhost';
$db = 'phoneshopdatabase';
$user = 'root';
$pass = 'Mammyboy1@';
$charset = 'utf8mb4';
//setup a database connection with the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//new PDO() returns an object that can be used to interact with the database. Here we store the returned PDO object into a variable callsed $pdo
$pdo = new PDO($dsn, $user, $pass);

echo 'DB connected';

//what happens if credentials are incorrect?
//needs better error handling

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo 'DB connected';
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$stmt = $pdo->query('SELECT FirstName FROM Users');
while ($row = $stmt->fetch())
{
    echo "\n" . PHP_EOL;
    echo "<br>" . PHP_EOL; //cover all bases
    echo $row['FirstName'];
}


