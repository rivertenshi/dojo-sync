<?php

$host = 'ep-quiet-voice-a132l81l-pooler.ap-southeast-1.aws.neon.tech';
$dbname = 'neondb';
$user = 'neondb_owner';
$password = 'npg_8agKyETLkl1o';
$sslmode = 'require';

$endpoint_id = explode('.', $host)[0];

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=$sslmode;options='endpoint=$endpoint_id'";

try {
    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
