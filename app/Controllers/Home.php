<?php
# Home.php (Controller)

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
  public function index(): string
  {
    $model = new UserModel();
    $data['user'] = $model->findAll();
    return view('list', $data);
  }

  public function home()
  {
    return view('home');
  }

  public function addForm()
  {
    return view('add');
  }

  public function add()
  {
    $session = session();
    $model = new UserModel();
    $data = [
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name'),
      'email' => $this->request->getPost('email'),
      'age' => $this->request->getPost('age'),
      'username' => $this->request->getPost('username'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
    ];
    $model->insert($data);
    $session->set("success", "Added...");
    return redirect()->to("/");
  }

  public function delete($id)
  {
    $session = session();
    $model = new UserModel();
    $model->delete($id);
    $session->set("success", "Deleted...");
    return redirect()->to("/");
  }

  public function update($id)
  {
    $session = session();
    $model = new UserModel();
    $data = [
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name'),
      'email' => $this->request->getPost('email'),
      'age' => $this->request->getPost('age'),
      'username' => $this->request->getPost('username'),
      'password' => $this->request->getPost('password')
    ];
    $model->update($id, $data);
    $session->set("success", "Updated...");
    return redirect()->to("/");
  }

  public function updateForm($id)
  {
    $userModel = new UserModel();
    $data['user'] = $userModel->find($id);
    return view('edit', $data);
  }

  public function search()
  {
    $session = session();
    $key = $this->request->getGet("key");
    if ($key == "") {
      return redirect()->to("/");
    }
    $model = new UserModel();
    $data["user"] = $model->like("first_name", $key)->orLike("last_name", $key)->orLike("age", $key)->orLike("username", $key)->orLike("id", $key)->findAll();
    $data["key"] = $key;

    $userCount = count($data["user"]);

    $session->set("success", count($data["user"]) . ($userCount == 1 ? " row" : " rows") . " found");
    return view("list", $data);
  }
}
