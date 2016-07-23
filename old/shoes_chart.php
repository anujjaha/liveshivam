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
	$sizeData = array("Shoes - Size","-13","-12","-11","-10","-9","-8","-7","-6","-5","-4",
						"-3","-2","-1","+1","+2","+3","+4","+5",
						"+6","+7","+8","+9","+10","+11","+12","+13"
						);
	$m22countStd1 = 0;
	/*echo "<pre>";
	print_r($student_data);
	die; */
	
	foreach($student_data as $key => $value)
	{
		if($value[5] == "Male") {
		$shirt[] = $value;
		}
		if($value[3] == "1" and $value[5] == "Male") {
			 if($value[9] == "-13")
			{
				$stdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$stdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$stdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$stdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$stdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$stdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$stdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$stdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$stdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$stdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$stdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$stdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$stdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$stdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$stdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$stdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$stdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$stdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$stdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$stdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$stdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$stdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$stdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$stdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$stdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$stdOne['+13'][] = array($value[9]);
			}
			
			
		}
		
		
	}
?>

<?php
	/*$s20 = 0;
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
			$s20++;
			$shirttotal++;
		}
		else if($shirtvalue[6] == 28  ) {
			$s22++;
			$shirttotal++;
		}
		else if($shirtvalue[6] == 30) {
			$s24++;
			$shirttotal++;
		}
		else if($shirtvalue[6] == 32 or $shirtvalue[6] == 34 ) {
			$s26++;
			$shirttotal++;
		}
		else if($shirtvalue[6] == 36 ) {
			$s28++;
			$shirttotal++;
		}
		else if($shirtvalue[6] == 38 ) {
			$s30++;
			$shirttotal++;
		}
		else {
			$s32++;
			$shirttotal++;
		}
		}
	}*/
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
		else{
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countOne = count($stdOne[$sizeData[$sr]]);
		if($countOne > 0) { 
		echo $countOne;
		$msize22 = $msize22 + $countOne; 
		}
		 else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countTwo = count($stdTwo[$sizeData[$sr]]);
		if($countTwo > 0) { echo $countTwo;
		$msize24 = $msize24 + $countTwo; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countThree = count($stdThree[$sizeData[$sr]]);
		if($countThree > 0) { echo $countThree;
		$msize26 = $msize26 + $countThree; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countFour = count($stdFour[$sizeData[$sr]]);
		if($countFour > 0) { echo $countFour;
		$msize28 = $msize28 + $countFour; 
		} else { echo "-";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countFive = count($stdFive[$sizeData[$sr]]);
		if($countFive > 0) { echo $countFive;
		$msize30 = $msize30 + $countFive;
		} else { echo "-";}
		echo "</td>";
		
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countSix = count($stdSix[$sizeData[$sr]]);
		if($countSix > 0) { echo $countSix;
		$msize32 = $msize32 + $countSix;
		} else { echo "-";}
		echo "</td>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countSeven = count($stdSeven[$sizeData[$sr]]);
		if($countSeven > 0) { echo $countSeven;
		$msize34 = $msize34 + $countSeven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countEight = count($stdEight[$sizeData[$sr]]);
		if($countEight > 0) { echo $countEight;
		$msize36 = $msize36 + $countEight;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countNine = count($stdNine[$sizeData[$sr]]);
		if($countNine > 0) { echo $countNine;
		$msize38 = $msize38 + $countNine;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countTen = count($stdTen[$sizeData[$sr]]);
		if($countTen > 0) { echo $countTen;
		$msize40 = $msize40 + $countTen;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countEleven = count($stdEleven[$sizeData[$sr]]);
		if($countEleven > 0) { echo $countEleven;
		$msize42 = $msize42 + $countEleven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$countTwelve = count($stdTwelve[$sizeData[$sr]]);
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
<hr />
<br><br><br><br><br><br>

<!--Female Chart Generate-->
<?php
	$FsizeData = array("Shoes - Size","-13","-12","-11","-10",
						"-9","-8","-7","-6","-5","-4","-3",
						"-2","-1","+1","+2","+3","+4","+5","+6","+7","+8",
						"+9","+10","+11","+12","+13",
						);
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
			
		}
		
		if($value[3] == "2" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Female") {

			 if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}

		}
		
		if($value[3] == "4" and $value[5] == "Female") {
			
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "5" and $value[5] == "Female") {
		
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "6" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}

		}
		
		if($value[3] == "7" and $value[5] == "Female") {
		
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}

		}
		
		if($value[3] == "8" and $value[5] == "Female") {
			
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "9" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "10" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "11" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
			}
		}
		
		if($value[3] == "12" and $value[5] == "Female") {
			if($value[9] == "-13")
			{
				$FstdOne['-13'][] = array($value[9]);
			}
			else if($value[9] == "-12")
			{
				$FstdOne['-12'][] = array($value[9]);
			}
			else if($value[9] == "-11")
			{
				$FstdOne['-11'][] = array($value[9]);
			}
			else if($value[9] == "-10")
			{
				$FstdOne['-10'][] = array($value[9]);
			}
			else if($value[9] == "-9")
			{
				$FstdOne['-9'][] = array($value[9]);
			}
			else if($value[9] == "-8")
			{
				$FstdOne['-8'][] = array($value[9]);
			}
			else if($value[9] == "-7")
			{
				$FstdOne['-7'][] = array($value[9]);
			}
			else if($value[9] == "-6")
			{
				$FstdOne['-6'][] = array($value[9]);
			}
			else if($value[9] == "-5")
			{
				$FstdOne['-5'][] = array($value[9]);
			}
			else if($value[9] == "-4")
			{
				$FstdOne['-4'][] = array($value[9]);
			}
			else if($value[9] == "-3")
			{
				$FstdOne['-3'][] = array($value[9]);
			}
			else if($value[9] == "-2")
			{
				$FstdOne['-2'][] = array($value[9]);
			}
			else if($value[9] == "-1")
			{
				$FstdOne['-1'][] = array($value[9]);
			}
			else if($value[9] == "+1")
			{
				$FstdOne['+1'][] = array($value[9]);
			}
			else if($value[9] == "+2")
			{
				$FstdOne['+2'][] = array($value[9]);
			}
			else if($value[9] == "+3")
			{
				$FstdOne['+3'][] = array($value[9]);
			}
			else if($value[9] == "+4")
			{
				$FstdOne['+4'][] = array($value[9]);
			}
			else if($value[9] == "+5")
			{
				$FstdOne['+5'][] = array($value[9]);
			}
			else if($value[9] == "+6")
			{
				$FstdOne['+6'][] = array($value[9]);
			}
			else if($value[9] == "+7")
			{
				$FstdOne['+7'][] = array($value[9]);
			}
			else if($value[9] == "+8")
			{
				$FstdOne['+8'][] = array($value[9]);
			}
			else if($value[9] == "+9")
			{
				$FstdOne['+9'][] = array($value[9]);
			}
			else if($value[9] == "+10")
			{
				$FstdOne['+10'][] = array($value[9]);
			}
			else if($value[9] == "+11")
			{
				$FstdOne['+11'][] = array($value[9]);
			}
			else if($value[9] == "+12")
			{
				$FstdOne['+12'][] = array($value[9]);
			}
			else if($value[9] == "+13")
			{
				$FstdOne['+13'][] = array($value[9]);
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
		$FcountOne = count($FstdOne[$FsizeData[$sr]]);
		if($FcountOne > 0) { 
		echo $FcountOne;
		$Fmsize22 = $Fmsize22 + $FcountOne; 
		}
		 else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTwo = count($FstdTwo[$FsizeData[$sr]]);
		if($FcountTwo > 0) { echo $FcountTwo;
		$Fmsize24 = $Fmsize24 + $FcountTwo; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountThree = count($FstdThree[$FsizeData[$sr]]);
		if($FcountThree > 0) { echo $FcountThree;
		$Fmsize26 = $Fmsize26 + $FcountThree; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountFour = count($FstdFour[$FsizeData[$sr]]);
		if($FcountFour > 0) { echo $FcountFour;
		$Fmsize28 = $Fmsize28 + $FcountFour; 
		} else { echo "-";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountFive = count($FstdFive[$FsizeData[$sr]]);
		if($FcountFive > 0) { echo $FcountFive;
		$Fmsize30 = $Fmsize30 + $FcountFive;
		} else { echo "-";}
		echo "</td>";
		
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountSix = count($FstdSix[$FsizeData[$sr]]);
		if($FcountSix > 0) { echo $FcountSix;
		$Fmsize32 = $Fmsize32 + $FcountSix;
		} else { echo "-";}
		echo "</td>";

		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountSeven = count($FstdSeven[$FsizeData[$sr]]);
		if($FcountSeven > 0) { echo $FcountSeven;
		$Fmsize34 = $Fmsize34 + $FcountSeven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountEight = count($FstdEight[$FsizeData[$sr]]);
		if($FcountEight > 0) { echo $FcountEight;
		$Fmsize36 = $Fmsize36 + $FcountEight;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountNine = count($FstdNine[$FsizeData[$sr]]);
		if($FcountNine > 0) { echo $FcountNine;
		$Fmsize38 = $Fmsize38 + $FcountNine;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTen = count($FstdTen[$FsizeData[$sr]]);
		if($FcountTen > 0) { echo $FcountTen;
		$Fmsize40 = $Fmsize40 + $FcountTen;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountEleven = count($FstdEleven[$FsizeData[$sr]]);
		if($FcountEleven > 0) { echo $FcountEleven;
		$Fmsize42 = $Fmsize42 + $FcountEleven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center' style='border:1px solid black;'>";
		$FcountTwelve = count($FstdTwelve[$FsizeData[$sr]]);
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
