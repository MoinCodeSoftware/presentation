<?php

namespace App\Post;

use ArrayAccess;
use App\Core\AbstractModel;

class PostModel extends AbstractModel
{

    public $id;
    public $title;
    public $content;


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