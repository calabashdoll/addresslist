<?php
echo '<tr>';
echo "<td>{$view['user']->username}</td><td>";
echo $view['user']->admin == 1 ? 'Yes' : 'No';
echo "</td><td><a href='/users/edit/{$view['user']->id}'>编辑</a></td>";
echo "<td><a class='removal' href='/users/processdelete/{$view['user']->id}'>";
echo "删除</a></td>";
echo '</tr>';
?>
