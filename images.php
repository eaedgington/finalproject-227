<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script charset="utf-8" src="js/function.js"></script>    
    <title>Images</title>
</head>
<body>
<p>Click on an image to view it in a separate window.</p>
<ul>
<?php
$dir = '../uploads'; 
$files = scandir($dir);

    if (substr($image, 0, 1) != '.') {
        $image_size = getimagesize("$dir/$image");
        $image_name = urlencode($image);
        echo "<li><a href=\"javascript:create_window('$image_name',$image_size[0], $image_size[1])\">$image</a></li>\n";
    }
}    
?>
</ul>
</body>
</html>