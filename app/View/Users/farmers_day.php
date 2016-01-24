<?php


require_once('Connections/cadek_conn.php');


$fname = $_POST['firstname'];
$surname = $_POST['surname'];
$company = $_POST['company'];
$produce = $_POST['produce'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$cell = $_POST['cell'];
$postal = $_POST['postal'];
$town = $_POST['town'];
$postalCode = $_POST['postalcode'];
$locations = $_POST['location'];
$date = date("Y/m/d");


$fname = mysql_real_escape_string($fname);
$surname = mysql_real_escape_string($surname);
$company = mysql_real_escape_string($company);
$produce = mysql_real_escape_string($produce);
$email = mysql_real_escape_string($email);
$tel = mysql_real_escape_string($tel);
$cell = mysql_real_escape_string($cell);
$postal = mysql_real_escape_string($postal);
$town = mysql_real_escape_string($town);
$postalCode = mysql_real_escape_string($postalCode);
//$locations = mysql_real_escape_string($locations);

$location = implode(',' , $locations);

$check = mysql_query("SELECT * FROM farmers_day WHERE email = '$email'");
$numrows = mysql_num_rows($check);

if($numrows > 0){
    header("Location: http://www.agriworks.co.za/register.php?error=duplicate");
}else{

    $insert = mysql_query("INSERT INTO farmers_day (firstname, surname, company, produce, email, tel, cell, postal, town, postalcode, location, registration_date)
                                            VALUES('$fname', '$surname', '$company', '$produce', '$email', '$tel', '$cell', '$postal', '$town', '$postalCode', '$location', '$date')");

    if($insert) {
        //$to = "info@cadek.co.za, adk@cadek.co.za"; // this is your Email address
        $to = "phumlani.nyati@gmail.com";
        $from = "info@agriworks.co.za"; //$email; // this is the sender's Email address
        $subject = "New Registration";
        $message.= "<html><body><table width='650'>";
        $message = "<tr><td align='left'><b>Dear Agriworks Team </b></td></tr>\n\n";
            $message.= "<tr><td width='350'>A new registration has been submitted. Details below.</td><tr>\n\n";
            $message.= "<tr><td align='left'>Name: </td><td>" .$fname.  "</td></tr>\n\n";
            $message.= "<tr><td align='left'>Surname: </td><td>" .$surname.  "</td></tr>\n\n";
            $message.= "<tr><td align='left'>Farm Name / Company Name:</td><td>" .$company. "</td></tr>\n\n";
            $message.= "<tr><td align='left'>Main Produce / Main Activity:</td><td>" .$produce. "</td></tr>\n\n";
            // $message.= "E-mail Address:" .$email. "\n\n";
            $message.= "<tr><td align='left'>Tel number:</td><td>" .$tel. "</td></tr>\n\n";
            $message.= "<tr><td align='left'>Cell number:</td><td>" .$cell. "</td></tr>\n\n";
            $message.= "<tr><td align='left'>Address: </td><td>" .$postal. "</td>\r\n";
            $message.=  "<tr><td width='300'>&nbsp;</td><td>".$town. "</td></tr>\r\n" ;
            $message.=  "<tr><td width='300'>&nbsp;</td><td>".$postalCode."</td></tr>\n\n";
            $message.=  "<tr><td align='left'>Registration date: </td><td>".$date."</td></tr>\n\n";
            $message.= "<tr><td width='350'>Signing Up for The <b>" .$location. " </b>Farmers Day.</td></tr>";
			$message.= "</table><body></html>";
            $headers = "From: Agriworks-Expo <".$from.">";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            //$headers .= "\r\nReply-To: info@agriworks.co.za";

            $sent = mail($to,$subject,$message,$headers);
			
            if($sent){
                //echo "Mail Sent. Thank you ";
                header("Location: http://www.agriworks.co.za/thankyou.php"); //to redirect to another page.
            } else {
                echo "The emails is not sent out";
            }


        }else{
        die("Error:".mysql_error());
        //header("Location: http://www.agriworks.co.za/register.php?error=insert");
    }


}


?>


