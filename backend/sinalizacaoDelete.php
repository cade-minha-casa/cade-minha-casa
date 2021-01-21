<?php

require 'Connection.php';

$id = $_POST['idImovel'];

try {
  
    $stmt = $pdo->prepare('DELETE FROM IMOV_ABAN_SIN WHERE ID_IMOVEL = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  
    echo '
    <script>
        alert("Imóvel excluído com sucesso!")
        location.href = "../frontend/pages/sinalizacao.php"
    </script>
';

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}