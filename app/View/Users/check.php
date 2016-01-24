<?php
require_once('../Connections/cadek_conn.php');
// Load the tNG classes
require_once('../includes/tng/tNG.inc.php');

// Make unified connection variable
$conn_cadek_conn = new KT_connection($cadek_conn, $database_cadek_conn);

//Start Restrict Access To Page
$restrict = new tNG_RestrictAccess($conn_cadek_conn, "../");
//Grand Levels: Level
$restrict->addLevel("1");
$restrict->Execute();
//End Restrict Access To Page

$url = $_SERVER['HTTP_HOST'];

mysql_select_db($database_cadek_conn, $cadek_conn);
$select = "SELECT firstname, surname, company, produce, email, tel as telephone, cell, postal, town, postalcode, location as events, registration_date
FROM `farmers_day` ORDER BY registration_date ASC";

$export = mysql_query ( $select ) or die ( "Sql error : " . mysql_error( ) );

$fields = mysql_num_fields ( $export );

for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}

while( $row = mysql_fetch_row( $export ) )
{
    $line = '';

    foreach( $row as $value )
    {
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );

if ( $data == "" )
{
    $data = "\n(0) Records Found!\n";
}



header("Content-type: application/ms-excel");
header("Content-Disposition: attachment; filename=registerers.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>