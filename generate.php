<?php

$filename = $_POST['filename'];
$title = $_POST['title'];
$content = $_POST['content'];

$folder = "pages/";

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

$file = $folder . $filename . ".html";

$html = "

<!DOCTYPE html>
<html>
<head>
<title>$title</title>
</head>

<body>

<h1>$title</h1>

<p>$content</p>

</body>
</html>

";

file_put_contents($file, $html);

echo "Página creada: " . $file;

?>
