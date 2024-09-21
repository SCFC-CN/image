<?php
// 获取当前目录下的所有图片文件
$dir = '.'; // 当前目录
$files = glob($dir . '/*.{jpg,png,gif,webp,ico,avif}', GLOB_BRACE);

// 随机选择一个图片文件
$randomFile = $files[array_rand($files)];

// 设置响应头信息
$mimeType = mime_content_type($randomFile);
header('Content-Type: ' . $mimeType);
header('Content-Disposition: inline; filename="' . basename($randomFile) . '"');
header('Content-Length: ' . filesize($randomFile));

// 读取并输出图片文件内容
readfile($randomFile);
?>