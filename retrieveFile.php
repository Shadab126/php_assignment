<?php
$folderPath = 'C:\xampp\htdocs\mnyr_php\php_assignment';

function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return $bytes . ' byte';
    } else {
        return '0 bytes';
    }
}

function getFolderContents($folderPath)
{
    $contents = [];
    $files = scandir($folderPath);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $filePath = $folderPath . '/' . $file;
            if (is_dir($filePath)) {
                $contents[$file] = getFolderContents($filePath);
            } else {
                $fileSize = filesize($filePath);
                $contents[$file] = formatSizeUnits($fileSize);
            }
        }
    }
    return $contents;
}
$folderContents = getFolderContents($folderPath);
echo "<pre>";
print_r($folderContents);
