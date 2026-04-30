<?php
  session_start();

  function isLoggedIn() {
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
  }


  function logout() {
    session_unset();
    session_destroy();
  }

  function gotoHome() {
    if (!isLoggedIn() && isset($_GET['page'])) {
      header("Location: index.php");
      exit();
    }
  } 

  function setSession($key, $value) {
    $_SESSION[$key] = $value;
  }

  function getSession($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
  }