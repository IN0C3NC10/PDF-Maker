<?php
require_once('BaseController.php');

$firstName = isset($_REQUEST['firstName']) ? strtoupper(cleanString($_REQUEST['firstName'])) : '';
$lastName = isset($_REQUEST['lastName']) ? strtoupper(cleanString($_REQUEST['lastName'])) : '';
$email = isset($_REQUEST['email']) ? strtolower($_REQUEST['email']) : '';
$personalProfile = isset($_REQUEST['personalProfile']) ? $_REQUEST['personalProfile'] : '';
$companyName = isset($_REQUEST['companyName']) ? strtoupper(cleanString($_REQUEST['companyName'])) : '';
$companyStartDate = isset($_REQUEST['companyStartDate']) ? $_REQUEST['companyStartDate'] : '';
$companyEndDate = isset($_REQUEST['companyEndDate']) ? $_REQUEST['companyEndDate'] : '';

if ($firstName != '' && $lastName != '' && $email != '' && $personalProfile != '' && $companyName != '' && $companyStartDate != '' && $companyStartDate != '' && $companyEndDate != ''){
    buildPDF($firstName, $lastName, $email, $personalProfile, $companyName, $companyStartDate, $companyEndDate);
}