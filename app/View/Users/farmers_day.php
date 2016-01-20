<?php
/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 1/19/16
 * Time: 10:22 PM
 */


    require_once('Connections/cadek_conn.php');


    $fname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $company = $_POST['company'];
    $produce = $_POST['produce'];
//    $email = $_POST['email'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cell = $_POST['cell'];
    $postal = $_POST['postal'];
    $town = $_POST['town'];
    $postalCode = $_POST['postalcode'];
    $locations = $_POST['location'];




    $check_select = mysql_query("SELECT * FROM farmers_day WHERE email = '$email'");
    $numrows = mysql_num_rows($check_select);

    if($numrows > 0){
        header("Location: http://www.agriworks.co.za/register.php?error=duplicate");
    }else{

        $location = implode(',', $locations);
        $insert = "INSERT INTO farmers_day (firstname, surname, company, produce, email, tel, cell, postal, town, postalcode, location)
                                            VALUES ('$fname', '$surname', '$company', '$produce', '$email', '$tel', '$cell', '$postal', '$town', '$postalCode', '$location')";

        $result = mysql_query($insert);
        if($result) {
            //$to = "info@cadek.co.za, adk@cadek.co.za"; // this is your Email address
            $to = "phumlani.nyati@gmail.com";
            $from = $email; // this is the sender's Email address
            $subject = "Farmers Day Registration";
            $message = "Dear Agriworks Team \n\n";
            $message.= "A new registration has been submitted. Details below. \r\n";
            $message.= "Name: .$fname. \r\n";
            $message.= "Surname: .$surname. \r\n";
            $message.= "Farm Name / Company Name: .$company. \r\n";
            $message.= "Main Produce / Main Activity: .$produce. \r\n";
            $message.= "E-mail Address: .$email. \r\n";
            $message.= "Tel number: .$tel. \r\n";
            $message.= "Cell number: .$cell. \r\n";
            $message.= "Address: .$postal. \r\n";
            $message.= ".$town.";
            $message.= ".$postalCode.";
            $message.= "Signing Up for The .$location. Farmers Day.";



            $headers = "From:" . $from;
            $sent = mail($to,$subject,$message,$headers);
            if($sent){
                //echo "Mail Sent. Thank you ";
                header('Location: http://www.agriworks.co.za/thankyou.php'); //to redirect to another page.
            } else {
                echo "The emails is not sent out";
            }


        }


    }






