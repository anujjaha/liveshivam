<?php
$tb = '<table align="center" border="2">
		<tr>
			<td colspan="5" align="center">
				<h1>	Testing school name </h1>
				<br><br>
			</td>
		</tr>
	<tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 1
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 6
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    <tr>
    	<td height="132px"  style="border:1px solid black;" width="145px">
        	hello 7
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 2
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 3
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 4
        </td>
        <td height="132px"  style="border:1px solid black;" width="145px">
        	hello 5
        </td>
    </tr>
    
</table>';
require_once("mpdf/mpdf.php");
$mpdf = new mPDF();
	//$mpdf->SetHeader("Student Print");
	//mpdf->defaultheaderfontsize=20;
	//$mpdf->SetFooter("{PAGENO}");
	$mpdf->WriteHTML($tb);
	//$mpdf->SetDisplayMode("fullpage");
	//mpdf->list_indent_first_level = 0;  
	$mpdf->Output();
	exit;
?>