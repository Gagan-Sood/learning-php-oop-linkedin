<?php
class Box {
    public $name = 'Box';
}
$box = new Box;

$boxReference = $box;

$boxClone = clone $box;

$boxModified = clone $box;
$boxModified->name = 'Changed Box';

$anotherBox = new Box;

// == is casusal and just checks if all property values are equal
echo "Reference: " . ($box == $boxReference ? 'T' : 'F') . '<br/>';
echo "Cloned: " . ($box == $boxClone ? 'T' : 'F') . '<br/>';
echo "Modified: " . ($box == $boxModified ? 'T' : 'F') . '<br/>';
echo "Another: " . ($box == $anotherBox ? 'T' : 'F') . '<hr/>';

// === is strict and checks reference the same object
echo "Reference: " . ($box === $boxReference ? 'T' : 'F') . '<br/>';
echo "Cloned: " . ($box === $boxClone ? 'T' : 'F') . '<br/>';
echo "Modified: " . ($box === $boxModified ? 'T' : 'F') . '<br/>';
echo "Another: " . ($box === $anotherBox ? 'T' : 'F') . '<hr/>';
?>