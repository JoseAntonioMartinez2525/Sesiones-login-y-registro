<?php
	if (isset($_SESSION)==false || isset['id']==false) {
		header("Location:../");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	<style type="text/css">
				table,tbody, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			
		}
				#updateForm{
			display: none;
		}
	</style>
</head>
<body>
<h1>Movies</h1>
<table>
	<thead>
		<th>
			#
		</th>
		<th>
			title
		</th>
		<th>
			cover
		</th>
		<th>
			minutes
		</th>
		<th>
			category
		</th>		
	</thead>
	<br>

</table>
	<br>
	<form action="../app/movieController.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>
				Add movie
			</legend>
			<label>title</label>
				<input type="text" name="title" placeholder="movie_name" required=""><br>

				<label>Description</label>
				<textarea name="description" rows="5" placeholder="description" required=""></textarea> 

				<br>

				<label>Cover</label>
				<input type="file" name="cover" required=""><br>
				<label>minutes</label>
				<input type="number" name=minutes placeholder="80" required=""><br>

				<label>Classification</label>
				<select name="classification">
					<option>B15</option>
					<option>BA</option>				
				</select>
				<br>

				<label>Category</label>
				<select name="category_id" required="">	
				<?php foreach ($categories as $category):?>
    			<option value="<?=$category['id']?>" ><?=$category['name'] ?></option>
				
				<?php endforeach ?>
				</select>
			<br>
			<button type="submit">
				Save
			</button>
			<input type="hidden" name="action" value="store">
		</fieldset>
	</form>
</body>
</html>