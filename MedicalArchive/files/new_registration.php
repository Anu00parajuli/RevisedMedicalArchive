<!DOCTYPE html>
<html>
<head>
	<title>patient's registration page</title>
</head>
<body >
	<center>
	<h2> Registration Form</h2>
	<form>
		<label>First Name</label>
		<input type="text" name="firstname" required>
		<br/>
		<label>Last Name</label>
		<input type="text" name="lastname" required>
		<br/>
		<label>Age</label>
		<input type="number" name="age" required>
		<br/>
		<label>Gender</label>
	    <input type="radio" id="male" name="category" value="Male">
        <label for="doctor">Male</label>
        <input type="radio" id="female" name="category" value="Female">
        <label for="admin">Female</label>
		<br/>
		<label>Address</label>
		<input type="text" name="address">
		<br/>
        <label>Citizenship Number</label>
        <input type="text" name="Citizenshipnumber" required>
        <br>
        <label for="email">Email Address</label>
        <input type="text" name="email" required>
        <br>
        <label>Contact Number</label>
        <input type="text" name="phone number" required>
        <br>
        <label>Father's Name</label>
		<input type="text" name="father_name" required>
		<br/>

		 <button type="reset">Reset</button>
		 <button type="submit" class="registration_btn">Submit</button>



	</form>
</center>

</body>
</html>