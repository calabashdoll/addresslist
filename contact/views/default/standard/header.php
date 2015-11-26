<?php
if(auth::isloggedin()){
    $links = array(
    	'/'=>'首页',
    	'/contacts/add'=>'添加联系方式',
    	'contacts/import'=>"导入联系方式");
    if(auth::isadmin()){
    	$links['/users'] = "管理员";
    }

    $links['/logout'] = '退出';

    echo '<ul>';
    	foreach($links as $link=>$title){
    		echo '<li><a href="'.$link.'">'.$title.'</a></li>';
    	}
    echo  '</ul>';
}
