<?php

// Kleine Helferklasse zum erstellen von HTML Elementen 
class Layouthelper {


    public function cardStart() {

    $cardStart = '<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">';

    return $cardStart;

    }


    

    public function cardEnd() {

        $cardEnd = '</div>  
        </div>  
    </div>
</div>
';
    
        return $cardEnd;
    
        }
    


        public function formatCode($code) {


            ob_start();
            highlight_string($code);
            
            $codeOutput = ob_get_clean();

            return $codeOutput;


        }

}