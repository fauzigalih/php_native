<?php include "packages/header.php"; ?>

<div class="container">
  <h1 class="text-info mt-4">Data Users</h1>
  <a href="packages/create.php" class="btn btn-info text-light my-2">Tambah Data</a>
  <table class="table table-striped table-bordered">
    <thead class="table-info">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = $user->view();
        $no = 1;
        while ($row = $query->fetch_object()) {
      ?>
      <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $row->name ?></td>
        <td><?= $row->email ?></td>
        <td><?= '0'.$row->phone ?></td>
        <td>
          <a href="packages/update.php?id=<?= $row->id ?>">Update</a>
          <a href="?action=delete&id=<?= $row->id ?>">Delete</a>
        </td>
      </tr>
      <?php
        $no++;
        }
      ?>
    </tbody>
  </table>
</div>
<?php
  if (@$_GET['action'] == 'delete') {
    $delete = $user->delete($_GET['id']);
    if ($delete) header("location:".$base_url);
  }
?>
<?php include "packages/footer.php"; ?>