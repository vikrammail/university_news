<?php
    session_start();
if ($_SESSION) {
    if (!$_SESSION['email'] || !$_SESSION['adminuser']) {

        // header('location:/');
    } else {
    }

} else {

    header('location:/');
}

// session_destroy();
?>