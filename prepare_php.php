$pdo = new PDO(
  "mysql:host=localhost:8889;dbname=users;charset=utf8",
  "root",
  "root"
);

//! ALWAYS PREPARE
$statement = $pdo->prepare("SELECT * FROM users");
//! ALWAYS EXECUTE
$statement->execute();
//! ALMOST ALWAYS FETCH or FETCHALL
$all_users = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($all_users as $user) {
    echo $user["username"];
}