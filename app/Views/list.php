<!-- liste.php (view) -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>" />
</head>

<body>
  <div class="container mt-4">
    <table class="table table-bordered">
      <div class="card">
        <div class="card-head">
          <div class="card-body">
            <form action="/filter" method="get">
              <h1>Users list</h1>
              <?php
              $session = session();
              if ($session->get("success")) {
              ?>
                <p class="alert alert-success"><?= $session->get("success") ?></p>
              <?php
                $session->set("success", "");
              }
              ?>
              <input type="text" placeholder="Search..." name="key" value="<?php if (isset($key)) echo $key ?>" />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Username</th>
          <th>Age</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($user))
          foreach ($user as $row):
        ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['first_name'] . " " . $row["last_name"] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['age'] ?></td>
            <td>
              <a href="<?= "/updateForm/" . $row['id'] ?>" class="btn btn-outline-primary">Edit</a>
              <a href=<?= "/delete/" . $row['id'] ?> class="btn btn-outline-danger">Delete</a>
            </td>
            <?php
            ?>
          </tr>
        <?php
          endforeach;
        ?>
      </tbody>
    </table>
    <a href="/addForm">New User</a>
  </div>
</body>

</html>
