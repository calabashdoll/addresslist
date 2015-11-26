<?php
    print '<div class="sidebar"><br /><a class="featured" href="/contacts/edit/';
    print $view['id'] . '">Edit ' . $view['contactname'] . '</a>';
    print '<a class="featured removal" href="/contacts/processdelete/';
    print $view['id'] . '">Delete ' . $view['contactname'] . '</a>';
    print '</div>';

?>