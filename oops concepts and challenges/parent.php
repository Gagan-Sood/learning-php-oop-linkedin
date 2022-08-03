<?php
class Chef {
    
    public static function makeDinner() {
        echo "Cook Food.<br />";
    }
}
class AmateurChef extends Chef {
    
    public static function makeDinner() {
        echo "Read Recipe.<br />";
        parent::makeDinner();
        echo "Clean up mess.<br />";
    }
}

echo "Chef:<br />";
Chef::makeDinner();
echo "AmateurChef:<br />";
AmateurChef::makeDinner();

echo "<hr/>";

class Image {
    public static $resizingEnabled = true;

    public static function geometry() {
        echo "800x600";
    }
}

class ProfileImage extends Image {
    
    public static function geometry() {
        if (self::$resizingEnabled) {
            echo "100x100";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry()."<br />";
echo ProfileImage::geometry()."<br />";

ProfileImage::$resizingEnabled = false;
echo ProfileImage::geometry()."<br />";
?>