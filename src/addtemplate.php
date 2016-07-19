<?php

include 'header.php';
include 'TemplateClass.php';

if (!empty($_POST)){
    
    $temp_name = ucwords(trim($_POST['template_name']));
    $temp_design = addslashes(trim($_POST['design']));
    $status = $_POST['status'];
    $created_by = $_SESSION['User']['id'];
    $create_time = date(DATE_ATOM);
    
    $data = array('template_name' => $temp_name, 'design' => $temp_design, 'status' => $status, 'created_by' => $created_by,'created' => $create_time );
    
    $Template = new TemplateClass;
    $Template->addTemplate($data);
   //header("location:templates.php");
}

?>
<html>
    <body>
    <center>
        <h1>&nbsp;</h1>
        <h2>Template</h2>
        <h1>&nbsp;</h1>
        
    </center>
    <span>    company Name : Iron Systems</span>
    <br>Address : Sector 62, noida
    <br>Phone :000000
    <br>Fax : 0000000
    <form action="addtemplate.php" method="post">
            <dl>Template Name</dl>
            <dt><input type ="text" name ="template_name" placeholder="Template Name"></dt>
            <dl>Template (Please enter html templates)</dl>
            <div class="wdm_card_container">                
                &lt;body&gt;
                
                <textarea name="design" rows="11" cols="110">
                    
                </textarea>
                &lt;&#47;body&gt;
                
            </div>
            <br>
            <dl>Status :</dl>
            <dt><input type="radio" name="status" value="1" required >Enable 
            <input type="radio" name="status" value="0" required >Disable</dt>
             <br>
            <div>You need to use following source in template:
            <ul>
                <li> Full name : {{full_name}}</li>
                <li>Designation : {{designation}}</li>
                <li>Desk : {{desk_number}}</li>
                <li>Mobile(optional) : {{mobile_number}}</li> 
                <li>Fax: {{fax}}</li>
                <li>Company : {{company_number}}</li>
                
            </ul>
            </div>
            <div>
                <button type="submit" value="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" value="reset">Reset</button>
            </div>
        </form>
    </body>
        
</html>

<?php

/* 
<table border="1">
                     
        <tr>
             <th> NAME : </th>
            <td>{{first_name}}
                {{middle_name}}
            {{last_name}}</td>
        </tr>

         <tr>
            <th>DESIGNATION : </th>
            <td>{{designation}} </td>
        </tr>

        <tr>
            <th>E-MAIL :</th>
            <td>{{email}}</td>
        </tr>

         <tr>
            <th>PHONE : </th>
            <td>{{phone}}</td>
        </tr>

        <tr>
            <th> MOBILE :</th>
            <td> {{mobile}}</td>
        </tr>

        <tr>
            <th> FAX : </th>
            <td>{{fax}}</td>
        </tr>
       
</table>    
    
 */

