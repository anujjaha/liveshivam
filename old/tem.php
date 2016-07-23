<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {

$( "#sortable" ).sortable();
//$( "#sortable" ).disableSelection();
});
</script>
</head>
<body>

<ol id="sortable">
<?php
for($i=1;$i<=$num_students;$i++)
{
?>
<li class="ui-state-default">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="student_name[<?php echo $i;?>]" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="student_gender[<?php echo $i;?>]">
                            <option value="Male"> Boy </option>
                            <option value="Female"> Girl </option>
                            <option value="None"> None </option>
                        </select>
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="student_size[<?php echo $i;?>]">
                        
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
     <select name="student_shoes_size[<?php echo $i;?>]">
							<option> - </option>
                            <option> -13 </option>
                            <option> -12 </option>
                            <option> -11 </option>
                            <option> -10 </option>
                            <option> -9 </option>
                            <option> -8 </option>
                            <option> -7 </option>
                            <option> -6 </option>
                            <option> -5 </option>
                            <option> -4 </option>
                            <option> -3 </option>
                            <option> -2 </option>
                            <option> -1 </option>
                            <option> +1 </option>
                            <option> +2 </option>
                            <option> +3 </option>
                            <option> +4 </option>
                            <option> +5 </option>
                            <option> +6 </option>
                            <option> +7 </option>
                            <option> +8 </option>
                            <option> +9 </option>
                            <option> +10 </option>
                            <option> +11 </option>
                            <option> +12 </option>
                            <option> +13 </option>
                            
                        </select>
</li>
<?php
}
?>
</ol>

