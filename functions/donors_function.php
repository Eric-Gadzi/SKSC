<?php 

    require_once("../controllers/user_controller.php");


   

function display_donations(){

    $donor_list = select_donor();
    if($donor_list)
    foreach($donor_list as $donor){
        display_a_donor($donor['donor_name'], $donor['message'], $donor['donation_id'], $donor['donation_date'],$donor['donor_contact'], $donor['donor_email'], $donor['donation_amount']);
    }

}

function display_a_donor($name, $message, $id, $date, $contact, $email, $amount){
    echo "
    <div class='col-lg-4  mb-sm-4 ftco-animate'>
    <div class='staff'>
        <div class='d-flex mb-4'>
            <div class='info ml-4'>
                <h3><a href='teacher-single.html'>$name</a></h3>
                <span class='position'>Date Of Donation: $date</span>
           
                    <p>
                       $message
                    </p>

                    <p>
                       Amount Donated:<br> GHC $amount
                    </p>";
        if (isset($_SESSION['isAdmin'])) {
                echo "
                                     
                <div class='container'>
                    <div class='row'>
                        <a href='update_volunteer.php?user_name=$name&user_email=$email&user_contact=$contact&user_id=$id' class='btn btn-outline-warning btn-sm' role='button'><i class='bi bi-pencil-square'></i></a>
                        <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                        <a href='../actions/delete_donor.php?user_id=$id' class='btn btn-outline-danger btn-sm' role='button'><i class='bi bi-trash-fill'></i></a>
                    </div>
                </div>
                ";
        }
                echo "
            </div>
        </div>
    </div>
</div>
    ";
}



?>