<?php
require_once('BaseController.php');

$firstName = $_REQUEST['firstName'] ? strtoupper($_REQUEST['firstName']) : '';
$lastName = $_REQUEST['lastName'] ? strtoupper($_REQUEST['lastName']) : '';
$email = $_REQUEST['email'] ? strtolower($_REQUEST['email']) : '';
$personalProfile = $_REQUEST['personalProfile'] ? $_REQUEST['personalProfile'] : '';
$companyName = $_REQUEST['companyName'] ? strtoupper($_REQUEST['companyName']) : '';
$companyStartDate = $_REQUEST['companyStartDate'] ? $_REQUEST['companyStartDate'] : '';
$companyEndDate = $_REQUEST['companyEndDate'] ? $_REQUEST['companyEndDate'] : '';

if ($firstName != '' && $lastName != '' && $email != '' && $personalProfile != '' && $companyName != '' && $companyStartDate != '' && $companyStartDate != '' && $companyEndDate != ''){
    buildPDF($firstName, $lastName, $email, $personalProfile, $companyName, $companyStartDate, $companyEndDate);
} else {
    return false;
}