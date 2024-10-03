<html>
<!-- edit.php (view) -->

<head>
  <title>Ajout</title>
  <link rel="stylesheet" href=<?= base_url("bootstrap/css/bootstrap.css") ?> />
</head>

<body>
  <div class="container mt-4">
    <div class="card">
      <div class="card-head">
        <div class="card-body">
          <h1>Edit <?= $user["username"] ?>'s information</h1>
        </div>
      </div>
    </div>
    <form method="post" action=<?= "/update/" . $user['id'] ?>>
      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="first_name" value="<?= $user["first_name"] ?>" required />
        <label for="">First name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="last_name" value="<?= $user["last_name"] ?>" required />
        <label for="">Last name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" placeholder="email@gmail.com" class="form-control" name="email" value="<?= $user["email"] ?>" required />
        <label for="">Email</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" placeholder="type here" class="form-control" name="username" value="<?= $user["username"] ?>" required />
        <label for="">Username</label>
      </div>

      <div class="form-floating mb-3">
        <input type="number" placeholder="age" name="age" class="form-control" value="<?= $user["age"] ?>" required />
        <label for="">Age</label>
      </div>
      <input type="submit" name="edit" class="btn btn-outline-primary" value="Edit" />
      <a href="/" class="btn btn-outline-secondary">Cancel</a>
    </form>
  </div>
</body>

</html>
