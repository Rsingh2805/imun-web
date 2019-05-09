<?php
session_start();

function getExcel($data){
    $output = '';
    if(count($data)>0){
        $output .= '<table>
		<tr>
		<th>Fullname</th>
		<th>Email</th>
		<th>Sex</th>
				<th>Date of Birth</th>
				<th>Nationality</th>
				<th>Country of Residence</th>
				<th>Currently Enrolled As</th>
				<th>Major Field of Study</th>
				<th>High School Name</th>
				<th>Food Preference</th>
				<th>Size Shirt</th>
				<th>About MUN</th>
				<th>Previous MUN</th>
				<th>Why MUN?</th>
		</tr>';
        foreach($data as $row){
            $output .= '
		<tr>
		<td>'.$row['full_name'].'</td>
		<td>'.$row['email'].'</td>
		<td>'.$row['sex'].'</td>
		<td>'.$row['dob'].'</td>
		<td>'.$row['nationality'].'</td>
		<td>'.$row['residence_country'].'</td>
		<td>'.$row['enrolled_as'].'</td>
		<td>'.$row['field_of_study'].'</td>
	<td>'.$row['univ_name'].'</td>
	<td>'.$row['food_preference'].'</td>
	<td>'.$row['tshirt_size'].'</td>
	<td>'.$row['known_from'].'</td>
	<td>'.$row['prev_experience'].'</td>
	<td>'.$row['motivation_letter'].'</td>
</tr>

';
        }
        $output .= '</table>';

        header("Content-type: application/octet-stream");

        header("Content-Disposition: attachment; filename=IMUN_Applicants.xls");
//header("Content-Disposition: attachment; filename=IMUN_Applicants.csv");


        header("Pragma: no-cache");
        header("Expires: 0");

        echo $output;
    }
}

$data = $_SESSION['print'];
unset($_SESSION['print']);
getExcel($data);


