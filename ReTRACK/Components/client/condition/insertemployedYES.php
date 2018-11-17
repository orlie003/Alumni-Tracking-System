 <?php
include('../database_connection.php');

$degree =$_POST['degree'];
$Name_school =$_POST['Name_school'];
$year_grad =$_POST['year_grad'];
$honors_received =$_POST['honors_received'];
$scholarship =$_POST['scholarship'];
$baccalaureate_reason = implode(',', $_POST['baccalaureate_reason']);
$grad_study_reason = implode(',', $_POST['Reasona']);
$name_of_exam =$_POST['name_of_exam'];
$date_taken =$_POST['date_taken'];
$rating =$_POST['rating'];
$training_seminar_title =$_POST['training_seminar_title'];
$place_of_training_seminar =$_POST['place_of_training_seminar'];
$date =$_POST['	date'];
// $Emp_Status =$_POST['Emp_Status'];
// $P_status_employement =$_POST['P_status_employement'];
// $PJtitle =$_POST['PJtitle'];
// $PC_name =$_POST['PC_name'];
// $PC_place =$_POST['PC_place'];
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
// $Date_accomplished =date("Y-m-d H:i:s");
// $present_company = $_POST['present_company'];
// $previous_company = $_POST['previous_company'];
// $status = $_POST['status'];
// $R_unemployed = "N/A";
// $R_never = "N/A";
// $R_selfemployed = "N/A";

$query = "INSERT INTO `educatiobg` (`degree`, `year_grad`, `Name_school`, `honors_received`, `scholarship`, `baccalaureate_reason`, `reasona`, `name_of_exam`, `date_taken`, `rating`, `issued_by`, `training_seminar_title`, `place_of_training_seminar`, `date`) 
    VALUES ( '$degree', '$year_grad', '$Name_school', '$honors_received', '$scholarship',  '".$baccalaureate_reason."', '".$grad_study_reason."', '$name_of_exam', '$date_taken', '$rating', '$issued_by', '$training_seminar_title', '$place_of_training_seminar', '$	date');";

if(mysqli_query($connection, $query)) {
    header('Location:../');
}
else {
    echo "error";
}
mysqli_close($connection);
?>




<!-- $Last_name =$_POST['Last_name'];
$First_name =$_POST['First_name'];
$Middle_name =$_POST['Middle_name'];
$Gender =$_POST['Gender'];
$Birth_date =$_POST['Birth_date'];
$Age =$_POST['Age'];
$address_current =$_POST['address_current'];
$address_permanent =$_POST['address_permanent'];
$Email_add =$_POST['Email_add'];
$Tel_num =$_POST['Tel_num'];
$Mobile_num =$_POST['Mobile_num'];
$Degree =$_POST['Degree'];
$Year_graduated_degree =$_POST['Year_graduated_degree'];
$Name_school =$_POST['Name_school'];
$Honor_awards =$_POST['Honor_awards'];
$Scholarship =$_POST['Scholarship'];
$Reason_Bac =$_POST['Reason_Bac'];
$Prof_Exam_Name =$_POST['Prof_Exam_Name'];
$Date_Taken =$_POST['Date_Taken'];
$Rating =$_POST['Rating'];
$issued_by =$_POST['issued_by'];
$Title_Training_Seminar =$_POST['Title_Training_Seminar'];
$Place_Training_Seminar =$_POST['Place_Training_Seminar'];
$Date_Training_Seminar =$_POST['Date_Training_Seminar'];
$Emp_Status =$_POST['Emp_Status'];
$P_status_employement =$_POST['P_status_employement'];
$PJtitle =$_POST['PJtitle'];
$PC_name =$_POST['PC_name'];
$PC_place =$_POST['PC_place'];
$PC_address =$_POST['PC_address'];
$Bline =$_POST['Bline'];
$gross_income =$_POST['gross_income'];
$howPJ_find =$_POST['howPJ_find'];
$reason_acceptPJ =$_POST['reason_acceptPJ'];
$PJrel_degree =$_POST['PJrel_degree'];
$firstJ_title =$_POST['firstJ_title'];
$firstC_name =$_POST['firstC_name'];
$firstC_place =$_POST['firstC_place'];
$firstC_add =$_POST['firstC_add'];
$How_firstfind =$_POST['How_firstfind'];
$reason_acceptfirst =$_POST['reason_acceptfirst'];
$firstJrel_degree =$_POST['firstJrel_degree'];
$noJ_duration =$_POST['noJ_duration'];
$reason_leaveJ =$_POST['reason_leaveJ'];
$awardP =$_POST['awardP'];
$award_dateP =$_POST['award_dateP'];
$award_Pr =$_POST['award_Pr'];
$award_datePr =$_POST['award_datePr'];
$Reference_name =$_POST['Reference_name'];
$Reference_add =$_POST['Reference_add'];
$Reference_contact_num =$_POST['Reference_contact_num'];
$Reference_email_add =$_POST['Reference_email_add'];
$Date_accomplished =date("Y-m-d H:i:s");
 -->