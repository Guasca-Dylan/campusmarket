<?php
// main.php
//
include_once("shared/header.php");
require_once("utilidades/archivos.php");


$page = isset($_GET["page"]) ? $_GET["page"] : '';
if ($page != '' && pageExists($page)) {
    loadPage($page);
    exit;
}

?>
<div class="container">

    <h2>Bienvenido a CampusMarket</h2>
    <p>Tu mercado digital dentro del campus.</p>
    <div class="content">

        <?php
        if (htmlExists($page)) {
            loadHtml($page);
        } else {
            echo "<a href=\"productos.html\"><button>Explorar productos</button></a>";
        }
        ?>

    </div>
    </div>
<?php
include_once("shared/footer.php");
?>