<?php
//connect to the user account class
include("cart_controller.php");

//sanitize data

$result = delete_cart(1, "::1");
print_r($result);
if($result > 0){
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