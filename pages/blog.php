<?php
require_once('../Parsedown.php');
require_once('../config-custom.php');

$content = '';
$is_post = !empty($_GET['post']);

function sortPosts($a, $b) {
    return strcmp($b->getFilename(), $a->getFilename());
}

if ($is_post) {
    $post_name = filter_var($_GET['post'], FILTER_SANITIZE_STRING);
    $file_path = __DIR__.'/../content/'.$post_name.'.'.FILE_EXT;

    if (file_exists($file_path)) {
        $file = fopen($file_path, 'r');
        $post_title = trim(fgets($file), '#');
        fclose($file);
        $parsedown = new Parsedown();
        $content = $parsedown->text(file_get_contents($file_path));
    } else {
        $content = '<h2>Not Found</h2><p>Sorry, couldn\'t find that post.</p>';
    }
} else {
    $files = new DirectoryIterator(__DIR__.'/../content/');
    $files_array = [];

    foreach ($files as $file) {
        if ($file->isFile() && $file->getExtension() == FILE_EXT) {
            $files_array[] = $file->getFileInfo();
        }
    }
    usort($files_array, 'sortPosts');

    foreach ($files_array as $file) {
        $filename_no_ext = $file->getBasename('.'.FILE_EXT);
        $file_pointer = $file->openFile();
        $post_title = trim($file_pointer->fgets(), '#');
        $content .= '<h2><a href="blog.php?post='.$filename_no_ext.'">'.$post_title.'</a></h2>';
    }
}

$page_title = "Blog - " . BLOG_TITLE;
$style_hash = hash('md5', file_get_contents(__DIR__.'/../src/css/style-'.APPEARANCE.'.css'));
$fonts_hash = hash('md5', file_get_contents(__DIR__.'/../src/css/fonts.css'));
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style-<?php echo APPEARANCE; ?>.css?v=<?php echo $style_hash; ?>" />
    <link rel="stylesheet" href="/src/css/fonts.css?v=<?php echo $fonts_hash; ?>" />
</head>
<body>
    <nav>
        <a href="../index.php">home</a>
        <a href="blog.php">blog</a>
        <a href="contact.php">contact</a>
    </nav>
    <header>
        <h1>dead simple blog</h1>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>© 2024 iviixii</p>
    </footer>
</body>
</html>
