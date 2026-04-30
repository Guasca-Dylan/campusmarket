<?php
// (C) CAMINO ABSOLUTO AUTOMÁTICO
define("PATH_BASE", dirname(__DIR__).  DIRECTORY_SEPARATOR); 

function pageExists($page) {
  return file_exists(PATH_BASE . "pages/" . $page . ".php");
}

function loadPage($page) {
  if (pageExists($page)) {
    include_once PATH_BASE . "pages/" . $page . ".php";
  } else {
    include_once PATH_BASE . "pages/404.php";
  }
}

function htmlExists($htmlPage) {
  return file_exists(PATH_BASE . "html/" . $htmlPage . ".html");
}

function loadHtml($htmlPage) {
  if (htmlExists($htmlPage)) {
    include_once PATH_BASE . "html/" . $htmlPage . ".html";
  }
}

