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
        	<h2> Student List </h2>
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
if(isset($_POST['chart'])) {
		ob_start();
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$student_term);
?>
	<table align="center" border="2"  style=" width: 100%;   border-collapse: collapse;border:1px solid;">
    <tr>
    	<td colspan="5" align="center" style="height:150px;">
        	<h3> School Name : <?php echo $school_name;?></h3>
        </td>
    </tr>
    <tr>
    	<td colspan="5" style="height:150px;">
        	<strong> Term : <?php echo $student_term;?>
        </td>
    </tr>
   
   	<?php
	$stdOne .= "<tr>";
	$stdTwo .= "<tr>";
	$stdThree .= "<tr>";
	$stdFour .= "<tr>";
	$stdFive .= "<tr>";
	$stdSix .= "<tr>";
	$stdSeven .= "<tr>";
	$stdEight .= "<tr>";
	$stdNine  .= "<tr>";
	$stdTen .= "<tr>";
	$stdEleven .= "<tr>";
	$stdTwelve .= "<tr>";
	
	$sr=1;
	$srOne=1;
	$srTwo=1;
	$srThree=1;
	$srFour=1;
	$srFive= 1;
	$srSix = 1;
	$srSeven = 1;
	$srEight = 1;
	$srNine = 1;
	$srTen = 1;
	$srEleven = 1;
	$srTwelve = 1;
	
	$std = "";
	
		foreach($student_data as $value)
		{
		if($value[3] == "1")
		{
			$stdOne .= "<td border:1px solid;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdOne .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdOne .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdOne .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdOne .= "<strong> ".$category ."-"; 
             $stdOne .= $value[6];
             $stdOne .= "</strong></td>";
           
            if(($srOne%5)==0) {
			$stdOne .= "</tr><tr>";
			}
			else {
			
      	 	}
			$srOne++;
		}
		if($value[3] == "2")
		{
			$stdTwo .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdTwo .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdTwo .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTwo .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTwo .= "<strong> ".$category ."-"; 
             $stdTwo .= $value[6];
             $stdTwo .= "</strong></td>";
           
            if(($srTwo%5)==0) {
			$stdTwo .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTwo++;
		}
		
		if($value[3] == "3")
		{
			$stdThree .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdThree .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdThree .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdThree .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdThree .= "<strong> ".$category ."-"; 
             $stdThree .= $value[6];
             $stdThree .= "</strong></td>";
           
            if(($srThree%5)==0) {
			$stdThree .= "</tr><tr>";
			}
			else {
			
      		 }
		$srThree++;
		}
		
		if($value[3] == "4")
		{
			$stdFour .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdFour .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdFour .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdFour .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdFour .= "<strong> ".$category ."-"; 
             $stdFour .= $value[6];
             $stdFour .= "</strong></td>";
           
            if(($srFour%5)==0) {
			$stdFour .= "</tr><tr>";
			}
			else {
			
      		 }
		$srFour++;
		}
		
		
		if($value[3] == "5")
			{
			$stdFive .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdFive .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdFive .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdFive .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdFive .= "<strong> ".$category ."-"; 
             $stdFive .= $value[6];
             $stdFive .= "</strong></td>";
           
            if(($srFive%5)==0) {
			$stdFive .= "</tr><tr>";
			}
			else {
			
      		 }
		$srFive++;
		}

		if($value[3] == "6")
		{
			$stdSix .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdSix .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdSix .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdSix .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdSix .= "<strong> ".$category ."-"; 
             $stdSix .= $value[6];
             $stdSix .= "</strong></td>";
           
            if(($srSix%5)==0) {
			$stdSix .= "</tr><tr>";
			}
			else {
			
      		 }
		$srSix++;
		}
		
		if($value[3] == "7")
		{
			$stdSeven .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdSeven .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdSeven .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdSeven .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdSeven .= "<strong> ".$category ."-"; 
             $stdSeven .= $value[6];
             $stdSeven .= "</strong></td>";
           
            if(($srSeven%5)==0) {
			$stdSeven .= "</tr><tr>";
			}
			else {
			
      		 }
		$srSeven++;
		}
		
		if($value[3] == "8")
		{
			$stdEight .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdEight .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdEight .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdEight .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdEight .= "<strong> ".$category ."-"; 
             $stdEight .= $value[6];
             $stdEight .= "</strong></td>";
           
            if(($srEight%5)==0) {
			$stdEight .= "</tr><tr>";
			}
			else {
			
      		 }
		$srEight++;
		}
		
		
		if($value[3] == "9")
		{
			$stdNine .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdNine .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdNine .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdNine .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdNine .= "<strong> ".$category ."-"; 
             $stdNine .= $value[6];
             $stdNine .= "</strong></td>";
           
            if(($srNine%5)==0) {
			$stdNine .= "</tr><tr>";
			}
			else {
			
      		 }
		$srNine++;
		}
		
		
		if($value[3] == "10")
		{
			$stdTen .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdTen .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdTen .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTen .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTen .= "<strong> ".$category ."-"; 
             $stdTen .= $value[6];
             $stdTen .= "</strong></td>";
           
            if(($srTen%5)==0) {
			$stdTen .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTen++;
		}
		
		if($value[3] == "11")
		{
			$stdEleven .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdEleven .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdEleven .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdEleven .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdEleven .= "<strong> ".$category ."-"; 
             $stdEleven .= $value[6];
             $stdEleven .= "</strong></td>";
           
            if(($srEleven%5)==0) {
			$stdEleven .= "</tr><tr>";
			}
			else {
			
      		 }
		$srEleven++;
		}
		
		if($value[3] == "12")
		{
			$stdTwelve .= "<td border:1px solid black;width: 38mm;height: 36.4mm; margin: 0 1mm;>";
            $stdTwelve .= "<strong>Std: ". $value[3] ."-". $value[4]."</strong><br>";
            $stdTwelve .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTwelve .= "<strong>". $value[2] ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTwelve .= "<strong> ".$category ."-"; 
             $stdTwelve .= $value[6];
             $stdTwelve .= "</strong></td>";
           
            if(($srTwelve%5)==0) {
			$stdTwelve .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTwelve++;
		}
		
		$sr++;
		}
		$stdOne .= "</tr>";
		$stdTwo .= "</tr>";
		$stdThree .= "</tr>";
		$stdFour .= "</tr>";
		$stdFive .= "</tr>";
		$stdSix .= "</tr>";
		$stdSeven .= "</tr>";
		$stdEight .= "</tr>";
		$stdNine .= "</tr>";
		$stdTen .= "</tr>";
		$stdEleven .= "</tr>";
		$stdTwelve .= "</tr>";
		?>
        </tr>
    </table>
    <table align="center" border="2" width="90%">
   
    <?php
	print $stdOne;
	if(strlen($stdTwo) > 10) {
	?>
   	<tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php 
	}
	 print $stdTwo; 
	if(strlen($stdThree) > 10) {
	?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php
    }
	print $stdThree;
	if(strlen($stdFour) > 10) {
     ?>
     <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php  
	}
	print $stdFour; 
	if(strlen($stdFive) > 10) {
	?>
     <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php  }
	print $stdFive;
	if(strlen($stdSix) > 10) {
	 ?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php
	}
	 print $stdSix; 
	if(strlen($stdSeven) > 10) {
	?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php 
	}
	 print $stdSeven; 
	 if(strlen($stdEight) > 10) {
	 ?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php }
	 print $stdEight; 
	 if(strlen($stdNine) > 10) {
	 ?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php 
	} print $stdNine;
	if(strlen($stdTen) > 10) {
	 ?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php 
	}
	 print $stdTen; 
	 if(strlen($stdEleven) > 10) {
	 ?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php 
	} print $stdEleven; 
	if(strlen($stdTwelve) > 10) {
	?>
    <tr>
    	<td colspan="10">
        	<hr />
        </td>
    </tr>
    <?php  
	}
	print $stdTwelve; ?>
    
    </table>
    	<form action="#" method="post">
	<?php    $content = htmlentities(ob_get_contents()); ?>
    	<input type="hidden" name="content" value="<?php echo $content;?>" />
    	<input type="submit" name="print" value="Print Students" />
    </form>
<?php
}

?>

   <?php
   if(isset($_POST['print'])) {
	ob_clean();
	$content = $_POST['content'];
	require_once("mpdf/mpdf.php");
	//$mpdf = new mPDF();
	 $mpdf = new mPDF('c', 'A4', '', '',1 , 1, 1, 1, 1,1);
	//$mpdf->SetHeader('Student Print');
	//$mpdf->defaultheaderfontsize=20;
	//$mpdf->SetFooter('{PAGENO}');
	$mpdf->WriteHTML($content,0);
	//$mpdf->SetDisplayMode('fullpage');
	$mpdf->list_indent_first_level = 0;  
	//$mpdf->Output();
	$filename = "xpdf/".rand(1111,9999)."_".rand(1111,9999)."_Student_List.pdf";
	$mpdf->Output($filename,'F');
	?>
	<script>
	window.location.assign("<?php echo $filename;?>");
	</script>
	<?php
	}
	?>