<?php
require 'include.php';
include 'header.php';
include 'EmployeeClass.php';
include 'UserClass.php';
include 'TemplateClass.php';
?>
<center><br><br>
 
    <?php
    $Employee = new EmployeeClass();
    $employeeRows = $Employee->listingEmployees();
    $User = new UserClass;
    $Template = new TemplateClass();
    ?>    
        <table border='0'>
        <tr>
            <th colspan='9'><h2 style="text-align: center">View All Employees</h2></th>
        </tr>
        <tr style='color:#000;'>
            <th>Sr. no</th><th>Member Name</th><th>Designation</th><th>E-Mail</th>
            <th>Desk Number</th><th>Mobile Number</th><th>Fax Number</th><th>Company</th><th>Action</th>
        </tr>

        <?php
        $count = 1;
        foreach ($employeeRows as $employee) {
            ?>
            <tr style='color:#000;'>
                <td><?php echo $count; ?></td>
                <td><?php echo $employee['full_name']; ?></td>
                <td><?php echo $employee['designation']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['desk_number']; ?></td>
                <td><?php echo $employee['mobile_number']; ?></td>
                <td><?php echo $employee['fax']; ?></td>
                <td><?php echo $employee['company_id']; ?></td>
                <td> <div class='header'><?php echo "<a href='edit_employee.php?q=" . $employee['id'] . "'>Edit</a>  |  <a href='delete_employee.php?q=" . $employee['id'] . "'>Delete</a> |"
                                                    . "<a href='preview_template.php?q=" . $employee['id'] . "'>View Card</a>" ?></td>
            </tr>
            <?php
            $count++;
        }
        ?>
    </table>
    </center>
<?php
if (isset($_SESSION['flash']) && !empty($_SESSION['flash'])) {
    echo '<div class="flash-message"><span class="' . $_SESSION['flash']['type'] . '">' . $_SESSION['flash']['message'] . '</span></div>';
    unset($_SESSION['flash']);
}
?>    
<?php include 'footer.php';?>

