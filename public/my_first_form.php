<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>

	<style>

	</style>

	<link rel="stylesheet" href="css_intro.css">
</head>

<?php var_dump ($_POST); ?>

<body>
<header>User Login</header>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="Enter username here">
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="Password" type="password" placeholder="Enter password here">
		</p>
		<p>
			<input type="submit" value="Login" > 
		</p>
	</form>	
<header>Compose an Email</header>
	<main>
		<section>
			<form method="POST" action="/my_first_form.php">
				<p>
					<label for="recipient">To</label>
					<input id="recipient" name="recipient" placeholder="Enter recipient's email address here" type="text" placeholder="Enter recipient's email address here">
				</p>	
				<p>
					<label for="from">From</label>
					<input id="sender" name="sender" placeholder="Enter your email address here" type="text">
				</p>
				<p>
					<label for="subject">Subject</label>
					<input id="subject" name="subject" placeholder="Enter email subject here"fi- type="text">
				</p>
					<textarea id="email_body" name="email_body">Content Here</textarea>
				<p>
					<input type="submit" value="send">
				</p>
				<p>
					<label for="save">Save a copy to your 'Sent' folder?</label>
					<input type="checkbox" id="save" name="save" value="yes" checked="checked">
				</p>
			</form>
		</section>

		<section>
			<header><h1>Multiple Choice Test</h1></header>

				<form method="POST" action="/my_first_form.php">
					<p>
						<p>This is question 1?</p>
							<label><input type="radio" name="question1[]" id="answerchoice1" value="answerchoice1">Answer Choice 1</label><br>
							<label><input type="radio" name="question1[]" id="answerchoice2" value="answerchoice2">Answer Choice 2</label><br>
							<label><input type="radio" name="question1[]" id="answerchoice3" value="answerchoice3">Answer Choice 3</label><br>
							<label><input type="radio" name="question1[]" id="answerchoice4" value="answerchoice4">Answer Choice 4</label><br>
					</p>

					<p>
						<p>This is question 2?</p>
							<label><input type="radio" name="question2[]" id="answerchoice1" value="answerchoice1">Answer Choice 1</label><br>
							<label><input type="radio" name="question2[]" id="answerchoice2" value="answerchoice2">Answer Choice 2</label><br>
							<label><input type="radio" name="question2[]" id="answerchoice3" value="answerchoice3">Answer Choice 3</label><br>
							<label><input type="radio" name="question2[]" id="answerchoice4" value="answerchoice4">Answer Choice 4</label><br>
					</p>

					<p>
						<p>What's your favorite color?</p>
							<label><input type="checkbox" name="favorite_color" id="red" value="red">Red</label>
							<label><input type="checkbox" name="favorite_color" id="blue" value="red">Blue</label>
							<label><input type="checkbox" name="favorite_color" id="green" value="red">Green</label>
							<label><input type="checkbox" name="favorite_color" id="yellow" value="red">Yellow</label>
							<label><input type="checkbox" name="favorite_color" id="orange" value="red">Orange</label>
					</p>

					<p>
						<p>What is your favorite type of puppy?</p>
							<select id="favorite_puppies" name="favorite_puppies[]" multiple>
								<option value="1">Golden Retriever</option>
								<option value="2">Corgie</option>
								<option value="3">Pug</option>
							</select>
					</p>

					<p>
						<label for="submit">Submit Responses</label>
						<input type="submit" name="submit" id="submit" value="Submit">
					</p>
				</form>
		</section>
		<section>
			<header><h1>Select Testing</h1></header>
			<form method="POST" action="/my_first_form.php">
					<label for="puppies"> Are Golden Retrievers the cutest puppies?</label>
						<select id="puppies" name="puppies">
							<option value="1"selected>Yes</option>
							<option value="0">No</option>
						</select>
				<p>
					<label for="submit">Submit your response</label>
					<input type="submit" name="submit" id="submit" value="Submit">
				</p>
			</form>
		</section>
	</main>
</body>
</html>