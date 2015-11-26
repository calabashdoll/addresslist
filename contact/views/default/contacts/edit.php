<?php
echo view::show('contacts/manage', 
                array('title'=>'Edit Contact', 
                      'action'=>'/contacts/processedit', 
                      'formid'=>'editform', 
                      'type'=>'edit',
                      'contact'=>$view['contact'],
                      'groups'=>$view['groups']));
?>