<?php
if (auth::isloggedin()) {
    $links = array('/'=>'Home', '/logout'=>'Log Out');
    
    echo '<ul>';
    foreach ($links as $link=>$title) {
        echo '<li><a href="' . $link . '">' . $title . '</a></li>';
    }
    echo '</ul>';
}
?>