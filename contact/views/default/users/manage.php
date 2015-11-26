<?php
    echo '<h1>' . $view['title'] . '</h1>';
 
    echo view::show('standard/errors');
    
    echo '<form method="post" action="' . $view['action'] . '">';
    
    if (!is_null($view['user'])) {
        echo '<input type="hidden" name="id" value="' . $view['user']->id . '" />';
    }
    
    echo '<div class="row"><label for="username">用户名:</label>';
    $value = $view['user']->username;
    echo '<input type="text" name="username" id="username" value="' . 
            $value . '" /></div>';
    
    echo '<div class="row"><label for="password">密码:</label>';
    echo '<input type="password" name="password" id="password" /></div>';
    
    echo '<div class="row"><label>是否管理员</label>';
    
    $options = array('No', 'Yes');
    $value = (int) $view['user']->admin;
    
    foreach ($options as $key=>$option) {
        echo '<input class="radio" type="radio" name="admin" value="' . $key . '" ';
        if ($value == $key) echo 'checked="checked"';
        echo ' /><span class="radiooption">' . $option . '</span>';
    }
    
    echo '</div>';
    
    echo '<div class="row"><label for="submit"> </label>
            <input id="submit" type="submit" class="submitbutton" value="' 
            . $view['title'] . '" /></div>';
    
    echo '</form>';
?>
    
