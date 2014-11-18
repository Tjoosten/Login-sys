<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="page-header">
				<h3>Create a new account.</h3>
			</div>

			<form method="POST" action="/index.php/Account/insertDB" autocomplete="off">
				<label for="username">Username</label>
				<input type="text" id="username" class="form-control" name="Username" placeholder="Username" />
				<br>

				<label for="Email"> Email </label>
				<input type="text" id="Email" class="form-control" name="Email" placeholder="Email address" />
				<br>

				<label for="Password">Password:</label>
				<input type="text" id="Password" class="form-control" name="Password" placeholder="Password" />
				<br>

				<button class="btn btn-danger" type="reset">Reset!</button>
				<button class="btn btn-success" type="submit">Submit!</button>
			</form>
		</div>
	</div>
</div>