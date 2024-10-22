<?php
// Basic configuration, similar to the main app
require_once('Parsedown.php');
require_once('config.php');

$content = '<h2>About Me</h2>
<ul>
    <li>Bullet point 1 about yourself</li>
    <li>Bullet point 2 about yourself</li>
    <li>Bullet point 3 about yourself</li>
</ul>';
?>

<!DOCTYPE html>
<html>
<head>
    <title>About Me - <?php echo BLOG_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style-<?php echo APPEARANCE; ?>.css" />
    <link rel="stylesheet" href="/src/css/fonts.css" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
</head>
<body>
    <nav>
        <a href="index.php">home</a>
        <a href="pages/blog.php">blog</a>
        <a href="pages/contact.php">contact</a>
    </nav>
    <header>
        <h1 class="blog-title"><a href="home.php"><?php echo BLOG_TITLE; ?></a></h1>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p class="postscript">This blog does not offer comment functionality. If you'd like to discuss any of the topics written about here, you can <a href="mailto:<?php echo CONTACT_EMAIL; ?>">send me an email</a>.</p>
        <hr />
        <p class="powered-by">Powered by text files and <a href="https://github.com/paintedsky/dead-simple-blog" target="_blank">Dead Simple Blog</a>.</p>
    </footer>
</body>
</html>
