<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$school_id = $_GET['school_id'];
	$school_data =  $obj->getSingleShool($school_id);
	$school_name = $school_data['school_name'];
	$student_class = $_GET['std'];
	$student_division = $_GET['division'];
	$term = $_GET['term'];
	
	$result = $obj->getStudentBySchoolIdTermStdDivision($school_id,$student_class,$student_division,$term);
	//print_r ($result);
?>
<script>
function deletemultiple()
{
	var inputs = document.getElementsByTagName('input'); 

   for(var i =0; i<inputs.length; i++) {
     if (inputs[i].type == 'checkbox' && inputs[i].name.indexOf('pay') === 0) { 
       inputs[i].checked = source.checked;
     }
   }
}
</script>
<table align="center" border="2">
<form action="#" method="post">
	<tr>
    	<td colspan="5" align="center">
        	<h1>School : <?php echo $school_name;?></h1>
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center">
        	<h2>Standard : <?php echo $student_class;?>
            	-
                <?php echo $student_division;?>
            </h2>
        </td>
    </tr>
    <tr>
    	<td colspan="5">
        	<a href="manage_students.php?school_id=<?php echo $school_id;?>&std=<?php echo $student_class;?>&division=<?php echo $student_division;?>&term=<?php echo $term;?>&add_student=true">
            	Add Student
            </a>
        </td>
    </tr>
	<tr>
    	<td>Roll No.</td>
        <td>Name</td>
        <td>Size</td>
        <td>Edit</td>
        <td>Delete
        	<input type='checkbox' onClick='toggle(this)' />
        </td>
    </tr>
    <?php
	foreach($result as $key => $value)
	{
	?>
    <tr>
    	<td><?php echo $value[1];?></td>
        <td><?php echo $value[2];?></td>
        <td><?php echo $value[6];?></td>
        <td>
        <a href="edit_student.php?id=<?php echo $value[0];?>&school_name=<?php echo $school_name;?>&term=<?php echo $value[7];?>">
        Edit</td>
        <td>
     <?php
	 /*   <input type="checkbox" name="delstu[]" id="delstu[]" value="<?php echo $value[0];?>" />
	 */?>
        
        <input type='checkbox' id='checkall' name='pay[]' value='<?php echo $row['vnum'];?>' />
        </td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="5" align="right">
        	<input type="submit" name="delete" value="Delete Selected" />
        </td>
    </tr>
</table>
<?php
if(isset($_POST['delete']))
{
	$selected = $_POST['delstu'];
	$student_list = implode(",",$selected);
	$student_list;
	$url = "manage_students.php?school_id=".$school_id."&std=".$student_class."&division=".$student_division."&term=".$term;
	
	$query = "INSERT INTO students_bk select * from student_details
			 where id IN ($student_list)
			 ";
	$dquery = "DELETE from  student_details where id IN ($student_list)";
	
	$bkstatus = $obj->query($query);
	if($bkstatus)
	{
		$dstatus = $obj->query($dquery);
		if($dstatus)
		{
		?>
        <script>
			window.location.assign('<?php echo $url;?>');
		</script>
        <?php
		}
	}
	
}
?>
<?php
if(isset($_GET['add_student']))
{
?>
<table align="center" border="2">
	<tr>
    	<td align="right">
        	Roll Number :
        </td>
        <td>
        	<input type="text" name="roll" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        	Student Name :
        </td>
        <td>
        	<input type="text" name="name" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        	Standard :
        </td>
        <td>
        	<input type="text" name="std1" value="<?php echo $student_class;?>" disabled="disabled" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        	Division :
        </td>
        <td>
        	<input type="text" name="div1" value="<?php echo $student_division;?>" disabled="disabled" />
        </td>
    </tr>
    
     <tr>
    	<td align="right">
        	Gender :
        </td>
        <td>
        	<select name="gender">
            	<option value="Male"> Boy </option>
                <option value="Female"> Girl  </option>
            </select>
        </td>
    </tr>
    
     <tr>
    	<td align="right">
        	Size :
        </td>
        <td>
        	<select name="size">
            	<option> 24 </option>
               <option> 26 </option>
               <option> 28 </option>
               <option> 30 </option>
               <option> 32 </option>
               <option> 34 </option>
               <option> 36 </option>
               <option> 38 </option>
               <option> 40 </option>
               <option> 42 </option>
               <option> 44 </option>
               <option> - </option>
            </select>
        </td>
    </tr>
    
     <tr>
    	<td align="right">
        	Term :
        </td>
        <td>
        	<input type="text" name="term1" value="<?php echo $term;?>" disabled="disabled" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2" align="center">
        	<input type="hidden" name="std" value="<?php echo $student_class;?>"  />
            <input type="hidden" name="division" value="<?php echo $student_division;?>"  />
            <input type="hidden" name="school_id" value="<?php echo $school_id;?>"  />
            <input type="hidden" name="term" value="<?php echo $term;?>"  />
            <input type="submit" name="save" value="Save Student" />
        </td>	
    </tr>
</table>
<?php
}
?>

<?php
if(isset($_POST['save']))
{

$data = $_POST;
$sr = $data['roll'];
$school_id = $data['school_id'];
$name = $data['name'];
$std = $data['std'];
$division = $data['division'];
$gender = $data['gender'];
$size = $data['size'];
$term = $data['term'];
$url = "manage_students.php?school_id=".$school_id."&std=".$student_class."&division=".$student_division."&term=".$term;
	
$savequery = "INSERT INTO student_details
				value
				('',
				
				'$school_id',
				'$sr',
				'$name',
				'$std',
				'$division',
				'$gender',
				'$size',
				'$term',
				'P',
				'Admin',
				NOW()
				)
			 ";
	$status  = $obj->query($savequery);
	if($status)
		{
		?>
        <script>
			window.location.assign('<?php echo $url;?>');
		</script>
        <?php
		}
}
?>