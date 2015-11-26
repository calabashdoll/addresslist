<?php
echo view::show('contacts/manage', array('title'=>'Add Contacts', 
                'action'=>'/contacts/processadd', 'formid'=>'addform', 
                'type'=>'add'));
?>
