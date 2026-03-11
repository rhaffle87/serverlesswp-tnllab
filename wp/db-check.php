<?php
echo "Testing Connection to: " . getenv('DB_HOST') . "<br>";

$conn = mysqli_init();
// TiDB Cloud often requires SSL
mysqli_ssl_set($conn, NULL, NULL, "wp\isrgrootx1.pem", NULL, NULL);

if (!@mysqli_real_connect($conn, getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'), 4000)) {
    die("Connect Error: " . mysqli_connect_error());
}

echo "Success! The database is reachable from Vercel.";
mysqli_close($conn);
?>