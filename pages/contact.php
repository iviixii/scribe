<?php
require_once('../config-custom.php');

$page_title = "Contact - " . BLOG_TITLE;
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
        <h1>contact</h1>
    </header>
    <main>
        <p>you can contact me through my <a href="mailto:<?php echo CONTACT_EMAIL; ?>">email</a>.</p>
        <h2>other contacts</h2>
        <p><a href="<?php echo CONTACT_LINKDEN; ?>">Linkden</a></p>
        <p><a href="<?php echo CONTACT_GITHUB; ?>">github</a></p>
    </main>
    <footer>
        <p>© 2024 iviixii</p>
    </footer>
</body>
</html>
