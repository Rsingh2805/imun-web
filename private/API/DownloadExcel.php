<?php
require_once("db-config.php");

$output = '';

$setSql = "SELECT * FROM `registered`";
$setRec = mysqli_query($connection, $setSql);
if(mysqli_num_rows($setRec) > 0){
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
	while($row = mysqli_fetch_array($setRec)){
		$output .= '
		<tr>
		<td>'.$row['full_name'].'</td>
		<td>'.$row['email'].'</td>
		<td>'.$row['sex'].'</td>
		<td>'.$row['date_of_birth'].'</td>
		<td>'.$row['nationality'].'</td>
		<td>'.$row['country_of_residence'].'</td>
		<td>'.$row['currently_enrolled_as'].'</td>
		<td>'.$row['major_field_of_study'].'</td>
	<td>'.$row['high_school_name'].'</td>
	<td>'.$row['food_preference'].'</td>
	<td>'.$row['size_shirt'].'</td>
	<td>'.$row['about_mun'].'</td>
	<td>'.$row['previous_imun'].'</td>
	<td>'.$row['why_mun'].'</td>
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

?>