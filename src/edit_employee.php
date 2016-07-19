<?php
require 'include.php';
require 'EmployeeClass.php';
include 'TemplateClass.php';
$id=$_REQUEST['q'];
$Employee = new EmployeeClass();
$row = $Employee->editEmployees($id);
//$query="select * from admin where id='".$id."'";
//$result=mysqli_query($con,$query);
//$row=mysqli_fetch_array($result);
include "header.php";
?>
<body>
    <form action="edit_employee_action.php" method="post">

    <h1>Edit User Details</h1>

    <fieldset>
        <legend> Basic Information</legend><br>
        
        <input type="hidden" name="id" required value="<?php echo $row['id']?>">
      
        <label for="email">Email:</label>
        <input type="email" id="mail" name="email" readonly="" required value="<?php echo $row['email'];  ?>">
        
         <label for="template">Select Template :</label>
        <select id="template" name="template_id" required>
            <option value="">*****Select*****</option>
            <?php $Template = new TemplateClass();
                  $templates = $Template ->listingTemplates();
                  
            foreach ($templates as $template) { ?>
            <option value="<?=$template['id']?>" <?php echo ($row['template_id']== $template['id']) ? 'selected' :'';?>><?= $template['template_name']?></option>
            <?php } ?>
        </select>
        
         <label for="name">First Name:</label>
        <input type="text" id="name" name="full_name" placeholder="First Name" required value="<?php echo $row['full_name'] ?>" >
        
        <label for="code">Designation:</label>
        <input type="text" id="code" name="designation" placeholder="Designation" required value="<?= $row['designation'] ?>">
        
        <label for="number">Desk Number:</label>
        <input type="number" id="phone" name="desk_number" placeholder="Desk Number" required value="<?= $row['desk_number'] ?>">

        <label for="number">Mobile Number:</label>
        <input type="number" id="phone" name="mobile_number" placeholder="Mobile Number" value="<?= $row['mobile_number'] ?>">
        
         <label for="number">Fax:</label>
        <input type="number" id="fax" name="fax" required placeholder="Fax Number" required value="<?= $row['fax'] ?>">
        
         
    </fieldset>    
    <button type="submit">Submit</button>
    
</form>

</body>