<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>

<body>
  <div class="container">
    <form action="registerValidation.php" method="post">
      <div class="section">
        <h1>Register</h1>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <br>
        <input type="text" class="form-control" name="name" placeholder="Your name" required />
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <br>
        <input type="email" class="form-control" name="email" placeholder="Your email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <br>
        <input type="password" class="form-control" name="password" placeholder="Your password" required />
      </div>
      <div class="form-group">
        <label for="cfpassword">Confirm Password </label>
        <br>
        <input type="password" class="form-control" name="cfpassword" placeholder="Confirm your password" required />
      </div>
        <div class="form-group">
        <label for="dob">Date of Birth</label>
        <br>
        <input type="date" class="form-control" name="dob" required />
      </div>
              <div class="form-group">
        <label for="gender">Gender</label>
        <br>
          <input type="radio" name="gender" value="F" required>Female
          <input type="radio" name="gender" value="M">Male
      </div>
      <div class="form-button">
        <button type="submit" class="btn btn-success">Register now</button>
      </div>
    </form>
    <br>
    <div class="form-button">
      <a class="returnlogin" href="index.html" role="button">Already have an account? Login here</a>
    </div>
  </div>
  </form>
  </div>
</body>
</html>