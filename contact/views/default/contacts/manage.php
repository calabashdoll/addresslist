<h2><?php echo $view['title']?></h2>
<form action="<?php echo $view['action']?>" method="post" id="<?php echo $view['formid']?>">
    <?php
        echo '<input type="hidden" name="id" value="' . $view['contact']->id;
        echo '" />';
        
        $vals = array('firstname'=>'First Name', 'middlename'=>'Middle Name', 'lastname'=>'Last Name');
        
        foreach ($vals as $name=>$label) {
            echo '<div class="row"><label for="' . $name . '">' . $label . ':</label>';
            echo '<input name="' . $name . '" id="' . $name . '" value="';
            echo $view['contact']->$name;
            echo '" /></div>';
        }
    ?>
    <hr />
    
    <?php 
        if (isset($view['groups'])) {
            foreach ($view['groups'] as $counter=>$group) {
                echo view::show('contacts/group', array('group'=>$group, 'counter'=>$counter, 'type'=>$view['type']));
            }
            $counter++;
            $group = null;
        }
        else {
            $counter = 0;
            $group = new stdClass;
            $group->label = 'Business';
        }
        echo view::show('contacts/group', array('group'=>$group, 'counter'=>$counter, 'type'=>'add'));
    ?>
    
    <hr id="lastclone" />
    <div><label for="submit"> </label>
         <input id="submit" type="submit" value="<?php echo $view['title']?>" class="submitbutton" />
    </div>
</form>
<div id="contactgroupingcontainer">
    <?php echo view::show('contacts/group', array('label'=>'Business', 'counter'=>0))?>
</div>
<script type="text/javascript" src="/assets/managecontact.js"></script>
<script type="text/javascript">
var groupcount = <?php echo $counter?>;
</script>