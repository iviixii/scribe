<?php
require_once('config-custom.php');

$content = '
<p>im a developer thats always trying to simply things for my own sanity.</p>
<p>reduce code footprint and reduce complexity is the name of the game around here.</p>
<p>I generally do full-stack solutions mixed with my own brevity of life and various tangents.</p>
<h2>Passion Projects</h2>
<p>most of my projects are on <a href="">github</a> and most stuff is privated.</p>
<p>i am a full time everything so much like yourself i dont get much free time, 
but when i do here are some things to note:</p>
<ul>
    <li>codestars: github projects top stared projects</li>
    <li>Go outside touch some grass</li>
    <li>I am way off baseline</li>
</ul>';

$page_title = "Home - " . BLOG_TITLE;
$style_hash = hash('md5', file_get_contents(__DIR__.'/src/css/style-'.APPEARANCE.'.css'));
$fonts_hash = hash('md5', file_get_contents(__DIR__.'/src/css/fonts.css'));
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
        <a href="index.php">home</a>
        <a href="pages/blog.php">blog</a>
        <a href="pages/contact.php">contact</a>
    </nav>
    <header>
        <h1>hi, im aaron</h1>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>© 2024 iviixii</p>
    </footer>
</body>
</html>
