<?php
    $contactname = "{$view['contact']->firstname} {$view['contact']->middlename} {$view['contact']->lastname}";
    
    echo view::show('contacts/viewsidebar', array('contactname'=>$contactname, 'id'=>$view['contact']->id));
    
    print "<h1>{$contactname}</h1>";

    foreach ($view['groups'] as $group) {
        print "<fieldset><legend>{$group->label}</legend>";
        
        print '<table>';
        foreach ($view['methods'][$group->id] as $method) {
            $decoratorclass = "decorator{$method->type}";
            
            if (class_exists($decoratorclass)) {
                $decorator = new $decoratorclass;
                $method->value = $decorator->decorate($method->value);
            }
            
            print "<tr><td>{$method->type}:</td><td>{$method->value}</td></tr>";
        }
        print '</table>';
        
        print "</fieldset>";
    }
?>
<script type="text/javascript" src="/assets/removal.js"></script>