<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST["nomor"];
    $subdo = $_POST["subdo"];

    if (isset($_POST["prosesbuat"])) {
        $newfol = "$subdo";
        $folderPath = "$newfol";

        mkdir($folderPath);

        $zipFilePath = "alexhosting/secrip/sengkuni$nomor.zip";
        $newZipFilePath = "$folderPath/sengkuni$nomor.zip";
        copy($zipFilePath, $newZipFilePath);

        $zip = new ZipArchive;
        if ($zip->open($newZipFilePath) === TRUE) {
            $zip->extractTo($folderPath);
            $zip->close();
        }

        unlink($newZipFilePath);

        // Arahkan ke done.php setelah proses selesai
        header("");
        exit();
    }
}
?>
