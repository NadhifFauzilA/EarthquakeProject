<!DOCTYPE html>
<html lang="en">

<head>
    <title>Earthquake Project | ARABIS GROUP</title>
    <link rel="icon" tpye="image/x-icon" href="source/favicon.ico">
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header>
        <img src="source/logo.png" style="display:block; margin:auto;">
        <h1 class="title">Arabis Earthquake Information</h1>
        <h3 class="desc">Project by Nadhif Fauzil Adhim</h3>

        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=autogempa">Last Earthquake</a></li>
                <li><a href="index.php?page=gempaterkini">Gempa terkini</a></li>
                <li><a href="index.php?page=gempadirasakan">Gempa dirasakan</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'autogempa':
                    include "autogempa.php";
                    break;
                case 'gempaterkini';
                    include 'gempaterkini.php';
                    break;
                case 'gempadirasakan';
                    include 'gempadirasakan.php';
                    break;
                case 'gempadirasakan';
                    include 'gempadirasakan.php';
                    break;
            }
        } else {
            include "autogempa.php";
        }
        ?>

    </div>
    <footer>
        &copy Copyright Arabis Group | ARABIS GEO Project
    </footer>
</body>

</html>