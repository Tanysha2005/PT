<?php
echo "<h1>Database Connection Test</h1>";

try {
    $pdo_mysql = new PDO("mysql:host=mysql;dbname=testdb", "root", "root");
    $stmt = $pdo_mysql->query("SELECT VERSION()");
    echo "<p>MySQL Version: " . $stmt->fetchColumn() . "</p>";
} catch (PDOException $e) { 
    echo "<p>MySQL Error: " . $e->getMessage() . "</p>"; 
}

try {
    $pdo_pgsql = new PDO("pgsql:host=pgsql;dbname=testdb", "postgres", "root");
    $stmt = $pdo_pgsql->query("SELECT version()");
    echo "<p>PostgreSQL Version: " . $stmt->fetchColumn() . "</p>";
} catch (PDOException $e) { 
    echo "<p>PostgreSQL Error: " . $e->getMessage() . "</p>"; 
}

try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    echo "<p>Redis Version: " . $redis->info()['redis_version'] . "</p>";
} catch (Exception $e) { 
    echo "<p>Redis Error: " . $e->getMessage() . "</p>"; 
}
?>