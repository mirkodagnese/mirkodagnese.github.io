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

echo "
<nav id=\"myLogo\" class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"index.php\">
            <img class=\"navbar-logo\" src=\"img/logo.svg\" alt=\"Mirko D\'Agnese\">
        </a>
        <button class=\"navbar-toggler\" style=\"transform: scale(0.8)translateX(30px);\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <svg class=\"ham hamRotate ham1\" viewBox=\"0 0 100 100\" width=\"80\" onclick=\"this.classList.toggle(\'active\')\">
                <path class=\"line top\" d=\"m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40\" />
                <path class=\"line middle\" d=\"m 30,50 h 40\" />
                <path class=\"line bottom\" d=\"m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40\" />
            </svg>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"index.php\" style=\"float: right\">
                        <mark class=\"\"" . ($project ? 'nav-selected' : '') . '">Projects</mark>
                    </a>
                </li>
                <li style="display: flex; align-items: center;">
                    <div style="width: 1px; height: 50%; background-color: #e2e2e2e2; margin: 0 15px;"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="float: right">
                        <mark class="' . ($about ? 'nav-selected' : '') . '">About</mark>
                    </a>
                </li>
                <li style="display: flex; align-items: center;">
                    <div style="width: 1px; height: 50%; background-color: #e2e2e2e2; margin: 0 15px;"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link contacts-nav-link" href="contact.php" style="float: right">
                        <mark class="' . ($contact ? 'nav-selected' : '') . '">Contact</mark>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
';
