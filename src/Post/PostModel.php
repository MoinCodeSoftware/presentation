<?php

namespace App\Post;

use ArrayAccess;

class PostModel implements ArrayAccess
{

    public $id;
    public $title;
    public $content;
    
    public function offsetExists($offset) 
    {
        return isset($this->offset);
    }
    public function offsetGet($offset) 
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value) 
    {
        return $this->$offset = $value;
    }
    public function offsetUnset($offset) 
    {
        unset($this->$offset);
    }

    

    public function getShortContent($content) 
    {
        
        if (strlen($content) <= 120) {
            return;
        } else {
            $shortcontent = preg_replace( '/[^ ]*$/', '', substr( $content, 0, 120 ) );
            $shortcontentnl = nl2br($shortcontent);
            $shortcontentout = '<div class="panel-body"><p><b>' . $shortcontentnl . '</b> ... </p></div>';

            return $shortcontentout;
        }
 
        
    }


}



?>