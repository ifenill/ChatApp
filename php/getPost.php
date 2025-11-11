<?php
$dsn = "pgsql:host=https://app.netlify.com/projects/stately-dango-e8c800;port=5432;dbname=main;sslmode=require";
$user = "shailesh";
$password = "";

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
