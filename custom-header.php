<?php
$page = $_SERVER['REQUEST_URI'];

$project = false;
$about = false;
$contact = false;

if (isset($page)) {
    if (strpos($page, "index") !== false || $page == "/") {
        $project = true;
        $about = false;
        $contact = false;
    } else if (strpos($page, "about") !== false) {
        $about = true;
        $project = false;
        $contact = false;
    } else if (strpos($page, "contact") !== false) {
        $contact = true;
        $project = false;
        $about = false;
    } else {
        $project = false;
        $about = false;
        $contact = false;
    }
}

echo '
<nav id="myLogo" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img class="navbar-logo" src="img/logo.svg" alt="Mirko D\'Agnese">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" style="float: right">
                        <mark class="' . ($project ? 'nav-selected' : '') . '">Projects</mark>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="float: right">
                        <mark class="' . ($about ? 'nav-selected' : '') . '">About</mark>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="padding-right: 0!important; float: right">
                        <mark class="' . ($contact ? 'nav-selected' : '') . '">Contact</mark>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
';
