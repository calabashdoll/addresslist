<?php
class decoratorsocialnetwork implements decoratorinterface
{
    public function decorate($item)
    {
        $return = '<a href="' . $item . '">' . $item . '</a>';
        return $return;
    }
}
?>