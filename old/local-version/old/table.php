<?php

$html = '
    <html>
    <head>
    <style>
        table {
        width: 100%;
            border-collapse: collapse;border:1px solid;
        }       
        tr {

        }
        td {
			border:1px solid;
            width: 38mm;
            height: 36.4mm;
            margin: 0 1mm;
            text-align: center;
            vertical-align:middle; 
        }
    </style>
    </head>
    <body>
    <table>
	<tr>
	<td colspan="5" align="center" style="height:150px;">
	<h2> Size Chart </h2>
	</td>
	</tr>
	';

    for ($i = 0; $i < 7; $i++)
    {
        $html .= '<tr>';
        for($j = 0; $j < 5; $j++)
        {
            $html .= '<td align="center">Testing</td>';
        }
        $html .= '</tr>';
    }       

$html .= '</table>
    </body>
    </html>';

    include("mpdf/mpdf.php");

    $mpdf = new mPDF('c', 'A4', '', '',1 , 1, 1, 1, 1,1);

    $mpdf->SetDisplayMode('fullpage');

    $mpdf->list_indent_first_level = 0;

    $mpdf->WriteHTML($html,0);

    $mpdf->Output('test.pdf','I');
    exit;

?>