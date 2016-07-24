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
	
	/*echo "<pre>";
	print_r($student_data);die;*/
	
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
				$stdOne['24'][] = array($value[6]);
				$stdOneQty['24'] = $stdOneQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdOne['26'][] = array($value[6]);
				$stdOneQty['26'] = $stdOneQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdOne['28'][] = array($value[6]);
				$stdOneQty['28'] = $stdOneQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdOne['30'][] = array($value[6]);
				$stdOneQty['30'] = $stdOneQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdOne['32'][] = array($value[6]);
				$stdOneQty['32'] = $stdOneQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdOne['34'][] = array($value[6]);
				$stdOneQty['34'] = $stdOneQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdOne['36'][] = array($value[6]);
				$stdOneQty['36'] = $stdOneQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdOne['38'][] = array($value[6]);
				$stdOneQty['38'] = $stdOneQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdOne['40'][] = array($value[6]);
				$stdOneQty['40'] = $stdOneQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdOne['42'][] = array($value[6]);
				$stdOneQty['42'] = $stdOneQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdOne['44'][] = array($value[6]);
				$stdOneQty['44'] = $stdOneQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "2" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				$stdTwo['24'][] = array($value[6]);
				$stdTwoQty['24'] = $stdTwoQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdTwo['26'][] = array($value[6]);
				$stdTwoQty['26'] = $stdTwoQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdTwo['28'][] = array($value[6]);
				$stdTwoQty['28'] = $stdTwoQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdTwo['30'][] = array($value[6]);
				$stdTwoQty['30'] = $stdTwoQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdTwo['32'][] = array($value[6]);
				$stdTwoQty['32'] = $stdTwoQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdTwo['34'][] = array($value[6]);
				$stdTwoQty['34'] = $stdTwoQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdTwo['36'][] = array($value[6]);
				$stdTwoQty['36'] = $stdTwoQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdTwo['38'][] = array($value[6]);
				$stdTwoQty['38'] = $stdTwoQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdTwo['40'][] = array($value[6]);
				$stdTwoQty['40'] = $stdTwoQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdTwo['42'][] = array($value[6]);
				$stdTwoQty['42'] = $stdTwoQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdTwo['44'][] = array($value[6]);
				$stdTwoQty['44'] = $stdTwoQty['44'] + $value[9];
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Male") {

			 if($value[6] == "24")
			{
				$stdThree['24'][] = array($value[6]);
				$stdThreeQty['24'] = $stdThreeQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdThree['26'][] = array($value[6]);
				$stdThreeQty['26'] = $stdThreeQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdThree['28'][] = array($value[6]);
				$stdThreeQty['28'] = $stdThreeQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdThree['30'][] = array($value[6]);
				$stdThreeQty['30'] = $stdThreeQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdThree['32'][] = array($value[6]);
				$stdThreeQty['32'] = $stdThreeQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdThreeQty['34'] = $stdThreeQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdThreeQty['36'] = $stdThreeQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdThreeQty['38'] = $stdThreeQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdThreeQty['40'] = $stdThreeQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdThreeQty['42'] = $stdThreeQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdThreeQty['44'] = $stdThreeQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "4" and $value[5] == "Male") {
			
			if($value[6] == "24")
			{
				$stdFour['24'] = $stdFour['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdFour['26'] = $stdFour['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdFour['28'] = $stdFour['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdFour['30'] = $stdFour['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdFour['32'] = $stdFour['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdFour['34'] = $stdFour['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdFour['36'] = $stdFour['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdFour['38'] = $stdFour['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdFour['40'] = $stdFour['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdFour['42'] = $stdFour['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdFour['44'] = $stdFour['44'] + $value[9];
			}
		}
		
		if($value[3] == "5" and $value[5] == "Male") {
		
			if($value[6] == "24")
			{
				$stdFiveQty['24'] = $stdFiveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdFiveQty['26'] = $stdFiveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdFiveQty['28'] = $stdFiveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdFiveQty['30'] = $stdFiveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdFiveQty['32'] = $stdFiveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdFiveQty['34'] = $stdFiveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdFiveQty['36'] = $stdFiveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdFiveQty['38'] = $stdFiveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdFiveQty['40'] = $stdFiveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdFiveQty['42'] = $stdFiveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdFiveQty['44'] = $stdFiveQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "6" and $value[5] == "Male") {

			 if($value[6] == "24")
			{
				$stdSixQty['24'] = $stdSixQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdSixQty['26'] = $stdSixQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdSixQty['28'] = $stdSixQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdSixQty['30'] = $stdSixQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdSixQty['32'] = $stdSixQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdSixQty['34'] = $stdSixQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdSixQty['36'] = $stdSixQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdSixQty['38'] = $stdSixQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdSixQty['40'] = $stdSixQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdSixQty['42'] = $stdSixQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdSixQty['44'] = $stdSixQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "7" and $value[5] == "Male") {
		
			 if($value[6] == "24")
			{
				$stdSevenQty['24'] = $stdSevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdSevenQty['26'] = $stdSevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdSevenQty['28'] = $stdSevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdSevenQty['30'] = $stdSevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdSevenQty['32'] = $stdSevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdSevenQty['34'] = $stdSevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdSevenQty['36'] = $stdSevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdSevenQty['38'] = $stdSevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdSevenQty['40'] = $stdSevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdSevenQty['42'] = $stdSevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdSevenQty['44'] = $stdSevenQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "8" and $value[5] == "Male") {
			
			 if($value[6] == "24")
			{
				$stdEightQty['24'] = $stdEightQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdEightQty['26'] = $stdEightQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdEightQty['28'] = $stdEightQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdEightQty['30'] = $stdEightQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdEightQty['32'] = $stdEightQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdEightQty['34'] = $stdEightQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdEightQty['36'] = $stdEightQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdEightQty['38'] = $stdEightQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdEightQty['40'] = $stdEightQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdEightQty['42'] = $stdEightQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdEightQty['44'] = $stdEightQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "9" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				$stdNineQty['24'] = $stdNineQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdNineQty['26'] = $stdNineQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdNineQty['28'] = $stdNineQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdNineQty['30'] = $stdNineQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdNineQty['32'] = $stdNineQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdNineQty['34'] = $stdNineQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdNineQty['36'] = $stdNineQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdNineQty['38'] = $stdNineQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdNineQty['40'] = $stdNineQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdNineQty['42'] = $stdNineQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdNineQty['44'] = $stdNineQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "10" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				$stdTenQty['24'] = $stdTenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdTenQty['26'] = $stdTenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdTenQty['28'] = $stdTenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdTenQty['30'] = $stdTenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdTenQty['32'] = $stdTenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdTenQty['34'] = $stdTenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdTenQty['36'] = $stdTenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdTenQty['38'] = $stdTenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdTenQty['40'] = $stdTenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdTenQty['42'] = $stdTenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdTenQty['44'] = $stdTenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "11" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				$stdElevenQty['24'] = $stdElevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdElevenQty['26'] = $stdElevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdElevenQty['28'] = $stdElevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdElevenQty['30'] = $stdElevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdElevenQty['32'] = $stdElevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdElevenQty['34'] = $stdElevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdElevenQty['36'] = $stdElevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdElevenQty['38'] = $stdElevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdElevenQty['40'] = $stdElevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdElevenQty['42'] = $stdElevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdElevenQty['44'] = $stdElevenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "12" and $value[5] == "Male") {
			 if($value[6] == "24")
			{
				$stdTwelveQty['24'] = $stdTwelveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$stdTwelveQty['26'] = $stdTwelveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$stdTwelveQty['28'] = $stdTwelveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$stdTwelveQty['30'] = $stdTwelveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$stdTwelveQty['32'] = $stdTwelveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$stdTwelveQty['34'] = $stdTwelveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$stdTwelveQty['36'] = $stdTwelveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$stdTwelveQty['38'] = $stdTwelveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$stdTwelveQty['40'] = $stdTwelveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$stdTwelveQty['42'] = $stdTwelveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$stdTwelveQty['44'] = $stdTwelveQty['44'] + $value[9];
			}
		}
	}
	
	/*echo "<pre>";
	print_r($stdOneQty);
	print_r($stdTwoQty);
	echo array_sum($stdOneQty['24']);
	
	echo "-----------";
	print_r($stdOne);
	die;*/
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
			$countOne =  $stdOneQty[$sizeData[$sr]];
			if($countOne > 0)
			{ 
				echo $stdOneQty[$sizeData[$sr]];
				$msize22 = $msize22 + $stdOneQty[$sizeData[$sr]];
			}
			else
			{
				 echo "-";
			}
			echo "</td>";
		
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
				$countTwo = $stdTwoQty[$sizeData[$sr]];
				if($countTwo > 0) { echo $countTwo;
					$msize24 = $msize24 + $countTwo; 
				} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countThree = $stdThreeQty[$sizeData[$sr]];
			if($countThree > 0) { echo $countThree;
			$msize26 = $msize26 + $countThree; 
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countFour = $stdFourQty[$sizeData[$sr]];
			if($countFour > 0) { echo $countFour;
			$msize28 = $msize28 + $countFour; 
			} else { echo "-";}
			echo "</td class='show_chart'>";

			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countFive = $stdFiveQty[$sizeData[$sr]];
			if($countFive > 0) { echo $countFive;
			$msize30 = $msize30 + $countFive;
			} else { echo "-";}
			echo "</td>";
			
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countSix = $stdSixQty[$sizeData[$sr]];
			if($countSix > 0) { echo $countSix;
			$msize32 = $msize32 + $countSix;
			} else { echo "-";}
			echo "</td>";

			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countSeven = $stdSevenQty[$sizeData[$sr]];
			if($countSeven > 0) { echo $countSeven;
			$msize34 = $msize34 + $countSeven;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countEight = $stdEightQty[$sizeData[$sr]];
			if($countEight > 0) { echo $countEight;
			$msize36 = $msize36 + $countEight;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countNine = $stdNineQty[$sizeData[$sr]];
			if($countNine > 0) { echo $countNine;
			$msize38 = $msize38 + $countNine;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countTen = $stdTenQty[$sizeData[$sr]];
			if($countTen > 0) { echo $countTen;
			$msize40 = $msize40 + $countTen;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countEleven = $stdElevenQty[$sizeData[$sr]];
			if($countEleven > 0) { echo $countEleven;
			$msize42 = $msize42 + $countEleven;
			} else { echo "-";}
			echo "</td>";
			
			echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
			$countTwelve = $stdTwelveQty[$sizeData[$sr]];
			if($countTwelve > 0) { echo $countTwelve;
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

<!------------------Completed one Section  ------------------------>
<table align="center" border="2" style="border:thick; border-width:medium;">
		<tr>
        	<td colspan="8" align="center"  style="border:1px solid black;">
            	<h2>Boys Shirt Size Chart </h2>
            </td>
        </tr>
        <tr>
        	<td colspan="8">
        	<h2>	Meter Cloth : 
        		<?php 
        		$pshirt = 0.7;
        		$shirtmtr = $shirttotal * $pshirt;
        		echo $shirtmtr;
        		?>
        		</h2>
        	</td>
        </tr>
    	<tr>
        	<td style="border:1px solid black;">
            	Shirt - 20  
            </td>
            <td style="border:1px solid black;">
            	Shirt - 22 
            </td>
            <td style="border:1px solid black;">
            	Shirt - 24 
            </td>
            <td style="border:1px solid black;">
            	Shirt - 26 
            </td>
            <td style="border:1px solid black;">
            	Shirt - 28 
            </td>
            <td style="border:1px solid black;">
            	Shirt - 30 
            </td>	
            <td style="border:1px solid black;">
            	Shirt - 32 
            </td>
             <td style="border:1px solid black;">
            	Total
            </td>
        </tr>
        <tr>
        	<td style="border:1px solid black;">
            	<?php echo $s20;?> C - 10.5
            </td>
            <td style="border:1px solid black;">
            	<?php echo $s22;?> / C - 11
            </td>
            <td style="border:1px solid black;">
            	<?php echo $s24;?> / C - 11.5
            </td>
            <td style="border:1px solid black;">
            	<?php echo $s26;?> / C - 12
            </td>
            <td style="border:1px solid black;">
            	<?php echo $s28;?> / C - 12.5
            </td>
            <td style="border:1px solid black;">
            	<?php echo $s30;?> / C - 13
            </td>	
            <td style="border:1px solid black;">
            	<?php echo $s32;?> / C - 13.5
            </td>
            <td style="border:1px solid black;">
            	<?php echo $shirttotal;?>
            </td>
        </tr>
    </table>

<hr />
<!--Female Chart Generate-->
<?php
	$FsizeData = array("Salvar - Size","24","26","28","30","32","34","36","38","40","42","44");
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				$FstdOneQty['24'] = $FstdOneQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdOneQty['26'] = $FstdOneQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdOneQty['28'] = $FstdOneQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdOneQty['30'] = $FstdOneQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdOneQty['32'] = $FstdOneQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdOneQty['34'] = $FstdOneQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdOneQty['36'] = $FstdOneQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdOneQty['38'] = $FstdOneQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdOneQty['40'] = $FstdOneQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdOneQty['42'] = $FstdOneQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdOneQty['44'] = $FstdOneQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "2" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				$FstdTwoQty['24'] = $FstdTwoQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdTwoQty['26'] = $FstdTwoQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdTwoQty['28'] = $FstdTwoQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdTwoQty['30'] = $FstdTwoQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdTwoQty['32'] = $FstdTwoQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdTwoQty['34'] = $FstdTwoQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdTwoQty['36'] = $FstdTwoQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdTwoQty['38'] = $FstdTwoQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdTwoQty['40'] = $FstdTwoQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdTwoQty['42'] = $FstdTwoQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdTwoQty['44'] = $FstdTwoQty['44'] + $value[9];
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Female") {

			if($value[6] == "24")
			{
				$FstdThreeQty['24'] = $FstdThreeQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdThreeQty['26'] = $FstdThreeQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdThreeQty['28'] = $FstdThreeQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdThreeQty['30'] = $FstdThreeQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdThreeQty['32'] = $FstdThreeQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdThreeQty['34'] = $FstdThreeQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdThreeQty['36'] = $FstdThreeQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdThreeQty['38'] = $FstdThreeQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdThreeQty['40'] = $FstdThreeQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdThreeQty['42'] = $FstdThreeQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdThreeQty['44'] = $FstdThreeQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "4" and $value[5] == "Female") {
			
			 if($value[6] == "24")
			{
				$FstdFourQty['24'] = $FstdFourQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdFourQty['26'] = $FstdFourQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdFourQty['28'] = $FstdFourQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdFourQty['30'] = $FstdFourQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdFourQty['32'] = $FstdFourQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdFourQty['34'] = $FstdFourQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdFourQty['36'] = $FstdFourQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdFourQty['38'] = $FstdFourQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdFourQty['40'] = $FstdFourQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdFourQty['42'] = $FstdFourQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdFourQty['44'] = $FstdFourQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "5" and $value[5] == "Female") {
		
			 if($value[6] == "24")
			{
				$FstdFiveQty['24'] = $FstdFiveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdFiveQty['26'] = $FstdFiveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdFiveQty['28'] = $FstdFiveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdFiveQty['30'] = $FstdFiveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdFiveQty['32'] = $FstdFiveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdFiveQty['34'] = $FstdFiveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdFiveQty['36'] = $FstdFiveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdFiveQty['38'] = $FstdFiveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdFiveQty['40'] = $FstdFiveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdFiveQty['42'] = $FstdFiveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdFiveQty['44'] = $FstdFiveQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "6" and $value[5] == "Female") {

			 if($value[6] == "24")
			{
				$FstdSixQty['24'] = $FstdSixQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdSixQty['26'] = $FstdSixQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdSixQty['28'] = $FstdSixQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdSixQty['30'] = $FstdSixQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdSixQty['32'] = $FstdSixQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdSixQty['34'] = $FstdSixQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdSixQty['36'] = $FstdSixQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdSixQty['38'] = $FstdSixQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdSixQty['40'] = $FstdSixQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdSixQty['42'] = $FstdSixQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdSixQty['44'] = $FstdSixQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "7" and $value[5] == "Female") {
		
			 if($value[6] == "24")
			{
				$FstdSevenQty['24'] = $FstdSevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdSevenQty['26'] = $FstdSevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdSevenQty['28'] = $FstdSevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdSevenQty['30'] = $FstdSevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdSevenQty['32'] = $FstdSevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdSevenQty['34'] = $FstdSevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdSevenQty['26'] = $FstdSevenQty['26'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdSevenQty['38'] = $FstdSevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdSevenQty['40'] = $FstdSevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdSevenQty['42'] = $FstdSevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdSevenQty['44'] = $FstdSevenQty['44'] + $value[9];
			}

		}
		
		if($value[3] == "8" and $value[5] == "Female") {
			
			 if($value[6] == "24")
			{
				$FstdEightQty['24'] = $FstdEightQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdEightQty['26'] = $FstdEightQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdEightQty['28'] = $FstdEightQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdEightQty['30'] = $FstdEightQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdEightQty['32'] = $FstdEightQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdEightQty['34'] = $FstdEightQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdEightQty['36'] = $FstdEightQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdEightQty['38'] = $FstdEightQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdEightQty['40'] = $FstdEightQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdEightQty['42'] = $FstdEightQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdEightQty['44'] = $FstdEightQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "9" and $value[5] == "Female") {
			 if($value[6] == "24")
			{
				$FstdNineQty['24'] = $FstdNineQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdNineQty['26'] = $FstdNineQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdNineQty['28'] = $FstdNineQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdNineQty['30'] = $FstdNineQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdNineQty['32'] = $FstdNineQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdNineQty['34'] = $FstdNineQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdNineQty['36'] = $FstdNineQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdNineQty['38'] = $FstdNineQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdNineQty['40'] = $FstdNineQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdNineQty['42'] = $FstdNineQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdNineQty['44'] = $FstdNineQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "10" and $value[5] == "Female") {
			 if($value[6] == "24")
			{
				$FstdTenQty['24'] = $FstdTenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdTenQty['26'] = $FstdTenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdTenQty['28'] = $FstdTenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdTenQty['30'] = $FstdTenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdTenQty['32'] = $FstdTenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdTenQty['34'] = $FstdTenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdTenQty['36'] = $FstdTenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdTenQty['38'] = $FstdTenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdTenQty['40'] = $FstdTenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdTenQty['42'] = $FstdTenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdTenQty['44'] = $FstdTenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "11" and $value[5] == "Female") {
			if($value[6] == "24")
			{
				$FstdElevenQty['24'] = $FstdElevenQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdElevenQty['26'] = $FstdElevenQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdElevenQty['28'] = $FstdElevenQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdElevenQty['30'] = $FstdElevenQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdElevenQty['32'] = $FstdElevenQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdElevenQty['34'] = $FstdElevenQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdElevenQty['36'] = $FstdElevenQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdElevenQty['38'] = $FstdElevenQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdElevenQty['40'] = $FstdElevenQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdElevenQty['42'] = $FstdElevenQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
				$FstdElevenQty['44'] = $FstdElevenQty['44'] + $value[9];
			}
		}
		
		if($value[3] == "12" and $value[5] == "Female") {
			 if($value[6] == "24")
			{
				$FstdTwelveQty['24'] = $FstdTwelveQty['24'] + $value[9];
			}
			else if($value[6] == "26")
			{
				$FstdTwelveQty['26'] = $FstdTwelveQty['26'] + $value[9];
			}
			else if($value[6] == "28")
			{
				$FstdTwelveQty['28'] = $FstdTwelveQty['28'] + $value[9];
			}
			else if($value[6] == "30")
			{
				$FstdTwelveQty['30'] = $FstdTwelveQty['30'] + $value[9];
			}
			else if($value[6] == "32")
			{
				$FstdTwelveQty['32'] = $FstdTwelveQty['32'] + $value[9];
			}
			else if($value[6] == "34")
			{
				$FstdTwelveQty['34'] = $FstdTwelveQty['34'] + $value[9];
			}
			else if($value[6] == "36")
			{
				$FstdTwelveQty['36'] = $FstdTwelveQty['36'] + $value[9];
			}
			else if($value[6] == "38")
			{
				$FstdTwelveQty['38'] = $FstdTwelveQty['38'] + $value[9];
			}
			else if($value[6] == "40")
			{
				$FstdTwelveQty['40'] = $FstdTwelveQty['40'] + $value[9];
			}
			else if($value[6] == "42")
			{
				$FstdTwelveQty['42'] = $FstdTwelveQty['42'] + $value[9];
			}
			else if($value[6] == "44")
			{
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
		$FcountOne = $FstdOneQty[$FsizeData[$sr]];
		if($FcountOne > 0) { 
		echo $FcountOne;
		$Fmsize22 = $Fmsize22 + $FcountOne; 
		}
		 else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTwo = $FstdTwoQty[$FsizeData[$sr]];
		if($FcountTwo > 0) { echo $FcountTwo;
		$Fmsize24 = $Fmsize24 + $FcountTwo; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountThree = $FstdThreeQty[$FsizeData[$sr]];
		if($FcountThree > 0) { echo $FcountThree;
		$Fmsize26 = $Fmsize26 + $FcountThree; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountFour = $FstdFourQty[$FsizeData[$sr]];
		if($FcountFour > 0) { echo $FcountFour;
		$Fmsize28 = $Fmsize28 + $FcountFour; 
		} else { echo "-";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountFive = $FstdFiveQty[$FsizeData[$sr]];
		if($FcountFive > 0) { echo $FcountFive;
		$Fmsize30 = $Fmsize30 + $FcountFive;
		} else { echo "-";}
		echo "</td>";
		
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountSix = $FstdSixQty[$FsizeData[$sr]];
		if($FcountSix > 0) { echo $FcountSix;
		$Fmsize32 = $Fmsize32 + $FcountSix;
		} else { echo "-";}
		echo "</td>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountSeven = $FstdSevenQty[$FsizeData[$sr]];
		if($FcountSeven > 0) { echo $FcountSeven;
		$Fmsize34 = $Fmsize34 + $FcountSeven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountEight = $FstdEightQty[$FsizeData[$sr]];
		if($FcountEight > 0) { echo $FcountEight;
		$Fmsize36 = $Fmsize36 + $FcountEight;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountNine = $FstdNineQty[$FsizeData[$sr]];
		if($FcountNine > 0) { echo $FcountNine;
		$Fmsize38 = $Fmsize38 + $FcountNine;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTen = $FstdTenQty[$FsizeData[$sr]];
		if($FcountTen > 0) { echo $FcountTen;
		$Fmsize40 = $Fmsize40 + $FcountTen;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountEleven = $FstdElevenQty[$FsizeData[$sr]];
		if($FcountEleven > 0) { echo $FcountEleven;
		$Fmsize42 = $Fmsize42 + $FcountEleven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTwelve = $FstdTwelveQty[$FsizeData[$sr]];
		if($FcountTwelve > 0) { echo $FcountTwelve;
		$Fmsize44 = $Fmsize44 + $FcountTwelve;
		} else { echo "-";}
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
unset($_SESSION['school_chart_print']);
$_SESSION['school_chart_print'] = $content;
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
$content = $_SESSION['school_chart_print'];
unset($_SESSION['school_chart_print']);
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
