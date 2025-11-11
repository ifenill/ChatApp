<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
    import { neon } from '@netlify/neon';
    const sql = neon(); // automatically uses env NETLIFY_DATABASE_URL
    const [post] = await sql`SELECT * FROM posts WHERE id = ${postId}`;
?>

