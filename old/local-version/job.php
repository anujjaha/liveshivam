<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
?>
<table align="center" border="2" rules="all">
<form action="save_job.php" method="post">
	<tr>
    	<td colspan="2" align="center">
        	<h2> Job Order </h2>
        </td>	
    </tr>
    <tr>
    	<td colspan="2" align="right">
        	Date : <?php echo date('d-m-Y');?>
        </td>	
    </tr>
    <tr>
    	<td align="right">
        	School Name :
        </td>
        <td>
        	<input type="text" name="school" />
        </td>
    </tr>
    <tr>
    	<td align="right">
        	Contact Person :
        </td>
        <td>
        	<input type="text" name="person" />
        </td>
    </tr>
    <tr>
    	<td align="right">
        	Mobile Number :
        </td>
        <td>
        	<input type="text" name="mob" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        	Top & Shirt Order No. :
        </td>
        <td>
        	<input type="text" name="order" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        	Matching Color :
        </td>
        <td>
        	<input type="text" name="color" />
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        <hr />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2">
        <h2>Boys</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<table align="center" border="1" rules="all">
            	<tr>
                	<th>No.</th>
                    <th>Particulars</th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td>1.</td>
                    <td>Pents/Shirts</td>
                    <td>
                    <label><input type="radio" name="b1" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b1" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r1" />
                    </td>
                    <td>
                    	<input type="text" name="rm1" style="width:400px;" />
                    </td>
                </tr>
                
                <tr>
                	<td>2.</td>
                    <td>Belt</td>
                    <td>
                    <label><input type="radio" name="b2" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b2" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r2" />
                    </td>
                    <td>
                    	<input type="text" name="rm2" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>3.</td>
                    <td>I-Card</td>
                    <td>
                    <label><input type="radio" name="b3" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b3" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r3" />
                    </td>
                    <td>
                    	<input type="text" name="rm3" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>4.</td>
                    <td>Tai</td>
                    <td>
                    <label><input type="radio" name="b4" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b4" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r4" />
                    </td>
                    <td>
                    	<input type="text" name="rm4" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>5.</td>
                    <td>Shoes</td>
                    <td>
                    <label><input type="radio" name="b5" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b5" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r5" />
                    </td>
                    <td>
                    	<input type="text" name="rm5" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>6.</td>
                    <td>Photo</td>
                    <td>
                    <label><input type="radio" name="b6" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b6" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r6" />
                    </td>
                    <td>
                    	<input type="text" name="rm6" style="width:400px;" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2">
        <h2>Girls</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<table align="center" border="1" rules="all">
            	<tr>
                	<th>No.</th>
                    <th>
                   	Particulars
                    </th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td>1.</td>
                    <td> <select name="gtype">
                    	<option> Salvar Top </option>
                        <option> Pina Frock </option>
                        <option> Gelish </option>
                    </select></td>
                    <td>
                    <label><input type="radio" name="fb1" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb1" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr1" />
                    </td>
                    <td>
                    	<input type="text" name="frm1" style="width:400px;" />
                    </td>
                </tr>
                
                <tr>
                	<td>2.</td>
                    <td>Belt</td>
                    <td>
                    <label><input type="radio" name="fb2" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb2" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr2" />
                    </td>
                    <td>
                    	<input type="text" name="frm2" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>3.</td>
                    <td>I-Card</td>
                    <td>
                    <label><input type="radio" name="fb3" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb3" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr3" />
                    </td>
                    <td>
                    	<input type="text" name="frm3" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>4.</td>
                    <td>Tai</td>
                    <td>
                    <label><input type="radio" name="fb4" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb4" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr4" />
                    </td>
                    <td>
                    	<input type="text" name="frm4" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>5.</td>
                    <td>Shoes</td>
                    <td>
                    <label><input type="radio" name="fb5" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb5" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr5" />
                    </td>
                    <td>
                    	<input type="text" name="frm5" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>6.</td>
                    <td>Photo</td>
                    <td>
                    <label><input type="radio" name="fb6" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb6" checked="checked" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr6" />
                    </td>
                    <td>
                    	<input type="text" name="frm6" style="width:400px;" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="hidden" name="odate" value=" <?php echo date('d-m-Y');?>" />
        	<input type="submit" name="save" value="Save Job Order" />
        </td>
    </tr>
</form>
</table>
