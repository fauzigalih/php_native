<?php include 'header.php'; ?>

<div class="container">
    <h1 class="text-info mt-4">Create Data</h1>
    <form method="post" action="">
      <div class="mb-3">
          <label class="form-label">Name</label>
          <input name="name" type="text" class="form-control">
      </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input name="email" type="email" class="form-control">
      </div>
      <div class="mb-3">
          <label class="form-label">Phone</label>
          <input name="phone" type="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  
  $insert = $user->create($name, $email, $phone);
  if ($insert) header("location:".$base_url);
}
?>

<?php include 'footer.php'; ?>