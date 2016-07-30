<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
	$termList = $obj->getTermList();
?>

<style type="text/css">
table {border-collapse:collapse;}
table.lfdj {border-collapse:separate;}
td.k{
      border-style:dotted; 
      border-width:3px; 
      border-color:#000000; 
      padding: 10px;
}
td.show_chart  {border-style:solid; 
      border-width:3px; 
      border-color:#333333; 
      padding:10px;
}
</style>
<table align="center" border="2" width="80%">
<form action="#" method="POST">
	<tr>	
    	<td align="center" colspan="2">
        	<h2> School Chart</h2>
        </td>
    </tr>
    <tr>
    	<td align="right" width="50%" class="add_student">
        	Select School :
    	</td>
        <td>
        	<select name="school">
            <?php
				foreach($schoolList as $school)
				{
				?>
               	<option value="<?php echo $school['1'];?>">
                 <?php echo $school['1'];?> 
                 </option>
			    <?php
				}
			?>
            </select>
        </td>
   </tr>
   <tr>
    	<td align="right" width="50%" class="add_student">
        	Select Term :
    	</td>
        <td>
        	<select name="term">
            <?php
				foreach($termList as $term)
				{
				?>
               	<option value="<?php echo $term['0'];?>">
                 <?php echo $term['0'];?> 
                 </option>
			    <?php
				}
			?>
            </select>
        </td>
   </tr>
   <tr>
   		<td colspan="2" align="center">
        	<input type="submit" name="chart" value="Generate Chart" />
        </td>
   </tr>
