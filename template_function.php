<?php
function template_function() {

// variables du PO
$date=date('d.m.Y');
$requestType = "External Request";
$currency = "GBP";
$entryDate = $date;
$requestorID = "1102535";
$year = "2018/2019";
$rate = "1.30";
$doNotSendPO = "No";
$validatorID = "1102928";
$paymentType = "Wire transfer";
$supplierID = "9028";
$contactEmployeeID = "" ;
$campus = "CHAT";
$expectedDeliveryDate = "";
$supplierName = "BROWNS BOOKS FOR STUDENTS";
$supplierReference = "";
$internalComment = "";
$location = "Secondary Library";
$when = "";
$supplierCity = "";
$commentOnThePO = "";
$partialDeliveryAccepted = "Yes";
$notMaterialised = "No";
$VATIncluded = "No";
$account = "7120";
$costCenter = "2235";

$template = array(
    array("Date", $date, "", "PO Request File", "", "", "Request Type", $requestType, "", "Currency", $currency, "Entry Date", $entryDate),
    array("Requestor Employee ID", $requestorID, "", "", "", "", "Year", $year, "", "Rate", $rate, "Do not send PO", $doNotSendPO),
    array("Validator ID", $validatorID, "", "Delivery information", "", "", "Payment type", $paymentType, "", "Supplier ID", $supplierID, "", ""),
    array("Contact Employee ID", $contactEmployeeID, "", "Campus", $campus, "", "Expected delivery date", $expectedDeliveryDate, "", "Supplier Name", $supplierName, "Supplier's reference", $supplierReference),
    array("Internal Comment", $internalComment, "", "Location", $location, "", "When", $when, "", "Supplier City", $supplierCity, "", ""),
    array("Comment on the PO", $commentOnThePO, "", "", "", "", "Partial delivery accepted", $partialDeliveryAccepted, "", "Not materialised", $notMaterialised, "VAT included", $VATIncluded),
    array("", "", "", "", "", "", "", "", "", "", "", "", ""),
    array("", "", $account, $costCenter, "", "", "Total", "", "=SUM(G10:G1000)", "=SUM(I10:I1000)", "=SUM(J10:J1000)", "", ""),
    array("Supplier Reference", "Item Description / Item ID", "Account", "Cost Center", "Project ID", "Qty", "Unit price", "VAT %", "Net Amount", "Amount in currency", "Estimated CHF Amount", "Receipt?"),
);

return $template;

}
?>