<?php
$insert = false;
if(isset($_POST['f_coverage'])){
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'feedback';
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection Failed".mysqli_connection_error());
} 
$program = $_POST['program'];
$academic_year = $_POST['academic_year'];
$attendance_percent = $_POST['attendance_percent'];
$center_department = $_POST['center_department'];
$semester = $_POST['semester'];
$faculty = $_POST['faculty'];
$conceptual_ = $_POST['conceptual_clarity'];
$comm_skill = $_POST['communication_skill'];
$confusion_area = $_POST['confusion_area'];
$guidance = $_POST['guidance'];
$syllabus_cov = $_POST['syllabus_coverage'];
$motivation = $_POST['motivation'];
$punctuality = $_POST['punctuality'];
$theory_p = $_POST['theory_p'];
$it_skill = $_POST['it_skill'];
$books = $_POST['books'];
$extent_syllabus = $_POST['extent_syllabus'];
$practical_lab = $_POST['practical_lab'];
$obj_fulfillment = $_POST['obj_fulfillment'];
$prc_relevance = $_POST['prc_relevance'];
$f_coverage = $_POST['f_coverage'];
$remarks1 = $_POST['remarks1'];
$remarks2 = $_POST['remarks2'];
$remarks3 = $_POST['remarks3'];
$remarks4 = $_POST['remarks4'];
$remarks5 = $_POST['remarks5'];
$remarks6 = $_POST['remarks6'];
$D1 = $_POST['D1'];
$D2 = $_POST['D2'];
$M1 = $_POST['M1'];
$M2 = $_POST['M2'];
$Y1 = $_POST['Y1'];
$Y2 = $_POST['Y2'];
$Y3 = $_POST['Y3'];
$Y4 = $_POST['Y4'];
$date = ($Y1.$Y2.$Y3.$Y4.$M1.$M2.$D1.$D2);
$excitement = $_POST['excitement'];
$result_time = $_POST['result_time'];
$recommend_jnr = $_POST['recommend_jnr'];
$other_paper = $_POST['other_paper'];
$no_assignment = $_POST['no_assignment'];
$PC1 = $_POST['PC1'];
$PC2 = $_POST['PC2'];
$PC3 = $_POST['PC3'];
$PC4 = $_POST['PC4'];
$PC5 = $_POST['PC5'];
$paper_code = ($PC1.$PC2.$PC3.'-'.$PC4.$PC5);
$message = $_POST['message'];

$sql = "INSERT INTO `feedback_form` (`program`, `academic_year`, `attendance_percent`, `center_department`, `semester`, `faculty`, `conceptual_`, `communication_skill`, `area_confusion`, `guidance`, `syllabus_coverage`, `motivation`, `punctuality`, `theory_p`, `it_skill`, `books`, `extent_syllabus`, `practiacl_lab`, `obj_fullfillment`, `prc_relevance`, `f_coverage`, `remarks1`, `remarks2`, `remarks3`, `remarks4`, `remarks5`, `remarks6`, `date`, `excitement`, `result_time`, `recommend_jnr`, `other_paper`, `no_assignment`, `paper_code`, `message`) VALUES ('$program', '$academic_year', '$attendance_percent', '$center_department', '$semester', '$faculty', '$conceptual_', '$comm_skill', '$confusion_area', '$guidance', '$syllabus_cov', '$motivation', '$punctuality', '$theory_p', '$it_skill', '$books', '$extent_syllabus', '$practical_lab', '$obj_fulfillment', '$prc_relevance', '$f_coverage', '$remarks1', '$remarks2', '$remarks3', '$remarks4', '$remarks5', '$remarks6', '$date', '$excitement', '$result_time', '$recommend_jnr', '$other_paper', '$no_assignment', '$paper_code', '$message')";

