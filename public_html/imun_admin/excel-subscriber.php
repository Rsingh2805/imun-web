<?php
session_start();
function getExcel($data){
    $output = '';
    if(count($data)>0){
        $output .= '<table>
		<tr>
		<th>Id</th>
		<th>Email</th>
		</tr>';
        foreach($data as $row){
            $output .= '
		<tr>
		<td>'.$row['id'].'</td>
		<td>'.$row['email'].'</td>
		
</tr>

';
        }
        $output .= '</table>';

        header("Content-type: application/octet-stream");

        header("Content-Disposition: attachment; filename=IMUN-subsc.xls");
//header("Content-Disposition: attachment; filename=IMUN_Applicants.csv");


        header("Pragma: no-cache");
        header("Expires: 0");

        echo $output;
    }
}

$data = $_SESSION['print'];
unset($_SESSION['print']);
getExcel($data);


