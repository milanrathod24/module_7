<?php
// Set cookie (1 hour)
setcookie("user", "Milan", time() + 3600);

// Get cookie
if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "Cookie not set. Refresh page.";
}
?>
