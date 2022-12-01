<?php
//connect to the user account class
include("products_controller.php");

//sanitize data

$result = product_is_finished(1);

if($result){
    print_r($result);
    echo "this is fun";
}else{
    print_r($result);
    echo "we are in trouble";
}

//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>