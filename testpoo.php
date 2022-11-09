<?php

/**
 * Mon classe Reflection_Method
 */
class My_Reflection_Method extends ReflectionMethod
{
    public $visibility = array();

    public function __construct($o, $m)
    {
        parent::__construct($o, $m);
        $this->visibility = Reflection::getModifierNames($this->getModifiers());
    }
}

/**
 * Demo classe #1
 *
 */
class T {
    protected function x() {}
}

/**
 * Demo classe #2
 *
 */
class U extends T {
    function x() {}
}

// Affichage des informations
var_dump(new My_Reflection_Method('U', 'x'));
?>