if($conn->query($sql)==true){
    $insert = true;
} else {
    echo "Error: $sql <br> $conn->error";
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback_form</title>
    <link rel="stylesheet" href="../CSS/table_style.css">
    <link rel="stylesheet" href="../CSS/containers.css">
    
</head>

<body>
    <header>
        <div class="container">
            <address>
                <pre> Jamia Nagar,New Delhi,110025
Phone: 01126981717
email: directoriqac@jmi.ac.in
    </pre>
            </address>
            <div class=" container-1">
                <h1 class="h1-format">Jamia millia islamia</h1>
                <h1 class="h1-format">Internal quality assurance cell</h1>
                <h3>Teaching Evaluation/Curriculum Feedback</h3>
                <?php
                if($insert == true){
                    echo "<p style = 'color : green;'><em>Data Entered Successfully</em></p>";
                }
                ?>
            </div>
            <img src="../Images/iqac_logo.png" alt="iqac-logo" style="width: 100px; height:100px;">
        </div>
        <hr>
    </header>
    <main>
        <form action="feedback_form_2.php" method="post">
            
            <div class="major">
                <div class="major-1">
                    <div class="submajor-1">
                        <div class="three-container">
                            <div class="minor-1">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">Program</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <label class="label-format" for="ug">UG</label>
                                            <input type="radio" value ="UG"  name="program" id="ug">
                                            <label class="label-format" for="pg">PG</label>
                                            <input type="radio" value ="PG"  name="program" id="pg">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class=" minor-2">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">Academic year</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <label class="label-format" for="2018-19">2018-19</label>
                                            <input type="radio" value ="2018-19"  name="academic_year" id="2018-19"><br>
                                            <label class="label-format" for="2019-20">2019-20</label>
                                            <input type="radio" value ="2019-20"  name="academic_year" id="2019-20">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="minor-3">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">% of class attended</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <label class="label-format" for="attendance_percent">&lt;50</label>
                                            <input type="radio" value ="&lt;50"  name="attendance_percent" id="attendance_percent">
                                            <label class="label-format" for="attendance_percent">51-60</label>
                                            <input type="radio" value ="51-60"  name="attendance_percent" id="attendance_percent"><br>
                                            <label class="label-format" for="attendance_percent">61-70</label>
                                            <input type="radio" value ="61-70"  name="attendance_percent" id="attendance_percent">
                                            <label class="label-format" for="attendance_percent">71-80</label>
                                            <input type="radio" value ="71-80"  name="attendance_percent" id="attendance_percent"><br>
                                            <label class="label-format" for="attendance_percent">81-90</label>
                                            <input type="radio" value ="81-90"  name="attendance_percent" id="attendance_percent">
                                            <label class="label-format" for="attendance_percent">91-100</label>
                                            <input type="radio" value ="91-100"  name="attendance_percent" id="attendance_percent"><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="three-container">
                            <div class="minor-4">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">Centre/Department</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <label class="label-format" for="center_department">Department</label>
                                            <input type="radio" value ="Department"  name="center_department" id="center_department"><br>
                                            <label class="label-format" for="center_department">Center</label>
                                            <input type="radio" value ="Center"  name="center_department" id="center_department">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class=" minor-5">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">Semester</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <ol type="I">
                                                <label class="label-format" for="semester">I</label>
                                                <input type="radio" value ="1"  name="semester" id="semester">
                                                <label class="label-format" for="semester">II</label>
                                                <input type="radio" value ="2"  name="semester" id="semester"><br>
                                                <label class="label-format" for="semester">III</label>
                                                <input type="radio" value ="3"  name="semester" id="semester">
                                                <label class="label-format" for="semester">IV</label>
                                                <input type="radio" value ="4"  name="semester" id="semester"><br>
                                                <label class="label-format" for="semester">V</label>
                                                <input type="radio" value ="5"  name="semester" id="semester">
                                                <label class="label-format" for="semester">VI</label>
                                                <input type="radio" value ="6"  name="semester" id="semester"><br>
                                                <label class="label-format" for="semester">VII</label>
                                                <input type="radio" value ="7"  name="semester" id="semester">
                                                <label class="label-format" for="semester">VIII</label>
                                                <input type="radio" value ="8"  name="semester" id="semester"><br>
                                                <label class="label-format" for="semester">IX</label>
                                                <input type="radio" value ="9"  name="semester" id="semester">
                                                <label class="label-format" for="semester">X</label>
                                                <input type="radio" value ="10"  name="semester" id="semester"><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="minor-6">
                                <table class="tab-1">
                                    <tr class="tab-1-tr">
                                        <th class="tab-1-th">Faculty</th>
                                    </tr>
                                    <tr>
                                        <td class="tab-1-td">
                                            <label class="label-format" for=faculty>FNS</label><input type="radio" value ="FNS" 
                                                name=faculty id=faculty><label for=faculty>FHL</label><input
                                                type="radio" value ="FHL"  name=faculty id=faculty><label
                                                for=faculty>FET</label><input type="radio" value ="FET"  name=faculty
                                                id=faculty><br><label for=faculty>FOD</label><input type="radio" value ="FOD" 
                                                name=faculty id=faculty><label for=faculty>FFA</label><input
                                                type="radio" value ="FFA"  name=faculty id=faculty><label
                                                for=faculty>FSS</label><input type="radio" value ="FSS"  name=faculty
                                                id=faculty><br><label for=faculty>FED</label><input type="radio" value ="FED" 
                                                name=faculty id=faculty><label for=faculty>FAE</label><input
                                                type="radio" value ="FAE"  name=faculty id=faculty><label
                                                for=faculty>FLAW</label><input type="radio" value ="FLAW"  name=faculty id=faculty><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="major-1 submajor-1 minor-1">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's Ability to bring Conceptual Clarity and thinking.
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="conceptual_clarity" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-2">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's communication skills</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="communication_skill" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-3">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's ability for explaining areas of confusion</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="confusion_area" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-4">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's guidance after class hours</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="guidance" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-5">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">completion and coverage of syllabus</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="syllabus_coverage" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-6">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's ability to provide motivation</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="motivation" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-7">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's regularity and punctuality</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="punctuality" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-8">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's ability theory with practical examination</th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="theory_p" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="major-1 submajor-1 minor-9">
                            <table class="tab-2">
                                <tr class="tab-2-tr">
                                    <th class="tab-2-th">Teacher's Computer/IT skills/th>
                                </tr>
                                <tr>
                                    <td class="tab-2-td">
                                        <input type="hidden" name="it_skill" value="">
                                        <input class="circular-button btn" type="button" class="btn" value="a">
                                        <input class="circular-button btn" type="button" class="btn" value="b">
                                        <input class="circular-button btn" type="button" class="btn" value="c">
                                        <input class="circular-button btn" type="button" class="btn" value="d">
                                        <input class="circular-button btn" type="button" class="btn" value="e">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="submajor-2">
                        <pre>You are requested to give your frank and objective opinion,
by ticking the appropriate choice, about the concerned
teacher on under mentioned indices for quality Evaluation,
Your response will be kept confidential.
<b>A: Excellent, B: Good, C: Average, D:Poor, E: Very Poor</b>
                </pre>
                        <div class="submajor-2-flex">
                            <div class="containers">
                                <p> <b>Wrong Method</b></p>
                                <img src="../Images/wrong_method.jpg" alt="wrong-methods" width="110px">
                            </div>
                            <div class="containers">
                                <p><b>Correct Method</b></p>
                                <img src="../Images/correct_method.png" alt="correct-methods" width="110px">
                            </div>
                        </div>
                        <div class="submajor-2-flex">
                            <div class="submajor-2-minor">
                                <div class="minor-1">
                                    <table class="date-tab" style="height: 275px; width: 196px " ;>
                                        <tr>
                                            <th>Date</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="submajor-3-flex">
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="D1" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="D2" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="M1" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button"= class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="M2" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="Y1" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="Y2" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="Y3" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                    <div class="table-div">
                                                        <div class="empty-box"><input type="hidden" name="Y4" value=""><p style = "margin:0;"></p></div>
                                                        <input type="button" class="btn" value="0">
                                                        <input type="button" class="btn" value="1">
                                                        <input type="button" class="btn" value="2">
                                                        <input type="button" class="btn" value="3">
                                                        <input type="button" class="btn" value="4">
                                                        <input type="button" class="btn" value="5">
                                                        <input type="button" class="btn" value="6">
                                                        <input type="button" class="btn" value="7">
                                                        <input type="button" class="btn" value="8">
                                                        <input type="button" class="btn" value="9">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="minor-3">
                                    <table class="tab-2" style="width: 196px; margin:0" ;>
                                        <tr class="tab-1-tr">
                                            <th class="tab-1-th">Does sylllabus convey the excitement and intrigue?</th>
                                        </tr>
                                        <tr>
                                            <td class="tab-1-td">
                                                <label class="label-format" for="yes">Yes</label>
                                                <input type="radio" value ="1"  name="excitement" id="yes">
                                                <label class="label-format" for="no">No</label>
                                                <input type="radio" value ="0"  name="excitement" id="no">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="minor-4">
                                    <table class="tab-2" style="width: 196px; margin:0" ;>
                                        <tr class="tab-1-tr">
                                            <th class="tab-1-th">Results/feedback of tests/assigment declared within two weeks?</th>
                                        </tr>
                                        <tr>
                                            <td class="tab-1-td">
                                                <label class="label-format" for="yes">Yes</label>
                                                <input type="radio" value ="1"  name="result_time" id="yes">
                                                <label class="label-format" for="no">No</label>
                                                <input type="radio" value ="0"  name="result_time" id="no">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="minor-5">
                                    <table class="tab-2" style="width: 196px; margin:0" ;>
                                        <tr class="tab-1-tr">
                                            <th class="tab-1-th">Would you recommend him/her to teach the same paper to juniors</th>
                                        </tr>
                                        <tr>
                                            <td class="tab-1-td">
                                                <label class="label-format" for="yes">Yes</label>
                                                <input type="radio" value ="1"  name="recomment_jnr" id="yes">
                                                <label class="label-format" for="no">No</label>
                                                <input type="radio" value ="0"  name="recommend_jnr" id="no">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="minor-6">
                                    <table class="tab-2" style="width: 196px; margin:0" ;>
                                        <tr class="tab-1-tr">
                                            <th class="tab-1-th">Would you recommend him/her to teach you any other paper</th>
                                        </tr>
                                        <tr>
                                            <td class="tab-1-td">
                                                <label class="label-format" for="yes">Yes</label>
                                                <input type="radio" value ="1"  name="other_paper" id="yes">
                                                <label class="label-format" for="no">No</label>
                                                <input type="radio" value ="0"  name="other_paper" id="no">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="submajor-2-minor">
                                <div class="minor2">
                                    <table class="date-tab" style="height: 275px; width: 152px " ;>
                                        <tr>
                                           <th>Paper code</th>
                                        </tr>
                                        <tr>
                                           <td>
                                              <div class="submajor-3-flex">
                                                 <div class="table-div">
                                                    <div class="empty-box"><input type="hidden" name="PC1" value=""><p style = "margin:0;"></p></div>
                                                    <input type="button" class="btn" value="A">
                                                    <input type="button" class="btn" value="B">
                                                    <input type="button" class="btn" value="C">
                                                    <input type="button" class="btn" value="D">
                                                    <input type="button" class="btn" value="E">
                                                    <input type="button" class="btn" value="F">
                                                    <input type="button" class="btn" value="G">
                                                    <input type="button" class="btn" value="H">
                                                    <input type="button" class="btn" value="I">
                                                    <input type="button" class="btn" value="J">
                                                    <input type="button" class="btn" value="K">
                                                    <input type="button" class="btn" value="L">
                                                    <input type="button" class="btn" value="M">
                                                    <input type="button" class="btn" value="N">
                                                    <input type="button" class="btn" value="O">
                                                    <input type="button" class="btn" value="P">
                                                    <input type="button" class="btn" value="Q">
                                                    <input type="button" class="btn" value="R">
                                                    <input type="button" class="btn" value="S">
                                                    <input type="button" class="btn" value="T">
                                                    <input type="button" class="btn" value="U">
                                                    <input type="button" class="btn" value="V">
                                                    <input type="button" class="btn" value="W">
                                                    <input type="button" class="btn" value="X">
                                                    <input type="button" class="btn" value="Y">
                                                    <input type="button" class="btn" value="Z">
                                                 </div>
                                                 <div class="table-div">
                                                    <div class="empty-box"><input type="hidden" name="PC2" value=""><p style = "margin:0;"></p></div>
                                                    <input type="button" class="btn" value="A">
                                                    <input type="button" class="btn" value="B">
                                                    <input type="button" class="btn" value="C">
                                                    <input type="button" class="btn" value="D">
                                                    <input type="button" class="btn" value="E">
                                                    <input type="button" class="btn" value="F">
                                                    <input type="button" class="btn" value="G">
                                                    <input type="button" class="btn" value="H">
                                                    <input type="button" class="btn" value="I">
                                                    <input type="button" class="btn" value="J">
                                                    <input type="button" class="btn" value="K">
                                                    <input type="button" class="btn" value="L">
                                                    <input type="button" class="btn" value="M">
                                                    <input type="button" class="btn" value="N">
                                                    <input type="button" class="btn" value="O">
                                                    <input type="button" class="btn" value="P">
                                                    <input type="button" class="btn" value="Q">
                                                    <input type="button" class="btn" value="R">
                                                    <input type="button" class="btn" value="S">
                                                    <input type="button" class="btn" value="T">
                                                    <input type="button" class="btn" value="U">
                                                    <input type="button" class="btn" value="V">
                                                    <input type="button" class="btn" value="W">
                                                    <input type="button" class="btn" value="X">
                                                    <input type="button" class="btn" value="Y">
                                                    <input type="button" class="btn" value="Z">
                                                 </div>
                                                 <div class="table-div">
                                                    <div class="empty-box"><input type="hidden" name="PC3" value=""><p style = "margin:0;"></p></div>
                                                    <input type="button" class="btn" value="A">
                                                    <input type="button" class="btn" value="B">
                                                    <input type="button" class="btn" value="C">
                                                    <input type="button" class="btn" value="D">
                                                    <input type="button" class="btn" value="E">
                                                    <input type="button" class="btn" value="F">
                                                    <input type="button" class="btn" value="G">
                                                    <input type="button" class="btn" value="H">
                                                    <input type="button" class="btn" value="I">
                                                    <input type="button" class="btn" value="J">
                                                    <input type="button" class="btn" value="K">
                                                    <input type="button" class="btn" value="L">
                                                    <input type="button" class="btn" value="M">
                                                    <input type="button" class="btn" value="N">
                                                    <input type="button" class="btn" value="O">
                                                    <input type="button" class="btn" value="P">
                                                    <input type="button" class="btn" value="Q">
                                                    <input type="button" class="btn" value="R">
                                                    <input type="button" class="btn" value="S">
                                                    <input type="button" class="btn" value="T">
                                                    <input type="button" class="btn" value="U">
                                                    <input type="button" class="btn" value="V">
                                                    <input type="button" class="btn" value="W">
                                                    <input type="button" class="btn" value="X">
                                                    <input type="button" class="btn" value="Y">
                                                    <input type="button" class="btn" value="Z">
                                                 </div>
                                                 <div class="table-div">
                                                    <div class="empty-box"><input type="hidden" name="PC4" value=""><p style = "margin:0;"></p></div>
                                                    <input type="button" class="btn" value="0">
                                                    <input type="button" class="btn" value="1">
                                                    <input type="button" class="btn" value="2">
                                                    <input type="button" class="btn" value="3">
                                                    <input type="button" class="btn" value="4">
                                                    <input type="button" class="btn" value="5">
                                                    <input type="button" class="btn" value="6">
                                                    <input type="button" class="btn" value="7">
                                                    <input type="button" class="btn" value="8">
                                                    <input type="button" class="btn" value="9">
                                                 </div>
                                                 <div class="table-div">
                                                    <div class="empty-box"><input type="hidden" name="PC5" value=""><p style = "margin:0;"></p></div>
                                                    <input type="button" class="btn" value="0">
                                                    <input type="button" class="btn" value="1">
                                                    <input type="button" class="btn" value="2">
                                                    <input type="button" class="btn" value="3">
                                                    <input type="button" class="btn" value="4">
                                                    <input type="button" class="btn" value="5">
                                                    <input type="button" class="btn" value="6">
                                                    <input type="button" class="btn" value="7">
                                                    <input type="button" class="btn" value="8">
                                                    <input type="button" class="btn" value="9">
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>
                                        </table>
                                </div>
                                <div class="minor7">
                                    <div class="minor-7">
                                        <table class="tab-2" style="width: 196px; margin:0" ;>
                                            <tr class="tab-1-tr">
                                                <th class="tab-1-th">Adequate number of assignment and cases given</th>
                                            </tr>
                                            <tr>
                                                <td class="tab-1-td">
                                                    <label class="label-format" for="yes">Yes</label>
                                                    <input type="radio" value ="1"  name="no_assignment" id="yes">
                                                    <label class="label-format" for="no">No</label>
                                                    <input type="radio" value ="0"  name="other_paper" id="no">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="major-2">
                    <div class="submajor-3-flex">
                        <div class="minor-1">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Suggested refrences or books</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="books">Need Improvement</label>
                                        <input type="radio" value ="0"  name="books" id="books">
                                        <label class="label-format" for="books">Good</label>
                                        <input type="radio" value ="1"  name="books" id="books">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-2">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Sufficient practicals conducted in labs</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="practical_lab">Need Improvement</label>
                                        <input type="radio" value ="0" name="practical_lab" id="practical_lab">
                                        <label class="label-format" for="practical_lab">Good</label>
                                        <input type="radio" value = "1" name="practical_lab" id="practical_lab">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-3">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Relevance of this subject with practical or lab works</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="prc_relevance">Need Improvement</label>
                                        <input type="radio" value ="0" name="prc_relevance" id="prc_relevance">
                                        <label class="label-format" for="prc_relevance">Good</label>
                                        <input type="radio" value = "1" name="prc_relevance" id="prc_relevance">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="submajor-3-flex">
                        <div class="minor-4">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Extent of syllabus coverage</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="extent_syllabus">Need Improvement</label>
                                        <input type="radio" value ="0" name="extent_syllabus" id="extent_syllabus">
                                        <label class="label-format" for="extent_syllabus">Good</label>
                                        <input type="radio" value = "1" name="extent_syllabus" id="extent_syllabus">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-5">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Fulfillment of objectives</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="obj_fullfillment">Need Improvement</label>
                                        <input type="radio" value ="0" name="obj_fullfillment" id="obj_fullfillment">
                                        <label class="label-format" for="obj_fullfillment">Good</label>
                                        <input type="radio" value = "1" name="obj_fullfillment" id="obj_fullfillment">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-6">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Fundamentals coverage</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="f_coverage">Need Improvement</label>
                                        <input type="radio" value ="0" name="f_coverage" id="f_coverage">
                                        <label class="label-format" for="f_coverage">Good</label>
                                        <input type="radio" value = "1" name="f_coverage" id="f_coverage">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="submajor-3-flex">
                        <div class="minor-7">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-1</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks1">Does teacher allow to ask
                                            question?</label>
                                        <input type="radio" value ="1"  name="remarks1" id="remarks1">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-8">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-2</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks2">Is teacher friendly in
                                            class?</label>
                                        <input type="radio" value ="1"  name="remarks2" id="remarks2">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-9">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-3</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks3">Would you recommend teacher for
                                            any
                                            reward?</label>
                                        <input type="radio" value ="1"  name="remarks3" id="remarks3">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="submajor-3-flex">
                        <div class="minor-10">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-4</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks4">Extra time given to weak
                                            students?</label>
                                        <input type="radio" value ="1"  name="remarks4" id="remarks4">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-11">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-5</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks5">Regular practicals
                                            Conducted?</label>
                                        <input type="radio" value ="1"  name="remarks5" id="remarks5">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="minor-12">
                            <table class="tab-3">
                                <tr class="tab-3-tr">
                                    <th class="tab-3-th">Remarks-6</th>
                                </tr>
                                <tr class="tab-3-tr">
                                    <td class="tab-3-td">
                                        <label class="label-format" for="remarks6">One to one interactions allowed
                                            in
                                            class?</label>
                                        <input type="radio" value ="1"  name="remarks6" id="remarks6">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="major-3">
                    <textarea name="message" id="message" cols="30" rows="10" style="width: 100%; height: 80px;"
                        placeholder="Remark:"></textarea>
                </div>
                <div class="major-4">
                    <button class="submit" type="submit">Submit your Feedback</button>
                </div>
            </div>
        </form>
    </main>
</body>
<script src="../JS/feedback-form-2.js"></script>
</html>
