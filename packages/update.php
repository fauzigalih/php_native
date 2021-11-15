<?php 
    include 'header.php'; 
    $view = $user->view($_GET['id']);
    $row = $view->fetch_object();
?>

<div class="container">
    <h1 class="text-info mt-4">Update Data</h1>
    <form method="post" action="">
      <div class="mb-3">
          <label class="form-label">Name</label>
          <input name="name" type="text" class="form-control" value="<?= $row->name ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input name="email" type="email" class="form-control" value="<?= $row->email ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Phone</label>
          <input name="phone" type="number" class="form-control" value="<?= '0'.$row->phone ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_POST) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $update = $user->update($id, $name, $email, $phone);
  if ($update) header("location:".$base_url);
};


?>

<?php include 'footer.php'; ?>