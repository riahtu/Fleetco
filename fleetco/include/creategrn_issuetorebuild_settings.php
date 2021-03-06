<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issuetorebuild = array();
	$tdatacreategrn_issuetorebuild[".truncateText"] = true;
	$tdatacreategrn_issuetorebuild[".NumberOfChars"] = 80;
	$tdatacreategrn_issuetorebuild[".ShortName"] = "creategrn_issuetorebuild";
	$tdatacreategrn_issuetorebuild[".OwnerID"] = "";
	$tdatacreategrn_issuetorebuild[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issuetorebuild = array();
$fieldToolTipscreategrn_issuetorebuild = array();
$pageTitlescreategrn_issuetorebuild = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issuetorebuild["English"] = array();
	$fieldToolTipscreategrn_issuetorebuild["English"] = array();
	$pageTitlescreategrn_issuetorebuild["English"] = array();
	$fieldLabelscreategrn_issuetorebuild["English"]["ItemCode"] = "Tyre Code";
	$fieldToolTipscreategrn_issuetorebuild["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Brand"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Description"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issuetorebuild["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issuetorebuild["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issuetorebuild["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issuetorebuild["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Status"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issuetorebuild["English"]["ID"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["RefNumber"] = "PO No.";
	$fieldToolTipscreategrn_issuetorebuild["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Cost"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issuetorebuild["English"]["Fleet"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issuetorebuild["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_issuetorebuild["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issuetorebuild["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issuetorebuild["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_issuetorebuild["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_issuetorebuild["English"]))
		$tdatacreategrn_issuetorebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issuetorebuild[""] = array();
	$fieldToolTipscreategrn_issuetorebuild[""] = array();
	$pageTitlescreategrn_issuetorebuild[""] = array();
	if (count($fieldToolTipscreategrn_issuetorebuild[""]))
		$tdatacreategrn_issuetorebuild[".isUseToolTips"] = true;
}


	$tdatacreategrn_issuetorebuild[".NCSearch"] = true;



$tdatacreategrn_issuetorebuild[".shortTableName"] = "creategrn_issuetorebuild";
$tdatacreategrn_issuetorebuild[".nSecOptions"] = 0;
$tdatacreategrn_issuetorebuild[".recsPerRowPrint"] = 1;
$tdatacreategrn_issuetorebuild[".mainTableOwnerID"] = "";
$tdatacreategrn_issuetorebuild[".moveNext"] = 1;
$tdatacreategrn_issuetorebuild[".entityType"] = 1;

$tdatacreategrn_issuetorebuild[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_issuetorebuild[".showAddInPopup"] = false;

$tdatacreategrn_issuetorebuild[".showEditInPopup"] = false;

$tdatacreategrn_issuetorebuild[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issuetorebuild[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issuetorebuild[".fieldsForRegister"] = array();

	$tdatacreategrn_issuetorebuild[".listAjax"] = true;

	$tdatacreategrn_issuetorebuild[".audit"] = false;

	$tdatacreategrn_issuetorebuild[".locking"] = false;

$tdatacreategrn_issuetorebuild[".edit"] = true;
$tdatacreategrn_issuetorebuild[".afterEditAction"] = 1;
$tdatacreategrn_issuetorebuild[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issuetorebuild[".afterEditActionDetTable"] = "";

$tdatacreategrn_issuetorebuild[".add"] = true;
$tdatacreategrn_issuetorebuild[".afterAddAction"] = 1;
$tdatacreategrn_issuetorebuild[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issuetorebuild[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issuetorebuild[".list"] = true;

$tdatacreategrn_issuetorebuild[".view"] = true;

$tdatacreategrn_issuetorebuild[".import"] = true;

$tdatacreategrn_issuetorebuild[".exportTo"] = true;

$tdatacreategrn_issuetorebuild[".printFriendly"] = true;

$tdatacreategrn_issuetorebuild[".delete"] = true;

$tdatacreategrn_issuetorebuild[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_issuetorebuild[".searchSaving"] = false;
//

$tdatacreategrn_issuetorebuild[".showSearchPanel"] = true;
		$tdatacreategrn_issuetorebuild[".flexibleSearch"] = true;

$tdatacreategrn_issuetorebuild[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issuetorebuild[".rowHighlite"] = true;



$tdatacreategrn_issuetorebuild[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issuetorebuild[".isUseTimeForSearch"] = false;





$tdatacreategrn_issuetorebuild[".allSearchFields"] = array();
$tdatacreategrn_issuetorebuild[".filterFields"] = array();
$tdatacreategrn_issuetorebuild[".requiredSearchFields"] = array();

$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Status";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Description";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issuetorebuild[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_issuetorebuild[".googleLikeFields"] = array();
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_issuetorebuild[".googleLikeFields"][] = "Cost";


$tdatacreategrn_issuetorebuild[".advSearchFields"] = array();
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_issuetorebuild[".tableType"] = "list";

$tdatacreategrn_issuetorebuild[".printerPageOrientation"] = 0;
$tdatacreategrn_issuetorebuild[".nPrinterPageScale"] = 100;

$tdatacreategrn_issuetorebuild[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issuetorebuild[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issuetorebuild[".geocodingEnabled"] = false;





$tdatacreategrn_issuetorebuild[".listGridLayout"] = 3;





// view page pdf
$tdatacreategrn_issuetorebuild[".isViewPagePDF"] = true;
$tdatacreategrn_issuetorebuild[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issuetorebuild[".isPrinterPagePDF"] = true;
$tdatacreategrn_issuetorebuild[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_issuetorebuild[".totalsFields"] = array();
$tdatacreategrn_issuetorebuild[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_issuetorebuild[".pageSize"] = 20;

$tdatacreategrn_issuetorebuild[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issuetorebuild[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issuetorebuild[".orderindexes"] = array();
$tdatacreategrn_issuetorebuild[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_issuetorebuild[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Cost";
$tdatacreategrn_issuetorebuild[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issuetorebuild[".sqlWhereExpr"] = "Status =\"Sent to rebuild\"";
$tdatacreategrn_issuetorebuild[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_issuetorebuild[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issuetorebuild[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issuetorebuild[".highlightSearchResults"] = true;

$tableKeyscreategrn_issuetorebuild = array();
$tableKeyscreategrn_issuetorebuild[] = "ID";
$tdatacreategrn_issuetorebuild[".Keys"] = $tableKeyscreategrn_issuetorebuild;

$tdatacreategrn_issuetorebuild[".listFields"] = array();
$tdatacreategrn_issuetorebuild[".listFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".listFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".listFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".listFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".listFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".listFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".listFields"][] = "EnteredBy";

$tdatacreategrn_issuetorebuild[".hideMobileList"] = array();


$tdatacreategrn_issuetorebuild[".viewFields"] = array();
$tdatacreategrn_issuetorebuild[".viewFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "SystemDate";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_issuetorebuild[".addFields"] = array();
$tdatacreategrn_issuetorebuild[".addFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".addFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".addFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".addFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".addFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".addFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".addFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".addFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".addFields"][] = "SystemDate";

$tdatacreategrn_issuetorebuild[".masterListFields"] = array();
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "PriceLink";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".masterListFields"][] = "SystemDate";

$tdatacreategrn_issuetorebuild[".inlineAddFields"] = array();

$tdatacreategrn_issuetorebuild[".editFields"] = array();
$tdatacreategrn_issuetorebuild[".editFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".editFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".editFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".editFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".editFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".editFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".editFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".editFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".editFields"][] = "SystemDate";
$tdatacreategrn_issuetorebuild[".editFields"][] = "ApprovedBy";

$tdatacreategrn_issuetorebuild[".inlineEditFields"] = array();

$tdatacreategrn_issuetorebuild[".exportFields"] = array();
$tdatacreategrn_issuetorebuild[".exportFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "PriceLink";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".exportFields"][] = "SystemDate";

$tdatacreategrn_issuetorebuild[".importFields"] = array();
$tdatacreategrn_issuetorebuild[".importFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".importFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".importFields"][] = "SystemDate";
$tdatacreategrn_issuetorebuild[".importFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".importFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issuetorebuild[".importFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".importFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".importFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".importFields"][] = "PriceLink";
$tdatacreategrn_issuetorebuild[".importFields"][] = "Cost";

$tdatacreategrn_issuetorebuild[".printFields"] = array();
$tdatacreategrn_issuetorebuild[".printFields"][] = "ID";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Status";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Fleet";
$tdatacreategrn_issuetorebuild[".printFields"][] = "GRNDate";
$tdatacreategrn_issuetorebuild[".printFields"][] = "RefNumber";
$tdatacreategrn_issuetorebuild[".printFields"][] = "ItemCode";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Quantity";
$tdatacreategrn_issuetorebuild[".printFields"][] = "PriceLink";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Brand";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Description";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Supplier";
$tdatacreategrn_issuetorebuild[".printFields"][] = "UnitPrice";
$tdatacreategrn_issuetorebuild[".printFields"][] = "ApprovedBy";
$tdatacreategrn_issuetorebuild[".printFields"][] = "Cost";
$tdatacreategrn_issuetorebuild[".printFields"][] = "EnteredBy";
$tdatacreategrn_issuetorebuild[".printFields"][] = "CurrentStock";
$tdatacreategrn_issuetorebuild[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacreategrn_issuetorebuild["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","ItemCode");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItemCode";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "inventorymaster-qty";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$edata["autoCompleteFields"][] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Brand";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Supplier");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Supplier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Supplier";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Quantity");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "RemovedFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacreategrn_issuetorebuild["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRNDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRNDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EnteredBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnteredBy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","ApprovedBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedBy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacreategrn_issuetorebuild["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnitPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","RefNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","CurrentStock");
	$fdata["FieldType"] = 5;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CurrentStock)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fleettype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "RemovedFrom";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","PriceLink");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PriceLink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PriceLink";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "inventorymaster-pricing";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacreategrn_issuetorebuild["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issuetorebuild","Cost");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issuetorebuild["Cost"] = $fdata;


$tables_data["creategrn-issuetorebuild"]=&$tdatacreategrn_issuetorebuild;
$field_labels["creategrn_issuetorebuild"] = &$fieldLabelscreategrn_issuetorebuild;
$fieldToolTips["creategrn_issuetorebuild"] = &$fieldToolTipscreategrn_issuetorebuild;
$page_titles["creategrn_issuetorebuild"] = &$pageTitlescreategrn_issuetorebuild;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issuetorebuild"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issuetorebuild"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issuetorebuild()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Sent to rebuild\"";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Sent to rebuild\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Sent to rebuild\"";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-issuetorebuild";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-issuetorebuild";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-issuetorebuild";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-issuetorebuild";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-issuetorebuild";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-issuetorebuild";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-issuetorebuild";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-issuetorebuild";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-issuetorebuild";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-issuetorebuild";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-issuetorebuild";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-issuetorebuild";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-issuetorebuild";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-issuetorebuild";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_SUM";
$proto35["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SUM(CurrentStock)";
$proto34["m_srcTableName"] = "creategrn-issuetorebuild";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-issuetorebuild";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto39["m_sql"] = "PriceLink";
$proto39["m_srcTableName"] = "creategrn-issuetorebuild";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto41["m_sql"] = "Cost";
$proto41["m_srcTableName"] = "creategrn-issuetorebuild";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "creategrn";
$proto44["m_srcTableName"] = "creategrn-issuetorebuild";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "ID";
$proto44["m_columns"][] = "ItemCode";
$proto44["m_columns"][] = "Brand";
$proto44["m_columns"][] = "Description";
$proto44["m_columns"][] = "Supplier";
$proto44["m_columns"][] = "Quantity";
$proto44["m_columns"][] = "RemovedFrom";
$proto44["m_columns"][] = "SystemDate";
$proto44["m_columns"][] = "GRNDate";
$proto44["m_columns"][] = "EnteredBy";
$proto44["m_columns"][] = "ApprovedBy";
$proto44["m_columns"][] = "UnitPrice";
$proto44["m_columns"][] = "Status";
$proto44["m_columns"][] = "RefNumber";
$proto44["m_columns"][] = "CurrentStock";
$proto44["m_columns"][] = "Fleet";
$proto44["m_columns"][] = "PriceLink";
$proto44["m_columns"][] = "Cost";
$proto44["m_columns"][] = "Remarks";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "creategrn";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "creategrn-issuetorebuild";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto81=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issuetorebuild"
));

$proto81["m_column"]=$obj;
$proto81["m_bAsc"] = 0;
$proto81["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto81);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-issuetorebuild";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issuetorebuild = createSqlQuery_creategrn_issuetorebuild();


	
					
;

																		

$tdatacreategrn_issuetorebuild[".sqlquery"] = $queryData_creategrn_issuetorebuild;

include_once(getabspath("include/creategrn_issuetorebuild_events.php"));
$tableEvents["creategrn-issuetorebuild"] = new eventclass_creategrn_issuetorebuild;
$tdatacreategrn_issuetorebuild[".hasEvents"] = true;

?>