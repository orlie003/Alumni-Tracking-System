 <?php
include('../database_connection.php');
$Degree =$_POST['degree'];
$name_school =$_POST['name_school'];
$year_grad =$_POST['year_grad'];
$honors_received =$_POST['honors_received'];
$scholarship =$_POST['scholarship'];
$Reason_Bac = implode(',', $_POST['baccalaureate_reason']);
$reasongrad = implode(',', $_POST['Reasona']);
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
$howPJ_find =implode(',', $_POST['howPJ_find']);
$reason_acceptPJ =implode(',', $_POST['reason_acceptPJ']);
$PJrel_degree =$_POST['PJrel_degree'];
$firstJ_title = "N/A";//asda
$firstC_name ="N/A";//asda
$firstC_place ="N/A";//asda
$firstC_add ="N/A";//asda
$How_firstfind =implode(',', $_POST['How_firstfind']);
$reason_acceptfirst ="N/A";//asda
$firstJrel_degree ="N/A";//asda
$noJ_duration =$_POST['noJ_duration'];
$reason_leaveJ =implode(',', $_POST['reason_leaveJ']);
$awardP =$_POST['awardP'];
$award_dateP =$_POST['award_dateP'];
$award_Pr =$_POST['award_Pr'];
$award_datePr =$_POST['award_datePr'];
$Reference_name =$_POST['reference_name'];
$Reference_add =$_POST['reference_email_add'];
$Reference_contact_num =$_POST['reference_contact_num'];
$Reference_email_add =$_POST['reference_email_add'];
$Date_accomplished =date("Y-m-d H:i:s");
$present_company = $_POST['present_company'];
$previous_company = $_POST['previous_company'];
$status = $_POST['status'];
$R_unemployed = $_POST['R_unemployed'];
$R_never = "N/A";
$R_selfemployed = "N/A";


$query = "INSERT INTO `educationbg` ( `Degree`, `Year_graduated_degree`, `Name_school`, `Honor_awards`, `Scholarship`, `Reason_Bac`, `reasona`, `Prof_Exam_Name`, `Date_Taken`, `Rating`, `issued_by`, `Title_Training_Seminar`, `Place_Training_Seminar`, `Date_Training_Seminar`, `Emp_Status`, `P_status_employement`, `PJtitle`, `PC_name`, `PC_place`, `PC_address`, `Bline`, `gross_income`, `howPJ_find`, `reason_acceptPJ`, `PJrel_degree`, `firstJ_title`, `firstC_name`, `firstC_place`, `firstC_add`, `How_firstfind`, `reason_acceptfirst`, `firstJrel_degree`, `noJ_duration`, `reason_leaveJ`, `awardP`, `award_dateP`, `award_Pr`, `award_datePr`, `Reference_name`, `Reference_add`, `Reference_contact_num`, `Reference_email_add`, `Date_accomplished`, `present_company`, `previous_company`, `status`, `R_unemployed`, `R_never`, `R_selfemployed`) VALUES ( $Degree', '$Year_graduated_degree', '$Name_school', '$Honor_awards', '$Scholarship',  '".$Reason_Bac."', '".$reasongrad."', '$Prof_Exam_Name', '$Date_Taken', '$Rating', '$issued_by', '$Title_Training_Seminar', '$Place_Training_Seminar', '$Date_Training_Seminar', '$Emp_Status', '$P_status_employement', '$PJtitle', '$PC_name', '$PC_place', '$PC_address', '$Bline', '$gross_income', '".$howPJ_find."', '".$reason_acceptPJ."', '$PJrel_degree', '$firstJ_title', '$firstC_name', '$firstC_place', '$firstC_add', '".$How_firstfind."', '$reason_acceptfirst', '$firstJrel_degree', '$noJ_duration', '".$reason_leaveJ."', '$awardP', '$award_dateP', '$award_Pr', '$award_datePr', '$Reference_name', '$Reference_add', '$Reference_contact_num', '$Reference_email_add', '$Date_accomplished','$present_company','$previous_company','$status','$R_unemployed','$R_never','$R_selfemployed');";

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