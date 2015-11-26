<?php
class decoratormobilephone implements decoratorinterface
{
    public function decorate($item)
    {
        $return = $item;
        
        if (view::$viewtype == 'mobile') {
            $return = '<a href="wtai://wp/mc;' . $item . '">' . $item . '</a>';
        }

        return $return;
    }
}
?>