<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    echo "https://pedro24732.github.io/qrcode/" . $targetFile; // Retorna a URL do arquivo
}
?>
