<?php



class MeineException extends Exception
{

    

}


function turn($a) {

    if($a == 0) {
        throw new Exception("Error Exeption");
    }
    
    if($a == 1) {
        throw new MeineException("Error Meine Exeption");
    }
    return -$a;
}



    var_dump("START");
 
    try {
        turn(0);
    } catch(MeineException $e) {
        
        var_dump("Es ist eine MeineException aufgetreten");
    } catch(Exception $e) {
        
        var_dump("Es ist eine Exception aufgetreten");
    }


   var_dump("STOP");


   
   var_dump("START");
 
   try {
       turn(1);
   } catch(MeineException $e) {
       
       var_dump("Es ist eine MeineException aufgetreten");
   } catch(Exception $e) {
       
       var_dump("Es ist eine Exception aufgetreten");
   }


  var_dump("STOP");




?>