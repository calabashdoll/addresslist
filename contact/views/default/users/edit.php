<?php
echo view::show('users/manage',array('title'=>"编辑用户",'action'=>'/users/processedit','user'=>$view['user']));