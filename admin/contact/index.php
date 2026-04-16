<?php
require("../../db/connect.php"); 
$base_url = "../";
include("../layouts/app.php");
$sql = "SELECT * FROM contacts  ORDER BY id DESC  ";
$stmt=$conn->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll();

?>

    <div class="panel mb-3">
      <div class="title-row">
        <div>
          <h1 class="h4 mb-1">Contact xabarlari</h1>
          <small class="text-secondary">CRUD dizayn - list ko'rinishi</small>
        </div>
      
      </div>
      <div class="row g-2">
        <div class="col-md-4"><input type="text" class="form-control" placeholder="Ism bo'yicha qidirish"></div>
        <div class="col-md-4"><input type="email" class="form-control" placeholder="Email bo'yicha qidirish"></div>
        <div class="col-md-4"><button class="btn btn-outline-light w-100">Filter</button></div>
      </div>
    </div>

    <div class="panel panel-soft">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead>
            <tr>
              <th>#</th>
              <th>Ism</th>
              <th>Email</th>
              <th>Mavzu</th>
              <th>Sana</th>
              <th>Amal</th>
               <th>status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $item=0;
             foreach($contacts as $contact):
             $item++; ?>
            <tr>
              <td><?= $item ?></td>
              <td><?= $contact['name'] ?></td>
              <td><?= $contact['email'] ?></td>
              <td><?= $contact['subject'] ?></td>
              <td><?= $contact['created_at'] ?></td>
              <td class="d-flex gap-2">
                   <a href="show.php?id=<?=$contact["id"]?>" class="btn btn-sm btn-outline-info" >Ko'rish</a>
                   
<form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?= $contact["id"] ?>">
    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
</form>


                
                
                 </form>
              </td>
              <td>
                <?php if($contact['view'] == 0): ?>
                  <span class="badge text-bg-primary">Yangi</span>
                <?php else: ?>
                  <span class="badge text-bg-success">Ko'rilgan</span>
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>
