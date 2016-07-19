<?php

include 'header.php';
include 'EmployeeClass.php';
include 'TemplateClass.php';

$Template = new TemplateClass();
$template = $Template->getTemplateById($_REQUEST['template_id']);
if (!empty($_POST)) {
    $template_id = $_POST['template_id'];
    $fullName = ucwords(trim($_POST['full_name']));
    $designation = ucwords(trim($_POST['designation']));
    $email = trim($_POST['email']);
    $deskNumber = trim($_POST['desk_number']);
    $mobileNumber = trim($_POST['mobile_number']);
    $faxNumber = trim($_POST['fax']);
    $companyNumber = trim($_POST['company_number']);
 
//    echo 'jj'.$first_name;
//    if ($name == "") {
//        $error = 1;
//        if ($error == 1) {
//            header("location:add_users.php");
//        }
//    }
    
    $Employee = new EmployeeClass;
    $flag = $Employee->checkEmployee($email);

    if ($flag == 1) {
        header("location: add_employees.php");
    } else {
        
            $data = array('full_name' => $fullName,'designation' => $designation,
                'email' => $email,'desk_number' => $deskNumber, 'mobile_number' => $mobileNumber, 'fax' => $faxNumber,
                'company_number' => $companyNumber, 'template_id' => $template_id);

            $id = $Employee->addEmployee($data);
          header("location:/preview_template.php?q=".$id);
      //header("location:preview_template?q=".$id.".php");
    }

}


?>





<div class="stripViewer" id="slider1">
    <div id="slider1" class="csw">
        <div class="panelContainer">

            <div class="panel" title="Home">
                <div class="wrapper">

                    <form action=" " method="post" >

                        <h1>Add Your Details</h1>

                        <fieldset>
                           <?php //echo $template['design'] ?>
                                                        
                            <input type="hidden" name="template_id" value="<?php echo $template['id'] ?>"/>                                                      
                            <input type="text" id="name" name="full_name" placeholder="Full Name to be display" required>
                            <br/>
                            <input type="text" id="code" name="designation" placeholder="Designation" required >
                            <br/>
                            <input type="text" id="phone" name="desk_number" placeholder="Desk Number" required >
<br/>                           
                            <input type="text" id="phone" name="mobile_number" placeholder="Mobile Number" >
<br/>
                            <input type="text" id="phone" name="company_number" placeholder="Company Number" >
                            <br>
                            <input type="text" id="fax" name="fax" required placeholder="Fax Number" >
<br/>
                            
                                <?php
                                if (isset($_SESSION['email_error']) && !empty($_SESSION['email_error'])) {
                                    echo "<span style='color:red;'>" . $_SESSION['email_error'] . "</span>";
                                    unset($_SESSION['email_error']);
                                }
                                ?>
                          
                            <input type="email" id="email" name="email" placeholder="Email"  required >
                            <br><br><br>
                            <button type="submit">Submit</button>
                            
                        </fieldset>
                    </form>

                    <div class="cleaner_h40"></div>
                </div>
            </div>


        </div><!-- .panelContainer -->
    </div><!-- #slider1 -->
</div><!-- .slider-wrap -->


<?php include 'footer.php' ?>