</form>   
</table>
<?php
if(isset($_POST['chart']))
{
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$student_term);
	
	$sizeData = array("Pent - Size","24","26","28","30","32","34","36","38","40","42","44");
	$m22countStd1 = 0;
	
	foreach($student_data as $key => $value)
	{
		if($value[5] == "Male") {
		$shirt[] = $value;
		}
		if($value[3] == "1" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdOne1['24'] = $stdOne1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['24'] = $stdOne2['24'] + 1;
				}
				$stdOneQty['24'] = $stdOneQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdOne1['26'] = $stdOne1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['26'] = $stdOne2['26'] + 1;
				}
				$stdOneQty['26'] = $stdOneQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdOne1['28'] = $stdOne1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['28'] = $stdOne2['28'] + 1;
				}
				$stdOneQty['28'] = $stdOneQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdOne1['30'] = $stdOne1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['30'] = $stdOne2['30'] + 1;
				}
				$stdOneQty['30'] = $stdOneQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdOne1['32'] = $stdOne1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['32'] = $stdOne2['32'] + 1;
				}
				$stdOneQty['32'] = $stdOneQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdOne1['34'] = $stdOne1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['34'] = $stdOne2['34'] + 1;
				}
				$stdOneQty['34'] = $stdOneQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdOne1['36'] = $stdOne1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['36'] = $stdOne2['36'] + 1;
				}
				$stdOneQty['36'] = $stdOneQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdOne1['38'] = $stdOne1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['38'] = $stdOne2['38'] + 1;
				}
				$stdOneQty['38'] = $stdOneQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdOne1['40'] = $stdOne1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['40'] = $stdOne2['40'] + 1;
				}
				$stdOneQty['40'] = $stdOneQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdOne1['42'] = $stdOne1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['42'] = $stdOne2['42'] + 1;
				}
				$stdOneQty['42'] = $stdOneQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdOne1['44'] = $stdOne1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdOne2['44'] = $stdOne2['44'] + 1;
				}
				$stdOneQty['44'] = $stdOneQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "2" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdTwo1['24'] = $stdTwo1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['24'] = $stdTwo2['24'] + 1;
				}
				$stdTwoQty['24'] = $stdTwoQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdTwo1['26'] = $stdTwo1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['26'] = $stdTwo2['26'] + 1;
				}
				$stdTwoQty['26'] = $stdTwoQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdTwo1['28'] = $stdTwo1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['28'] = $stdTwo2['28'] + 1;
				}
				$stdTwoQty['28'] = $stdTwoQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdTwo1['30'] = $stdTwo1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['30'] = $stdTwo2['30'] + 1;
				}
				$stdTwoQty['30'] = $stdTwoQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdTwo1['32'] = $stdTwo1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['32'] = $stdTwo2['32'] + 1;
				}
				$stdTwoQty['32'] = $stdTwoQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdTwo1['34'] = $stdTwo1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['34'] = $stdTwo2['34'] + 1;
				}
				$stdTwoQty['34'] = $stdTwoQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdTwo1['36'] = $stdTwo1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['36'] = $stdTwo2['36'] + 1;
				}
				$stdTwoQty['36'] = $stdTwoQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdTwo1['38'] = $stdTwo1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['38'] = $stdTwo2['38'] + 1;
				}
				$stdTwoQty['38'] = $stdTwoQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdTwo1['40'] = $stdTwo1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['40'] = $stdTwo2['40'] + 1;
				}
				$stdTwoQty['40'] = $stdTwoQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdTwo1['42'] = $stdTwo1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['42'] = $stdTwo2['42'] + 1;
				}
				$stdTwoQty['42'] = $stdTwoQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdTwo1['44'] = $stdTwo1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwo2['44'] = $stdTwo2['44'] + 1;
				}
				$stdTwoQty['44'] = $stdTwoQty['44'] + $value[9];
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Male") {

			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdThree1['24'] = $stdThree1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['24'] = $stdThree2['24'] + 1;
				}
				$stdThreeQty['24'] = $stdThreeQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdThree1['26'] = $stdThree1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['26'] = $stdThree2['26'] + 1;
				}
				$stdThreeQty['26'] = $stdThreeQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdThree1['28'] = $stdThree1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['28'] = $stdThree2['28'] + 1;
				}
				$stdThreeQty['28'] = $stdThreeQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdThree1['30'] = $stdThree1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['30'] = $stdThree2['30'] + 1;
				}
				$stdThreeQty['30'] = $stdThreeQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdThree1['32'] = $stdThree1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['32'] = $stdThree2['32'] + 1;
				}
				$stdThreeQty['32'] = $stdThreeQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdThree1['34'] = $stdThree1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['34'] = $stdThree2['34'] + 1;
				}
				$stdThreeQty['34'] = $stdThreeQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdThree1['36'] = $stdThree1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['36'] = $stdThree2['36'] + 1;
				}
				$stdThreeQty['36'] = $stdThreeQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdThree1['38'] = $stdThree1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['38'] = $stdThree2['38'] + 1;
				}
				$stdThreeQty['38'] = $stdThreeQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdThree1['40'] = $stdThree1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['40'] = $stdThree2['40'] + 1;
				}
				$stdThreeQty['40'] = $stdThreeQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdThree1['42'] = $stdThree1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['42'] = $stdThree2['42'] + 1;
				}
				$stdThreeQty['42'] = $stdThreeQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdThree1['44'] = $stdThree1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdThree2['44'] = $stdThree2['44'] + 1;
				}
				$stdThreeQty['44'] = $stdThreeQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "4" and $value[5] == "Male") {
			
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdFour1['24'] = $stdFour1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['24'] = $stdFour2['24'] + 1;
				}
				$stdFour['24'] = $stdFour['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdFour1['26'] = $stdFour1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['26'] = $stdFour2['26'] + 1;
				}
				$stdFour['26'] = $stdFour['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdFour1['28'] = $stdFour1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['28'] = $stdFour2['28'] + 1;
				}
				$stdFour['28'] = $stdFour['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdFour1['30'] = $stdFour1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['30'] = $stdFour2['30'] + 1;
				}
				$stdFour['30'] = $stdFour['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdFour1['32'] = $stdFour1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['32'] = $stdFour2['32'] + 1;
				}
				$stdFour['32'] = $stdFour['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdFour1['34'] = $stdFour1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['34'] = $stdFour2['34'] + 1;
				}
				$stdFour['34'] = $stdFour['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdFour1['36'] = $stdFour1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['36'] = $stdFour2['36'] + 1;
				}
				$stdFour['36'] = $stdFour['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdFour1['38'] = $stdFour1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['38'] = $stdFour2['38'] + 1;
				}
				$stdFour['38'] = $stdFour['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdFour1['40'] = $stdFour1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['40'] = $stdFour2['40'] + 1;
				}
				$stdFour['40'] = $stdFour['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdFour1['42'] = $stdFour1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['42'] = $stdFour2['42'] + 1;
				}
				$stdFour['42'] = $stdFour['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdFour1['44'] = $stdFour1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFour2['44'] = $stdFour2['44'] + 1;
				}
				$stdFour['44'] = $stdFour['44'] + $value[9];
			}
		}
		
		if($value[3] == "5" and $value[5] == "Male") {
		
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdFive1['24'] = $stdFive1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['24'] = $stdFive2['24'] + 1;
				}
				$stdFiveQty['24'] = $stdFiveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdFive1['26'] = $stdFive1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['26'] = $stdFive2['26'] + 1;
				}
				$stdFiveQty['26'] = $stdFiveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdFive1['28'] = $stdFive1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['28'] = $stdFive2['28'] + 1;
				}
				$stdFiveQty['28'] = $stdFiveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdFive1['30'] = $stdFive1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['30'] = $stdFive2['30'] + 1;
				}
				$stdFiveQty['30'] = $stdFiveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdFive1['32'] = $stdFive1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['32'] = $stdFive2['32'] + 1;
				}
				$stdFiveQty['32'] = $stdFiveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdFive1['34'] = $stdFive1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['34'] = $stdFive2['34'] + 1;
				}
				$stdFiveQty['34'] = $stdFiveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdFive1['36'] = $stdFive1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['36'] = $stdFive2['36'] + 1;
				}
				$stdFiveQty['36'] = $stdFiveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdFive1['38'] = $stdFive1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['38'] = $stdFive2['38'] + 1;
				}
				$stdFiveQty['38'] = $stdFiveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdFive1['40'] = $stdFive1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['40'] = $stdFive2['40'] + 1;
				}
				$stdFiveQty['40'] = $stdFiveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdFive1['42'] = $stdFive1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['42'] = $stdFive2['42'] + 1;
				}
				$stdFiveQty['42'] = $stdFiveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdFive1['44'] = $stdFive1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdFive2['44'] = $stdFive2['44'] + 1;
				}
				$stdFiveQty['44'] = $stdFiveQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "6" and $value[5] == "Male") {

			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdSix1['24'] = $stdSix1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['24'] = $stdSix2['24'] + 1;
				}
				$stdSixQty['24'] = $stdSixQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdSix1['26'] = $stdSix1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['26'] = $stdSix2['26'] + 1;
				}
				$stdSixQty['26'] = $stdSixQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdSix1['28'] = $stdSix1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['28'] = $stdSix2['28'] + 1;
				}
				$stdSixQty['28'] = $stdSixQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdSix1['30'] = $stdSix1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['30'] = $stdSix2['30'] + 1;
				}
				$stdSixQty['30'] = $stdSixQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdSix1['32'] = $stdSix1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['32'] = $stdSix2['32'] + 1;
				}
				$stdSixQty['32'] = $stdSixQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdSix1['34'] = $stdSix1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['34'] = $stdSix2['34'] + 1;
				}
				$stdSixQty['34'] = $stdSixQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdSix1['36'] = $stdSix1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['36'] = $stdSix2['36'] + 1;
				}
				$stdSixQty['36'] = $stdSixQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdSix1['38'] = $stdSix1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['38'] = $stdSix2['38'] + 1;
				}
				$stdSixQty['38'] = $stdSixQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdSix1['40'] = $stdSix1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['40'] = $stdSix2['40'] + 1;
				}
				$stdSixQty['40'] = $stdSixQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdSix1['42'] = $stdSix1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['42'] = $stdSix2['42'] + 1;
				}
				$stdSixQty['42'] = $stdSixQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdSix1['44'] = $stdSix1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSix2['44'] = $stdSix2['44'] + 1;
				}
				$stdSixQty['44'] = $stdSixQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "7" and $value[5] == "Male") {
		
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdSeven1['24'] = $stdSeven1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['24'] = $stdSeven2['24'] + 1;
				}
				$stdSevenQty['24'] = $stdSevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdSeven1['26'] = $stdSeven1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['26'] = $stdSeven2['26'] + 1;
				}
				$stdSevenQty['26'] = $stdSevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdSeven1['28'] = $stdSeven1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['28'] = $stdSeven2['28'] + 1;
				}
				$stdSevenQty['28'] = $stdSevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdSeven1['30'] = $stdSeven1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['30'] = $stdSeven2['30'] + 1;
				}
				$stdSevenQty['30'] = $stdSevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdSeven1['32'] = $stdSeven1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['32'] = $stdSeven2['32'] + 1;
				}
				$stdSevenQty['32'] = $stdSevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdSeven1['34'] = $stdSeven1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['34'] = $stdSeven2['34'] + 1;
				}
				$stdSevenQty['34'] = $stdSevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdSeven1['36'] = $stdSeven1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['36'] = $stdSeven2['36'] + 1;
				}
				$stdSevenQty['36'] = $stdSevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdSeven1['38'] = $stdSeven1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['38'] = $stdSeven2['38'] + 1;
				}
				$stdSevenQty['38'] = $stdSevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdSeven1['40'] = $stdSeven1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['40'] = $stdSeven2['40'] + 1;
				}
				$stdSevenQty['40'] = $stdSevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdSeven1['42'] = $stdSeven1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['42'] = $stdSeven2['42'] + 1;
				}
				$stdSevenQty['42'] = $stdSevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdSeven1['44'] = $stdSeven1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdSeven2['44'] = $stdSeven2['44'] + 1;
				}
				$stdSevenQty['44'] = $stdSevenQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "8" and $value[5] == "Male") {
			
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdEight1['24'] = $stdEight1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['24'] = $stdEight2['24'] + 1;
				}
				$stdEightQty['24'] = $stdEightQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdEight1['26'] = $stdEight1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['26'] = $stdEight2['26'] + 1;
				}
				$stdEightQty['26'] = $stdEightQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdEight1['28'] = $stdEight1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['28'] = $stdEight2['28'] + 1;
				}
				$stdEightQty['28'] = $stdEightQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdEight1['30'] = $stdEight1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['30'] = $stdEight2['30'] + 1;
				}
				$stdEightQty['30'] = $stdEightQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdEight1['32'] = $stdEight1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['32'] = $stdEight2['32'] + 1;
				}
				$stdEightQty['32'] = $stdEightQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdEight1['34'] = $stdEight1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['34'] = $stdEight2['34'] + 1;
				}
				$stdEightQty['34'] = $stdEightQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{	
				if($value[9] == 1)
				{
					$stdEight1['36'] = $stdEight1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['36'] = $stdEight2['36'] + 1;
				}
				$stdEightQty['36'] = $stdEightQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdEight1['38'] = $stdEight1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['38'] = $stdEight2['38'] + 1;
				}
				$stdEightQty['38'] = $stdEightQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdEight1['40'] = $stdEight1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['40'] = $stdEight2['40'] + 1;
				}
				$stdEightQty['40'] = $stdEightQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdEight1['42'] = $stdEight1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['42'] = $stdEight2['42'] + 1;
				}
				$stdEightQty['42'] = $stdEightQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdEight1['44'] = $stdEight1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEight2['44'] = $stdEight2['44'] + 1;
				}
				$stdEightQty['44'] = $stdEightQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "9" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdNine1['24'] = $stdNine1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['24'] = $stdNine2['24'] + 1;
				}
				$stdNineQty['24'] = $stdNineQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdNine1['26'] = $stdNine1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['26'] = $stdNine2['26'] + 1;
				}
				$stdNineQty['26'] = $stdNineQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdNine1['28'] = $stdNine1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['28'] = $stdNine2['28'] + 1;
				}
				$stdNineQty['28'] = $stdNineQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdNine1['30'] = $stdNine1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['30'] = $stdNine2['30'] + 1;
				}
				$stdNineQty['30'] = $stdNineQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdNine1['32'] = $stdNine1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['32'] = $stdNine2['32'] + 1;
				}
				$stdNineQty['32'] = $stdNineQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdNine1['34'] = $stdNine1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['34'] = $stdNine2['34'] + 1;
				}
				$stdNineQty['34'] = $stdNineQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdNine1['36'] = $stdNine1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['36'] = $stdNine2['36'] + 1;
				}
				$stdNineQty['36'] = $stdNineQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdNine1['38'] = $stdNine1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['38'] = $stdNine2['38'] + 1;
				}
				$stdNineQty['38'] = $stdNineQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdNine1['40'] = $stdNine1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['40'] = $stdNine2['40'] + 1;
				}
				$stdNineQty['40'] = $stdNineQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdNine1['42'] = $stdNine1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['42'] = $stdNine2['42'] + 1;
				}
				$stdNineQty['42'] = $stdNineQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdNine1['44'] = $stdNine1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdNine2['44'] = $stdNine2['44'] + 1;
				}
				$stdNineQty['44'] = $stdNineQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "10" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdTen1['24'] = $stdTen1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['24'] = $stdTen2['24'] + 1;
				}
				$stdTenQty['24'] = $stdTenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdTen1['26'] = $stdTen1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['26'] = $stdTen2['26'] + 1;
				}
				$stdTenQty['26'] = $stdTenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdTen1['28'] = $stdTen1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['28'] = $stdTen2['28'] + 1;
				}
				$stdTenQty['28'] = $stdTenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdTen1['30'] = $stdTen1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['30'] = $stdTen2['30'] + 1;
				}
				$stdTenQty['30'] = $stdTenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdTen1['32'] = $stdTen1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['32'] = $stdTen2['32'] + 1;
				}
				$stdTenQty['32'] = $stdTenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdTen1['34'] = $stdTen1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['34'] = $stdTen2['34'] + 1;
				}
				$stdTenQty['34'] = $stdTenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdTen1['36'] = $stdTen1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['36'] = $stdTen2['36'] + 1;
				}
				$stdTenQty['36'] = $stdTenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdTen1['38'] = $stdTen1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['38'] = $stdTen2['38'] + 1;
				}
				$stdTenQty['38'] = $stdTenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdTen1['40'] = $stdTen1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['40'] = $stdTen2['40'] + 1;
				}
				$stdTenQty['40'] = $stdTenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdTen1['42'] = $stdTen1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['42'] = $stdTen2['42'] + 1;
				}
				$stdTenQty['42'] = $stdTenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdTen1['44'] = $stdTen1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTen2['44'] = $stdTen2['44'] + 1;
				}
				$stdTenQty['44'] = $stdTenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "11" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdEleven1['24'] = $stdEleven1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['24'] = $stdEleven2['24'] + 1;
				}
				$stdElevenQty['24'] = $stdElevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdEleven1['26'] = $stdEleven1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['26'] = $stdEleven2['26'] + 1;
				}
				$stdElevenQty['26'] = $stdElevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdEleven1['28'] = $stdEleven1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['28'] = $stdEleven2['28'] + 1;
				}
				$stdElevenQty['28'] = $stdElevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdEleven1['30'] = $stdEleven1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['30'] = $stdEleven2['30'] + 1;
				}
				$stdElevenQty['30'] = $stdElevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdEleven1['32'] = $stdEleven1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['32'] = $stdEleven2['32'] + 1;
				}
				$stdElevenQty['32'] = $stdElevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdEleven1['34'] = $stdEleven1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['34'] = $stdEleven2['34'] + 1;
				}
				$stdElevenQty['34'] = $stdElevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdEleven1['36'] = $stdEleven1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['36'] = $stdEleven2['36'] + 1;
				}
				$stdElevenQty['36'] = $stdElevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdEleven1['38'] = $stdEleven1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['38'] = $stdEleven2['38'] + 1;
				}
				$stdElevenQty['38'] = $stdElevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdEleven1['40'] = $stdEleven1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['40'] = $stdEleven2['40'] + 1;
				}
				$stdElevenQty['40'] = $stdElevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdEleven1['42'] = $stdEleven1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['42'] = $stdEleven2['42'] + 1;
				}
				$stdElevenQty['42'] = $stdElevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdEleven1['44'] = $stdEleven1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdEleven2['44'] = $stdEleven2['44'] + 1;
				}
				$stdElevenQty['44'] = $stdElevenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "12" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['24'] = $stdTwelve1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['24'] = $stdTwelve2['24'] + 1;
				}
				$stdTwelveQty['24'] = $stdTwelveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['26'] = $stdTwelve1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['26'] = $stdTwelve2['26'] + 1;
				}
				$stdTwelveQty['26'] = $stdTwelveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['28'] = $stdTwelve1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['28'] = $stdTwelve2['28'] + 1;
				}
				$stdTwelveQty['28'] = $stdTwelveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['30'] = $stdTwelve1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['30'] = $stdTwelve2['30'] + 1;
				}
				$stdTwelveQty['30'] = $stdTwelveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['32'] = $stdTwelve1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['32'] = $stdTwelve2['32'] + 1;
				}
				$stdTwelveQty['32'] = $stdTwelveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['34'] = $stdTwelve1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['34'] = $stdTwelve2['34'] + 1;
				}
				$stdTwelveQty['34'] = $stdTwelveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['36'] = $stdTwelve1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['36'] = $stdTwelve2['36'] + 1;
				}
				$stdTwelveQty['36'] = $stdTwelveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['38'] = $stdTwelve1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['38'] = $stdTwelve2['38'] + 1;
				}
				$stdTwelveQty['38'] = $stdTwelveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['40'] = $stdTwelve1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['40'] = $stdTwelve2['40'] + 1;
				}
				$stdTwelveQty['40'] = $stdTwelveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['42'] = $stdTwelve1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['42'] = $stdTwelve2['42'] + 1;
				}
				$stdTwelveQty['42'] = $stdTwelveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$stdTwelve1['44'] = $stdTwelve1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$stdTwelve2['44'] = $stdTwelve2['44'] + 1;
				}
				$stdTwelveQty['44'] = $stdTwelveQty['44'] + $value[9];
			}
		}
	}
	
