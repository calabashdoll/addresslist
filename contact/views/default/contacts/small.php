<?php 
echo '<a href="/contacts/view/' . $view['contact']->id . '">';
echo "{$view['contact']->firstname} ";
echo "{$view['contact']->middlename} {$view['contact']->lastname}";
echo '</a>';
?>
