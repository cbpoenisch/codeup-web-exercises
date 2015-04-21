
<!DOCTYPE html>
<html>
<?php var_dump($_GET) ?>

	<head>
		<title>Favorite Food</title>
	</head>

	<body>

		<header>
			<h1>Fruit Salad</h1>
		</header>

		<main>
			<h2>Ingredients</h2>
				<ol>
					<li>Whipped Cream</li>
					<li>Cocunut</li>
					<li>Pecans</li>
				</ol>

		<form method="GET">
			<p>
				<label for="suggestion">Suggestions:</label>
				<input type="text" id="suggestion" name="suggestion">
			</p>
			<p>
				<input type="submit" value="Send">
			</p>
		</form>

		</main>	

		<aside>
			<h3>Other foods you may like</h3>
				<ul>
					<li><a href="#" title="Link to food with whipped cream in the ingredients">Whipped Cream</a></li>
					<li><a href="#" title="Link to food with coconut in the ingredients">Coconut Water</a></li>
					<li><a href="#" title="Link to food with pecans in the ingredients">Pecan Pie</a></li>
				</ul>
		</aside>

	</body>

</html>