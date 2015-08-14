<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="edit.js"></script>
    	<link rel="stylesheet" href="style.css" />
    	<title>Editable Tables with jQuery</title>
    </head>
    <body>
    	<?php 
    		include 'db.php';
    	?>

    	<table>
    		<thead>
    			<tr>
    				<th>Course Description</th>
    				<th>Credits</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php 
    				$sql = 'SELECT * FROM course';
    				$results = $dbh->query($sql);
    				$rows = $results->fetchAll();

    				foreach ($rows as $row) {
    					echo '<tr id="'.$row['CourseNo'].'">';
    					echo '<td class="crsDesc">'.$row['crsDesc'].'</td><td class="CrsUnits">'.$row['CrsUnits'].'</td>';
    					echo '</tr>';
    				}
				?>
    		</tbody>
    	</table>

    </body>
</html>