<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
	$id = $_REQUEST['id'];
	$schoolDetails = $object->getSingleShool($id);
?>
<table align="center" border="2">
<tr>
    	<td align="right" class="add_school">
        	School Name :
        </td>	
        <td>
        	<?php echo $schoolDetails['school_name'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Contact Person Name :
        </td>	
        <td>
        	<?php echo $schoolDetails['person_name'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Address :
        </td>	
        <td>
        	<?php echo $schoolDetails['address'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Contact Number :
        </td>	
        <td>
        	<?php echo $schoolDetails['contact_number'];?>
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	School Other Contact Number :
        </td>	
        <td>
        	<?php echo $schoolDetails['other_contact'];?>
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	Email Id :
        </td>	
        <td>
        	<?php echo $schoolDetails['emailid'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Fix Rate :
        </td>	
        <td>
        	<?php echo $schoolDetails['rate'];?>
        </td>	
    </tr>
</table>