?>

<?php
	$s20 = 0;
	$s22 = 0;
	$s24 = 0;
	$s26 = 0;
	$s28 = 0;
	$s30 = 0;
	$s32 = 0;
	$shirttotal  = 0;
	
	foreach($shirt as  $shirtvalue) {
	if($shirtvalue[6] > 22 ) {
		if($shirtvalue[6] == 24 or $shirtvalue[6] == 26 ) {
			$s20 = $s20 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
		}
		else if($shirtvalue[6] == 28  ) {
			$s22 = $s22 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
			
		}
		else if($shirtvalue[6] == 30) {
			$s24 = $s24 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
			
		}
		else if($shirtvalue[6] == 32 or $shirtvalue[6] == 34 ) {
			$s26 = $s26 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
			
		}
		else if($shirtvalue[6] == 36 ) {
			$s28 = $s28 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
		}
		else if($shirtvalue[6] == 38 ) {
			$s30 = $s30 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
		}
		else {
			$s32 = $s32 + $shirtvalue[9];
			$shirttotal = $shirttotal + $shirtvalue[9];
		}
		}
	}
?>
	
<?php
ob_start();	
?>
<table align="center" width="80%" border="2" style="border:thick; border-width:medium;margin-top:-20px;">
	<tr>
    	<td colspan="14" align="center">
        	<h2> School Name : <?php echo $school_name;?> </h2>
        </td>
    </tr>
    <tr>
        <td colspan="7">
        	<strong>Category : Boys</strong>
        </td>
		<td colspan="7" align="right">
        	<strong> Term : <?php echo $student_term;?></strong>
        </td>
    </tr>
	<?php
	$sr=0;
	foreach($sizeData as $charSize)
	{
		echo "<tr>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>".$sizeData[$sr]."</h3></td>";
		if($sr == 0) {
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-1</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-2</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-3</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-4</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-5</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-6</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-7</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-8</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-9</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-10</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-11</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-12</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Total</h3></td>";
		}
		else
		{
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdOne1[$sizeData[$sr]] ? "<strong>".$stdOne1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdOne2[$sizeData[$sr]] ? "<strong>".$stdOne2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countOne =  $stdOneQty[$sizeData[$sr]];
			if($countOne > 0)
			{ 
				echo "<strong>".$stdOneQty[$sizeData[$sr]]."</strong>";
				$msize22 = $msize22 + $stdOneQty[$sizeData[$sr]];
			}
			else
			{
				 echo "0";
			}
			echo "</td>";
		
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
				echo $stdTwo1[$sizeData[$sr]] ? "<strong>".$stdTwo1[$sizeData[$sr]]."</strong>" : "0" ;
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo $stdTwo2[$sizeData[$sr]] ? "<strong>".$stdTwo2[$sizeData[$sr]]."</strong>" : "0" ;
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				$countTwo = $stdTwoQty[$sizeData[$sr]];
				if($countTwo > 0) { 
					echo "<strong>".$countTwo."</strong>";
					$msize24 = $msize24 + $countTwo; 
				} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdThree1[$sizeData[$sr]] ? "<strong>".$stdThree1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdThree2[$sizeData[$sr]] ? "<strong>".$stdThree2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countThree = $stdThreeQty[$sizeData[$sr]];
			if($countThree > 0) 
			{
				echo "<strong>".$countThree."</strong>";
			$msize26 = $msize26 + $countThree; 
			} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdFour1[$sizeData[$sr]] ? "<strong>".$stdFour1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdFour2[$sizeData[$sr]] ? "<strong>".$stdFour2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countFour = $stdFourQty[$sizeData[$sr]];
			if($countFour > 0) { echo $countFour;
			$msize28 = $msize28 + $countFour; 
			} else { echo "0";}
			echo "</td class='show_chart'>";

			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdFive1[$sizeData[$sr]] ? "<strong>".$stdFive1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdFive2[$sizeData[$sr]] ? "<strong>".$stdFive2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countFive = $stdFiveQty[$sizeData[$sr]];
			if($countFive > 0) {
				 echo "<strong>".$countFive."</strong>";
			$msize30 = $msize30 + $countFive;
			} else { echo "0";}
			echo "</td>";
			
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdSix1[$sizeData[$sr]] ? "<strong>".$stdSix1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdSix2[$sizeData[$sr]] ? "<strong>".$stdSix2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countSix = $stdSixQty[$sizeData[$sr]];
			if($countSix > 0) { 
				echo "<strong>".$countSix."</strong>";
			$msize32 = $msize32 + $countSix;
			} else { echo "0";}
			echo "</td>";

			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdSeven1[$sizeData[$sr]] ? "<strong>".$stdSeven1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdSeven2[$sizeData[$sr]] ? "<strong>".$stdSeven2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countSeven = $stdSevenQty[$sizeData[$sr]];
			if($countSeven > 0) { 
				echo "<strong>".$countSeven."</strong>";
			$msize34 = $msize34 + $countSeven;
			} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdEight1[$sizeData[$sr]] ? "<strong>".$stdEight1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdEight2[$sizeData[$sr]] ? "<strong>".$stdEight2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countEight = $stdEightQty[$sizeData[$sr]];
			if($countEight > 0) { 
				echo "<strong>".$countEight."</strong>";
			$msize36 = $msize36 + $countEight;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdNine1[$sizeData[$sr]] ? "<strong>".$stdNine1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdNine2[$sizeData[$sr]] ? "<strong>".$stdNine2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countNine = $stdNineQty[$sizeData[$sr]];
			if($countNine > 0) { 
				echo "<strong>".$countNine."</strong>";
			$msize38 = $msize38 + $countNine;
			} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdTen1[$sizeData[$sr]] ? "<strong>".$stdTen1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdTen2[$sizeData[$sr]] ? "<strong>".$stdTen2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countTen = $stdTenQty[$sizeData[$sr]];
			if($countTen > 0) { 
				echo "<strong>".$countTen."</strong>";
			$msize40 = $msize40 + $countTen;
			} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdEleven1[$sizeData[$sr]] ? "<strong>".$stdEleven1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdEleven2[$sizeData[$sr]] ? "<strong>".$stdEleven2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countEleven = $stdElevenQty[$sizeData[$sr]];
			if($countEleven > 0) { 
				echo "<strong>".$countEleven."</strong>";
			$msize42 = $msize42 + $countEleven;
			} else { echo "0";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			echo $stdTwelve1[$sizeData[$sr]] ? "<strong>".$stdTwelve1[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $stdTwelve2[$sizeData[$sr]] ? "<strong>".$stdTwelve2[$sizeData[$sr]]."</strong>" : "0" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$countTwelve = $stdTwelveQty[$sizeData[$sr]];
			if($countTwelve > 0) { 
				echo "<strong>".$countTwelve."</strong>";
			$msize44 = $msize44 + $countTwelve;
			} else { echo "-";}
			echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		//echo "---Total--";
		$total = $countOne + $countTwo + $countThree + $countFour + $countFive + $countSix
				 + $countSeven + $countEight + $countNine + $countTen + $countEleven + $countTwelve;
		echo "<h3>";
		echo $total;
		echo "</h3>";
		
		}
		echo "</tr>";
	$sr++;
	}
	
	?>
    <tr>
	<td class='show_chart' align='center' style='border:1px solid black;'>
        <h2>Total</h2>
        </td>
    	<td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize22;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize24;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize26;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize28;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize30;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize32;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize34;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize36;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize38;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize40;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize42;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $msize44;?></h3>
        </td>
         <td class='show_chart' align='center' style='border:1px solid black;'>
        <h2>
        <?php echo $shirttotal;?>
      	</h2>
         	
         </td>
    </tr>
</table>

<!--Female Chart Generate-->
<?php
	$FsizeData = array("Salvar - Size","24","26","28","30","32","34","36","38","40","42","44");
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdOne1['24'] = $FstdOne1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['24'] = $FstdOne2['24'] + 1;
				}
				$FstdOneQty['24'] = $FstdOneQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdOne1['26'] = $FstdOne1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['26'] = $FstdOne2['26'] + 1;
				}
				$FstdOneQty['26'] = $FstdOneQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdOne1['28'] = $FstdOne1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['28'] = $FstdOne2['28'] + 1;
				}
				$FstdOneQty['28'] = $FstdOneQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdOne1['30'] = $FstdOne1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['30'] = $FstdOne2['30'] + 1;
				}
				$FstdOneQty['30'] = $FstdOneQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdOne1['32'] = $FstdOne1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['32'] = $FstdOne2['32'] + 1;
				}
				$FstdOneQty['32'] = $FstdOneQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdOne1['34'] = $FstdOne1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['34'] = $FstdOne2['34'] + 1;
				}
				$FstdOneQty['34'] = $FstdOneQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdOne1['36'] = $FstdOne1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['36'] = $FstdOne2['36'] + 1;
				}
				$FstdOneQty['36'] = $FstdOneQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdOne1['38'] = $FstdOne1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['38'] = $FstdOne2['38'] + 1;
				}
				$FstdOneQty['38'] = $FstdOneQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdOne1['40'] = $FstdOne1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['40'] = $FstdOne2['40'] + 1;
				}
				$FstdOneQty['40'] = $FstdOneQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdOne1['42'] = $FstdOne1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['42'] = $FstdOne2['42'] + 1;
				}
				$FstdOneQty['42'] = $FstdOneQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdOne1['44'] = $FstdOne1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdOne2['44'] = $FstdOne2['44'] + 1;
				}
				$FstdOneQty['44'] = $FstdOneQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "2" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['24'] = $FstdTwo1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['24'] = $FstdTwo2['24'] + 1;
				}
				$FstdTwoQty['24'] = $FstdTwoQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['26'] = $FstdTwo1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['26'] = $FstdTwo2['26'] + 1;
				}
				$FstdTwoQty['26'] = $FstdTwoQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['28'] = $FstdTwo1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['28'] = $FstdTwo2['28'] + 1;
				}
				$FstdTwoQty['28'] = $FstdTwoQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['30'] = $FstdTwo1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['30'] = $FstdTwo2['30'] + 1;
				}
				$FstdTwoQty['30'] = $FstdTwoQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['32'] = $FstdTwo1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['32'] = $FstdTwo2['32'] + 1;
				}
				$FstdTwoQty['32'] = $FstdTwoQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['34'] = $FstdTwo1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['34'] = $FstdTwo2['34'] + 1;
				}
				$FstdTwoQty['34'] = $FstdTwoQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['36'] = $FstdTwo1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['36'] = $FstdTwo2['36'] + 1;
				}
				$FstdTwoQty['36'] = $FstdTwoQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['38'] = $FstdTwo1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['38'] = $FstdTwo2['38'] + 1;
				}
				$FstdTwoQty['38'] = $FstdTwoQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['40'] = $FstdTwo1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['40'] = $FstdTwo2['40'] + 1;
				}
				$FstdTwoQty['40'] = $FstdTwoQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['42'] = $FstdTwo1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['42'] = $FstdTwo2['42'] + 1;
				}
				$FstdTwoQty['42'] = $FstdTwoQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdTwo1['44'] = $FstdTwo1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwo2['44'] = $FstdTwo2['44'] + 1;
				}
				$FstdTwoQty['44'] = $FstdTwoQty['44'] + $value[9];
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Female") {

			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdThree1['24'] = $FstdThree1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['24'] = $FstdThree2['24'] + 1;
				}
				$FstdThreeQty['24'] = $FstdThreeQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdThree1['26'] = $FstdThree1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['26'] = $FstdThree2['26'] + 1;
				}
				$FstdThreeQty['26'] = $FstdThreeQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdThree1['28'] = $FstdThree1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['28'] = $FstdThree2['28'] + 1;
				}
				$FstdThreeQty['28'] = $FstdThreeQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdThree1['30'] = $FstdThree1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['30'] = $FstdThree2['30'] + 1;
				}
				$FstdThreeQty['30'] = $FstdThreeQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdThree1['32'] = $FstdThree1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['32'] = $FstdThree2['32'] + 1;
				}
				$FstdThreeQty['32'] = $FstdThreeQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdThree1['34'] = $FstdThree1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['34'] = $FstdThree2['34'] + 1;
				}
				$FstdThreeQty['34'] = $FstdThreeQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdThree1['36'] = $FstdThree1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['36'] = $FstdThree2['36'] + 1;
				}
				$FstdThreeQty['36'] = $FstdThreeQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdThree1['38'] = $FstdThree1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['38'] = $FstdThree2['38'] + 1;
				}
				$FstdThreeQty['38'] = $FstdThreeQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdThree1['40'] = $FstdThree1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['40'] = $FstdThree2['40'] + 1;
				}
				$FstdThreeQty['40'] = $FstdThreeQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdThree1['42'] = $FstdThree1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['42'] = $FstdThree2['42'] + 1;
				}
				$FstdThreeQty['42'] = $FstdThreeQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdThree1['44'] = $FstdThree1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdThree2['44'] = $FstdThree2['44'] + 1;
				}
				$FstdThreeQty['44'] = $FstdThreeQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "4" and $value[5] == "Female") {
			
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdFour1['24'] = $FstdFour1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['24'] = $FstdFour2['24'] + 1;
				}
				$FstdFour['24'] = $FstdFour['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdFour1['26'] = $FstdFour1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['26'] = $FstdFour2['26'] + 1;
				}
				$FstdFour['26'] = $FstdFour['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdFour1['28'] = $FstdFour1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['28'] = $FstdFour2['28'] + 1;
				}
				$FstdFour['28'] = $FstdFour['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdFour1['30'] = $FstdFour1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['30'] = $FstdFour2['30'] + 1;
				}
				$FstdFour['30'] = $FstdFour['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdFour1['32'] = $FstdFour1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['32'] = $FstdFour2['32'] + 1;
				}
				$FstdFour['32'] = $FstdFour['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdFour1['34'] = $FstdFour1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['34'] = $FstdFour2['34'] + 1;
				}
				$FstdFour['34'] = $FstdFour['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdFour1['36'] = $FstdFour1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['36'] = $FstdFour2['36'] + 1;
				}
				$FstdFour['36'] = $FstdFour['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdFour1['38'] = $FstdFour1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['38'] = $FstdFour2['38'] + 1;
				}
				$FstdFour['38'] = $FstdFour['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdFour1['40'] = $FstdFour1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['40'] = $FstdFour2['40'] + 1;
				}
				$FstdFour['40'] = $FstdFour['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdFour1['42'] = $FstdFour1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['42'] = $FstdFour2['42'] + 1;
				}
				$FstdFour['42'] = $FstdFour['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdFour1['44'] = $FstdFour1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFour2['44'] = $FstdFour2['44'] + 1;
				}
				$FstdFour['44'] = $FstdFour['44'] + $value[9];
			}
		}
		
		if($value[3] == "5" and $value[5] == "Female") {
		
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdFive1['24'] = $FstdFive1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['24'] = $FstdFive2['24'] + 1;
				}
				$FstdFiveQty['24'] = $FstdFiveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdFive1['26'] = $FstdFive1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['26'] = $FstdFive2['26'] + 1;
				}
				$FstdFiveQty['26'] = $FstdFiveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdFive1['28'] = $FstdFive1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['28'] = $FstdFive2['28'] + 1;
				}
				$FstdFiveQty['28'] = $FstdFiveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdFive1['30'] = $FstdFive1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['30'] = $FstdFive2['30'] + 1;
				}
				$FstdFiveQty['30'] = $FstdFiveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdFive1['32'] = $FstdFive1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['32'] = $FstdFive2['32'] + 1;
				}
				$FstdFiveQty['32'] = $FstdFiveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdFive1['34'] = $FstdFive1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['34'] = $FstdFive2['34'] + 1;
				}
				$FstdFiveQty['34'] = $FstdFiveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdFive1['36'] = $FstdFive1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['36'] = $FstdFive2['36'] + 1;
				}
				$FstdFiveQty['36'] = $FstdFiveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdFive1['38'] = $FstdFive1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['38'] = $FstdFive2['38'] + 1;
				}
				$FstdFiveQty['38'] = $FstdFiveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdFive1['40'] = $FstdFive1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['40'] = $FstdFive2['40'] + 1;
				}
				$FstdFiveQty['40'] = $FstdFiveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdFive1['42'] = $FstdFive1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['42'] = $FstdFive2['42'] + 1;
				}
				$FstdFiveQty['42'] = $FstdFiveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdFive1['44'] = $FstdFive1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdFive2['44'] = $FstdFive2['44'] + 1;
				}
				$FstdFiveQty['44'] = $FstdFiveQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "6" and $value[5] == "Female") {

			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdSix1['24'] = $FstdSix1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['24'] = $FstdSix2['24'] + 1;
				}
				$FstdSixQty['24'] = $FstdSixQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdSix1['26'] = $FstdSix1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['26'] = $FstdSix2['26'] + 1;
				}
				$FstdSixQty['26'] = $FstdSixQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdSix1['28'] = $FstdSix1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['28'] = $FstdSix2['28'] + 1;
				}
				$FstdSixQty['28'] = $FstdSixQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdSix1['30'] = $FstdSix1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['30'] = $FstdSix2['30'] + 1;
				}
				$FstdSixQty['30'] = $FstdSixQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdSix1['32'] = $FstdSix1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['32'] = $FstdSix2['32'] + 1;
				}
				$FstdSixQty['32'] = $FstdSixQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdSix1['34'] = $FstdSix1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['34'] = $FstdSix2['34'] + 1;
				}
				$FstdSixQty['34'] = $FstdSixQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdSix1['36'] = $FstdSix1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['36'] = $FstdSix2['36'] + 1;
				}
				$FstdSixQty['36'] = $FstdSixQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdSix1['38'] = $FstdSix1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['38'] = $FstdSix2['38'] + 1;
				}
				$FstdSixQty['38'] = $FstdSixQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdSix1['40'] = $FstdSix1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['40'] = $FstdSix2['40'] + 1;
				}
				$FstdSixQty['40'] = $FstdSixQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdSix1['42'] = $FstdSix1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['42'] = $FstdSix2['42'] + 1;
				}
				$FstdSixQty['42'] = $FstdSixQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdSix1['44'] = $FstdSix1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSix2['44'] = $FstdSix2['44'] + 1;
				}
				$FstdSixQty['44'] = $FstdSixQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "7" and $value[5] == "Female") {
		
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['24'] = $FstdSeven1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['24'] = $FstdSeven2['24'] + 1;
				}
				$FstdSevenQty['24'] = $FstdSevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['26'] = $FstdSeven1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['26'] = $FstdSeven2['26'] + 1;
				}
				$FstdSevenQty['26'] = $FstdSevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['28'] = $FstdSeven1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['28'] = $FstdSeven2['28'] + 1;
				}
				$FstdSevenQty['28'] = $FstdSevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['30'] = $FstdSeven1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['30'] = $FstdSeven2['30'] + 1;
				}
				$FstdSevenQty['30'] = $FstdSevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['32'] = $FstdSeven1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['32'] = $FstdSeven2['32'] + 1;
				}
				$FstdSevenQty['32'] = $FstdSevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['34'] = $FstdSeven1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['34'] = $FstdSeven2['34'] + 1;
				}
				$FstdSevenQty['34'] = $FstdSevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['36'] = $FstdSeven1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['36'] = $FstdSeven2['36'] + 1;
				}
				$FstdSevenQty['36'] = $FstdSevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['38'] = $FstdSeven1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['38'] = $FstdSeven2['38'] + 1;
				}
				$FstdSevenQty['38'] = $FstdSevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['40'] = $FstdSeven1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['40'] = $FstdSeven2['40'] + 1;
				}
				$FstdSevenQty['40'] = $FstdSevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['42'] = $FstdSeven1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['42'] = $FstdSeven2['42'] + 1;
				}
				$FstdSevenQty['42'] = $FstdSevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdSeven1['44'] = $FstdSeven1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdSeven2['44'] = $FstdSeven2['44'] + 1;
				}
				$FstdSevenQty['44'] = $FstdSevenQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "8" and $value[5] == "Female") {
			
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdEight1['24'] = $FstdEight1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['24'] = $FstdEight2['24'] + 1;
				}
				$FstdEightQty['24'] = $FstdEightQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdEight1['26'] = $FstdEight1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['26'] = $FstdEight2['26'] + 1;
				}
				$FstdEightQty['26'] = $FstdEightQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdEight1['28'] = $FstdEight1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['28'] = $FstdEight2['28'] + 1;
				}
				$FstdEightQty['28'] = $FstdEightQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdEight1['30'] = $FstdEight1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['30'] = $FstdEight2['30'] + 1;
				}
				$FstdEightQty['30'] = $FstdEightQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdEight1['32'] = $FstdEight1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['32'] = $FstdEight2['32'] + 1;
				}
				$FstdEightQty['32'] = $FstdEightQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdEight1['34'] = $FstdEight1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['34'] = $FstdEight2['34'] + 1;
				}
				$FstdEightQty['34'] = $FstdEightQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{	
				if($value[9] == 1)
				{
					$FstdEight1['36'] = $FstdEight1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['36'] = $FstdEight2['36'] + 1;
				}
				$FstdEightQty['36'] = $FstdEightQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdEight1['38'] = $FstdEight1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['38'] = $FstdEight2['38'] + 1;
				}
				$FstdEightQty['38'] = $FstdEightQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdEight1['40'] = $FstdEight1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['40'] = $FstdEight2['40'] + 1;
				}
				$FstdEightQty['40'] = $FstdEightQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdEight1['42'] = $FstdEight1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['42'] = $FstdEight2['42'] + 1;
				}
				$FstdEightQty['42'] = $FstdEightQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdEight1['44'] = $FstdEight1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEight2['44'] = $FstdEight2['44'] + 1;
				}
				$FstdEightQty['44'] = $FstdEightQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "9" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdNine1['24'] = $FstdNine1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['24'] = $FstdNine2['24'] + 1;
				}
				$FstdNineQty['24'] = $FstdNineQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdNine1['26'] = $FstdNine1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['26'] = $FstdNine2['26'] + 1;
				}
				$FstdNineQty['26'] = $FstdNineQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdNine1['28'] = $FstdNine1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['28'] = $FstdNine2['28'] + 1;
				}
				$FstdNineQty['28'] = $FstdNineQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdNine1['30'] = $FstdNine1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['30'] = $FstdNine2['30'] + 1;
				}
				$FstdNineQty['30'] = $FstdNineQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdNine1['32'] = $FstdNine1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['32'] = $FstdNine2['32'] + 1;
				}
				$FstdNineQty['32'] = $FstdNineQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdNine1['34'] = $FstdNine1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['34'] = $FstdNine2['34'] + 1;
				}
				$FstdNineQty['34'] = $FstdNineQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdNine1['36'] = $FstdNine1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['36'] = $FstdNine2['36'] + 1;
				}
				$FstdNineQty['36'] = $FstdNineQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdNine1['38'] = $FstdNine1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['38'] = $FstdNine2['38'] + 1;
				}
				$FstdNineQty['38'] = $FstdNineQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdNine1['40'] = $FstdNine1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['40'] = $FstdNine2['40'] + 1;
				}
				$FstdNineQty['40'] = $FstdNineQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdNine1['42'] = $FstdNine1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['42'] = $FstdNine2['42'] + 1;
				}
				$FstdNineQty['42'] = $FstdNineQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdNine1['44'] = $FstdNine1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdNine2['44'] = $FstdNine2['44'] + 1;
				}
				$FstdNineQty['44'] = $FstdNineQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "10" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdTen1['24'] = $FstdTen1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['24'] = $FstdTen2['24'] + 1;
				}
				$FstdTenQty['24'] = $FstdTenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdTen1['26'] = $FstdTen1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['26'] = $FstdTen2['26'] + 1;
				}
				$FstdTenQty['26'] = $FstdTenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdTen1['28'] = $FstdTen1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['28'] = $FstdTen2['28'] + 1;
				}
				$FstdTenQty['28'] = $FstdTenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdTen1['30'] = $FstdTen1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['30'] = $FstdTen2['30'] + 1;
				}
				$FstdTenQty['30'] = $FstdTenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdTen1['32'] = $FstdTen1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['32'] = $FstdTen2['32'] + 1;
				}
				$FstdTenQty['32'] = $FstdTenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdTen1['34'] = $FstdTen1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['34'] = $FstdTen2['34'] + 1;
				}
				$FstdTenQty['34'] = $FstdTenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdTen1['36'] = $FstdTen1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['36'] = $FstdTen2['36'] + 1;
				}
				$FstdTenQty['36'] = $FstdTenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdTen1['38'] = $FstdTen1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['38'] = $FstdTen2['38'] + 1;
				}
				$FstdTenQty['38'] = $FstdTenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdTen1['40'] = $FstdTen1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['40'] = $FstdTen2['40'] + 1;
				}
				$FstdTenQty['40'] = $FstdTenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdTen1['42'] = $FstdTen1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['42'] = $FstdTen2['42'] + 1;
				}
				$FstdTenQty['42'] = $FstdTenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdTen1['44'] = $FstdTen1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTen2['44'] = $FstdTen2['44'] + 1;
				}
				$FstdTenQty['44'] = $FstdTenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "11" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['24'] = $FstdEleven1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['24'] = $FstdEleven2['24'] + 1;
				}
				$FstdElevenQty['24'] = $FstdElevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['26'] = $FstdEleven1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['26'] = $FstdEleven2['26'] + 1;
				}
				$FstdElevenQty['26'] = $FstdElevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['28'] = $FstdEleven1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['28'] = $FstdEleven2['28'] + 1;
				}
				$FstdElevenQty['28'] = $FstdElevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['30'] = $FstdEleven1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['30'] = $FstdEleven2['30'] + 1;
				}
				$FstdElevenQty['30'] = $FstdElevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['32'] = $FstdEleven1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['32'] = $FstdEleven2['32'] + 1;
				}
				$FstdElevenQty['32'] = $FstdElevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['34'] = $FstdEleven1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['34'] = $FstdEleven2['34'] + 1;
				}
				$FstdElevenQty['34'] = $FstdElevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['36'] = $FstdEleven1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['36'] = $FstdEleven2['36'] + 1;
				}
				$FstdElevenQty['36'] = $FstdElevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['38'] = $FstdEleven1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['38'] = $FstdEleven2['38'] + 1;
				}
				$FstdElevenQty['38'] = $FstdElevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['40'] = $FstdEleven1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['40'] = $FstdEleven2['40'] + 1;
				}
				$FstdElevenQty['40'] = $FstdElevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['42'] = $FstdEleven1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['42'] = $FstdEleven2['42'] + 1;
				}
				$FstdElevenQty['42'] = $FstdElevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdEleven1['44'] = $FstdEleven1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdEleven2['44'] = $FstdEleven2['44'] + 1;
				}
				$FstdElevenQty['44'] = $FstdElevenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "12" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['24'] = $FstdTwelve1['24'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['24'] = $FstdTwelve2['24'] + 1;
				}
				$FstdTwelveQty['24'] = $FstdTwelveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['26'] = $FstdTwelve1['26'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['26'] = $FstdTwelve2['26'] + 1;
				}
				$FstdTwelveQty['26'] = $FstdTwelveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['28'] = $FstdTwelve1['28'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['28'] = $FstdTwelve2['28'] + 1;
				}
				$FstdTwelveQty['28'] = $FstdTwelveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['30'] = $FstdTwelve1['30'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['30'] = $FstdTwelve2['30'] + 1;
				}
				$FstdTwelveQty['30'] = $FstdTwelveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['32'] = $FstdTwelve1['32'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['32'] = $FstdTwelve2['32'] + 1;
				}
				$FstdTwelveQty['32'] = $FstdTwelveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['34'] = $FstdTwelve1['34'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['34'] = $FstdTwelve2['34'] + 1;
				}
				$FstdTwelveQty['34'] = $FstdTwelveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['36'] = $FstdTwelve1['36'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['36'] = $FstdTwelve2['36'] + 1;
				}
				$FstdTwelveQty['36'] = $FstdTwelveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['38'] = $FstdTwelve1['38'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['38'] = $FstdTwelve2['38'] + 1;
				}
				$FstdTwelveQty['38'] = $FstdTwelveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['40'] = $FstdTwelve1['40'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['40'] = $FstdTwelve2['40'] + 1;
				}
				$FstdTwelveQty['40'] = $FstdTwelveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['42'] = $FstdTwelve1['42'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['42'] = $FstdTwelve2['42'] + 1;
				}
				$FstdTwelveQty['42'] = $FstdTwelveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				if($value[9] == 1)
				{
					$FstdTwelve1['44'] = $FstdTwelve1['44'] + 1;
				}
				if($value[9] == 2)
				{
					$FstdTwelve2['44'] = $FstdTwelve2['44'] + 1;
				}
				$FstdTwelveQty['44'] = $FstdTwelveQty['44'] + $value[9];
			}
		}
	}
