<?php include 'include/overall/header.php' ?>
<div class ="content">
	<h2 id = "title">User Information </h2>
	<form action="http://users.metropolia.fi/~kimmosa/web/aa.php" method="get" target="_blank">
		<label class="UserForm" for="Name">Name:</label><input class="UserInformationForm" type="text" name="user"><br>
		<label class="UserForm" for="Age">Age:</label><input class="UserInformationForm" type="number" name="age"><br>
		Do you have money? <input type="checkbox" name="money" value=""><br>
		<input type="submit" value="Submit">
	</form>
</div>
<?php include 'include/overall/footer.php' ?>
