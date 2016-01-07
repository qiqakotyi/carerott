<?php
$str = "merchant_id=10000100&merchant_key=46f0cd694581a&return_url=http%3a%2a%2fwww.carerott.com%2fpayment-gateway-integration&cancel_url=http%3a%2a%2fwww.www.carerott.com&notify_url=http%3a%2f%2fwww.carerott.com%2ffacebook%2fpayfast_success.php&name_first=Phumlani&name_last=Nyati&email_address=sbtu01%40payfast.co.za&m_payment_id=TRN123456789&amount=200.00&item_name=Widget+Model+123&item_description=Widget+Model+123";
$md5 = md5($str);



?>

<div class="container">
    <p>Some Payment Instructions/information, will be on this page.
</div>

<form action="https://sandbox.payfast.co.za/eng/process" method="post" name="frmPay" id="frmPay">

    <!-- Receiver Details -->
<!--    <input type="hidden" name="username" value="sbtm01@payfast.co.za">-->
    <input type="hidden" name="merchant_id" value="10000100">
    <input type="hidden" name="merchant_key" value="46f0cd694581a">
    <input type="hidden" name="return_url" value="http://www.carerott.com/payment-gateway-integration/">
    <input type="hidden" name="cancel_url" value="http://www.carerott.com">
    <input type="hidden" name="notify_url" value="http://www.carerott.com/payfast_success.php">

    <!-- Payer Details -->
    <input type="hidden" name="name_first" value="Phumlani">
    <input type="hidden" name="name_last" value="Nyati">
    <input type="hidden" name="email_address" value="sbtu01@payfast.co.za">

    <!-- Transaction Details -->
    <input type="hidden" name="m_payment_id" value="TRN123456789">
    <input type="hidden" name="amount" value="200.00">
    <input type="hidden" name="item_name" value="Campaign One">
    <input type="hidden" name="item_description" value="This is our first Campaign">

    <!-- Transaction Options -->
    <input type="hidden" name="email_confirmation" value="1">

    <!-- Security -->
<!--    <input type="hidden" name="signature" value="--><?php ////echo $md5; ?><!--">-->

    <input type="submit" name="submit" value="Pay Here...">

</form>