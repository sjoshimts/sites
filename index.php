<?php
$root = __DIR__;
$items = scandir($root);

echo "<h1>Available Pages</h1>";
echo "<ul>";

foreach ($items as $item) {
    // Skip current/parent and hidden files
    if ($item === '.' || $item === '..' || $item[0] === '.') continue;

    $path = $root . DIRECTORY_SEPARATOR . $item;

    // Check if it's a directory and has index.html
    if (is_dir($path) && file_exists($path . '/index.html')) {
        echo "<li><a href=\"/$item/\">$item</a></li>";
    }
}

echo "</ul>";
?>
