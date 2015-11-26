    <div class="contactgrouping">
        <div class="row"><label>Grouping:</label>
        <input name="type[<?php echo $view['counter']?>][label]" 
            value="<?php echo $view['group']->label?>" /></div>
        <div>
            <?php
                if ($view['group'] instanceof contactgroup) { 
                    $methods = new contactmethodscollection($view['group']);
                    $methods->getwithdata();
                    foreach ($methods as $method) {
                        echo view::show('contacts/method', 
                                        array('method'=>$method, 
                                              'counter'=>$view['counter']));
                    }
                }
                echo view::show('contacts/method', 
                                array('method'=>null, 
                                      'counter'=>$view['counter']));
            ?>
        </div>
         
        <?php 
            if ($view['type'] == 'edit') {
                echo '<a href="#" class="deletecontactgrouping">Delete this group</a>';
            }
            else {
                echo '<a href="#" class="addcontactgrouping">Add Another Grouping</a>';
            }
        ?>
    </div>