?>	

<table align="center" width="80%" border="2">
 <tr>
    	<td colspan="7">
        	<strong> Category : Girl  </strong>
        </td>
        <td colspan="7" align="right">
        	<strong>Term : <?php echo $student_term;?>
        </td>
    </tr>
	<?php
	$mygirltotal = 0;
	$sr=0;
	foreach($FsizeData as $charSize)
	{
		echo "<tr>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>".$FsizeData[$sr]."</h3></td>";
		if($sr == 0) {
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-1</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-2</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-3</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-4</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-5</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-6</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-7</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-8</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-9</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-10</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-11</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Std-12</h3></td>";
		echo "<td class='show_chart' align='center' style='border:1px solid black;'><h3>Total</h3></td>";
		}
		else{
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdOne1[$FsizeData[$sr]] ? "<strong>".$FstdOne1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdOne2[$FsizeData[$sr]] ? "<strong>".$FstdOne2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountOne = $FstdOneQty[$FsizeData[$sr]];
		if($FcountOne > 0) { 
		echo "<strong>".$FcountOne."</strong>";
		$Fmsize22 = $Fmsize22 + $FcountOne; 
		}
		 else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdTwo1[$FsizeData[$sr]] ? "<strong>".$FstdTwo1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdTwo2[$FsizeData[$sr]] ? "<strong>".$FstdTwo2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountTwo = $FstdTwoQty[$FsizeData[$sr]];
		if($FcountTwo > 0) {
			echo "<strong>".$FcountTwo."</strong>";
		$Fmsize24 = $Fmsize24 + $FcountTwo; 
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdThree1[$FsizeData[$sr]] ? "<strong>".$FstdThree1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdThree2[$FsizeData[$sr]] ? "<strong>".$FstdThree2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountThree = $FstdThreeQty[$FsizeData[$sr]];
		if($FcountThree > 0) { 
			echo "<strong>".$FcountThree."</strong>";
		$Fmsize26 = $Fmsize26 + $FcountThree; 
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdFour1[$FsizeData[$sr]] ? "<strong>".$FstdFour1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdFour2[$FsizeData[$sr]] ? "<strong>".$FstdFour2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountFour = $FstdFourQty[$FsizeData[$sr]];
		if($FcountFour > 0) { 
			echo "<strong>".$FcountFour."</strong>";
		$Fmsize28 = $Fmsize28 + $FcountFour; 
		} else { echo "0";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdFive1[$FsizeData[$sr]] ? "<strong>".$FstdFive1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdFive2[$FsizeData[$sr]] ? "<strong>".$FstdFive2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountFive = $FstdFiveQty[$FsizeData[$sr]];
		if($FcountFive > 0) { 
			echo "<strong>".$FcountFive."</strong>";
		$Fmsize30 = $Fmsize30 + $FcountFive;
		} else { echo "0";}
		echo "</td>";
		
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdSix1[$FsizeData[$sr]] ? "<strong>".$FstdSix1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdSix2[$FsizeData[$sr]] ? "<strong>".$FstdSix2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountSix = $FstdSixQty[$FsizeData[$sr]];
		if($FcountSix > 0) { 
			echo "<strong>".$FcountSix."</strong>";
		$Fmsize32 = $Fmsize32 + $FcountSix;
		} else { echo "0";}
		echo "</td>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdSeven1[$FsizeData[$sr]] ? "<strong>".$FstdSeven1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdSeven2[$FsizeData[$sr]] ? "<strong>".$FstdSeven2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountSeven = $FstdSevenQty[$FsizeData[$sr]];
		if($FcountSeven > 0) { 
			echo "<strong>".$FcountSeven."</strong>";
		$Fmsize34 = $Fmsize34 + $FcountSeven;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdEight1[$FsizeData[$sr]] ? "<strong>".$FstdEight1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdEight2[$FsizeData[$sr]] ? "<strong>".$FstdEight2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountEight = $FstdEightQty[$FsizeData[$sr]];
		if($FcountEight > 0) { 
			echo "<strong>".$FcountEight."</strong>";
		$Fmsize36 = $Fmsize36 + $FcountEight;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdNine1[$FsizeData[$sr]] ? "<strong>".$FstdNine1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdNine2[$FsizeData[$sr]] ? "<strong>".$FstdNine2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountNine = $FstdNineQty[$FsizeData[$sr]];
		if($FcountNine > 0) { 
			echo "<strong>".$FcountNine."</strong>";
		$Fmsize38 = $Fmsize38 + $FcountNine;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdTen1[$FsizeData[$sr]] ? "<strong>".$FstdTen1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdTen2[$FsizeData[$sr]] ? "<strong>".$FstdTen2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountTen = $FstdTenQty[$FsizeData[$sr]];
		if($FcountTen > 0) { 
			echo "<strong>".$FcountTen."</strong>";
		$Fmsize40 = $Fmsize40 + $FcountTen;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdEleven1[$FsizeData[$sr]] ? "<strong>".$FstdEleven1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdEleven2[$FsizeData[$sr]] ? "<strong>".$FstdEleven2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountEleven = $FstdElevenQty[$FsizeData[$sr]];
		if($FcountEleven > 0) { 
			echo "<strong>".$FcountEleven."</strong>";
		$Fmsize42 = $Fmsize42 + $FcountEleven;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		echo $FstdTwelve1[$FsizeData[$sr]] ? "<strong>".$FstdTwelve1[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $FstdTwelve2[$FsizeData[$sr]] ? "<strong>".$FstdTwelve2[$FsizeData[$sr]]."</strong>" : "0" ;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$FcountTwelve = $FstdTwelveQty[$FsizeData[$sr]];
		if($FcountTwelve > 0) { 
			echo "<strong>".$FcountTwelve."</strong>";
		$Fmsize44 = $Fmsize44 + $FcountTwelve;
		} else { echo "0";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		//echo "---Total--";
		$Ftotal = $FcountOne + $FcountTwo + $FcountThree + $FcountFour + $FcountFive + 
				  $FcountSix + $FcountSeven + $FcountEight + $FcountNine + $FcountTen +
				  $FcountEleven + $FcountTwelve ;
		$mygirltotal = $mygirltotal + $Ftotal;
		echo "<h3>";
		echo $Ftotal;
		echo "</h3>";
		//echo $sizeData[$sr];
		//echo $size22;
		//echo "</td>";
		}
		echo "</tr>";
	$sr++;
	}
	?>
    <tr>
		<td class='show_chart' align='center' style='border:1px solid black;'>
        <h2>Total</h2>
        </td>
    	<td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize22;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize24;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize26;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize28;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize30;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize32;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize34;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize36;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize38;?></h3>
        </td>
        <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize40;?></h3>
        </td>
         <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize42;?></h3>
        </td>
         <td  align="center"  class='show_chart' style="border:1px solid black;">
        	<h3><?php echo $Fmsize44;?></h3>
        </td>
         <td class='show_chart' align='center' style='border:1px solid black;'>
        	<h2><?php echo $mygirltotal;?></h2>
         	
         </td>
    </tr>
</table>


<!--Female Charg End -->
<?php

$content = ob_get_contents();
unset($_SESSION['school_delivery_print']);
$_SESSION['school_delivery_print'] = $content;
?>
<center>
<form action="#" method="post">
    <input type="submit" name="print" value="Take Print" class="btn" />
</form>
</center>
<?php
}
if(isset($_POST['print']))
{
ob_clean();

//$content = $_POST['content'];
$content = $_SESSION['school_delivery_print'];

//echo $content;die;
unset($_SESSION['school_delivery_print']);
require_once("mpdf/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',10,10,28,20,10,10); 
	$mpdf->SetHeader('Size Chart');
	$mpdf->defaultheaderfontsize=18;
	$mpdf->SetFooter('{PAGENO}');
$mpdf->WriteHTML($content);
$mpdf->SetDisplayMode('fullpage');
//$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
//$mpdf->Output();
$filename = "xpdf/".rand(1111,9999)."_".rand(1111,9999)."_Chart.pdf";
$mpdf->Output($filename,'F');
?>
<script>
window.location.assign("<?php echo $filename;?>");
</script>
<?php
}
?>
