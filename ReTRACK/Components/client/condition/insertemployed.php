 <?php
include('../database_connection.php');

$stat_present =$_POST['stat_present'];
$jobtitle_present =$_POST['	jobtitle_present'];
$namecompany_present =$_POST['namecompany_present'];
$honors_received =$_POST['honors_received'];
$place_presentemp =$_POST['place_presentemp'];
$add_presentemp = implode(',', $_POST['add_presentemp']);
$majorline_present = implode(',', $_POST['Reasona']);
$gross_income =$_POST['gross_income'];
$find_presentjob =$_POST['	find_presentjob'];
$reason_acceptpresent =$_POST['reason_acceptpresent'];
$present_rel_degree =$_POST['present_rel_degree'];
$reasonpresently_unemp =$_POST['reasonpresently_unemp'];
$reason_neveremp =$_POST['	reason_neveremp'];
$Emp_Status =$_POST['Emp_Status'];
$reason_selfemp =$_POST['reason_selfemp'];
$majorline_selfemp =$_POST['	majorline_selfemp'];
$grossearning_buss =$_POST['grossearning_buss'];
$howlong_buss =$_POST['howlong_buss'];
// $PC_address =$_POST['PC_address'];
// $Bline =$_POST['Bline'];
// $gross_income =$_POST['gross_income'];
// $howPJ_find =implode(',', $_POST['howPJ_find']);
// $reason_acceptPJ =implode(',', $_POST['reason_acceptPJ']);
// $PJrel_degree =$_POST['PJrel_degree'];
// $firstJ_title = "N/A";
// $firstC_name ="N/A";
// $firstC_place ="N/A";
// $firstC_add ="N/A";
// $How_firstfind ="N/A";
// $reason_acceptfirst ="N/A";
// $firstJrel_degree ="N/A";
// $noJ_duration =$_POST['noJ_duration'];
// $reason_leaveJ ="N/A";
// $awardP =$_POST['awardP'];
// $award_dateP =$_POST['award_dateP'];
// $award_Pr ="N/A";
// $award_datePr ="N/A";
// $Reference_name =$_POST['reference_name'];
// $Reference_add =$_POST['refence_add'];
// $Reference_contact_num =$_POST['reference_contact_num'];
// $Reference_email_add =$_POST['reference_email_add'];
// $Date_accomplished =reason_neveremp("Y-m-d H:i:s");
// $present_company = $_POST['present_company'];
// $previous_company = $_POST['previous_company'];
// $status = $_POST['status'];
// $R_unemployed = "N/A";
// $R_never = "N/A";
// $R_selfemployed = "N/A";

$query = "INSERT INTO `educatiobg` (`stat_present`, `namecompany_present`, `	jobtitle_present`, `honors_received`, `place_presentemp`, `add_presentemp`, `reasona`, `gross_income`, `	find_presentjob`, `reason_acceptpresent`, `issued_by`, `present_rel_degree`, `reasonpresently_unemp`, `reason_neveremp`, `reason_selfemp`, `majorline_selfemp`, `grossearning_buss`,`howlong_buss`) 
    VALUES ( '$stat_present', '$namecompany_present', '$	jobtitle_present', '$honors_received', '$place_presentemp',  '$add_presentemp', '$majorline_present', '$gross_income', '$	find_presentjob', '$reason_acceptpresent', '$issued_by', '$present_rel_degree', '$reasonpresently_unemp', '$	reason_neveremp', 'reason_selfemp', 'majorline_selfemp', 'grossearning_buss', 'howlong_buss');";

if(mysqli_query($connection, $query)) {
    header('Location:../');
}
else {
    echo "error";
}
mysqli_close($connection);
?>

