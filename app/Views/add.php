<!-- ajout.php (view) -->
<html>

<head>
  <title>Ajout</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
  <div class="container mt-4">
    <div class="card">
      <div class="card-head">
        <div class="card-body">
          <h1>New User</h1>
        </div>
      </div>
    </div>
    <form method="post" action="add">
      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="first_name" required />
        <label for="">First name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="last_name" required />
        <label for="">Last name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" placeholder="email@gmail.com" class="form-control" name="email" required />
        <label for="">Email</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="username" required />
        <label for="">Username</label>
      </div>

      <div class="form-floating mb-3">
        <input type="number" placeholder="age" name="age" class="form-control" required />
        <label for="">Age</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" placeholder="strong password" name="password" class="form-control" required />
        <label for="">Password</label>
      </div>
      <input type="submit" class="btn btn-outline-primary" value="Add" />
    </form>
  </div>
</body>

</html>
