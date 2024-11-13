<?php
    include 'db.php';
    
    $sql = "SELECT * FROM jogos";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>