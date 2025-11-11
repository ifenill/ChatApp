<?php
$dsn = "pgsql:host=ep-xxxxxx.eu-central-1.aws.neon.tech;port=5432;dbname=your_db_name;sslmode=require";
$user = "your_user";
$password = "your_password";

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    $postId = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(["id" => $postId]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($post);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
