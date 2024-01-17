<?php
$mainFolder = $_POST['variable'];
function getImagesFromFolder($folder) {
    $images = [];

    if ($handle = opendir($folder)) {
        while (false !== ($file = readdir($handle))) {
            if ($file !== '.' && $file !== '..') {
                $filePath = $folder . '/' . $file;

                if (is_dir($filePath)) {
                    // Wenn es ein Unterordner ist, rekursiv Bilder sammeln
                    $images = array_merge($images, getImagesFromFolder($filePath));
                } elseif (pathinfo($file, PATHINFO_EXTENSION) == 'png' || pathinfo($file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file, PATHINFO_EXTENSION) == 'jpeg') {
                    $images[] = $filePath;
                }
            }
        }
        closedir($handle);
    }
    return $images;
}


$subfolders = scandir($mainFolder);
$allImages = [];

foreach ($subfolders as $subfolder) {
    $subfolderPath = $mainFolder . '/' . $subfolder;

    if ($subfolder !== '.' && $subfolder !== '..' && is_dir($subfolderPath)) {
        $imagesInSubfolder = getImagesFromFolder($subfolderPath);
        $allImages[$subfolder] = $imagesInSubfolder;
    }
}

header('Content-Type: application/json');
echo json_encode($allImages);
?>