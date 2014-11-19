<?php include 'include/overall/header.php' ?>
<div id ="list">
	<p>Please fill in to receive our weekly news letter:</p>
	<form action="upload.php" method="post" target="_blank" enctype="multipart/form-data">
		<label for="FirstName">First name:</label><input type="text" name="FirstName"><br>
		<label for="Surname">Surname:</label><input type="text" name="Surname"><br>
		<label for="Email">Email:</label><input type="text" name="Email"><br>
		<input type="submit" value="Send">
	</form>
	<p>Sukky cars Ltd is company located in Helsinki. We are selling a lot of old and used cars. We make our best effort 
	that you are happy with your car. For excellent deals please contact our CEO Mr.Huttunen at 030-12334567.</p>
</div>
<?php include 'include/overall/footer.php' ?>
