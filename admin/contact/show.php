<?php
require("../../db/connect.php");
$base_url="../";
include("../layouts/app.php");
(int)$id=!empty($_GET["id"])? (int)$_GET["id"] : 0;
if($id===0){
  header("Location:index.php");
}else{
  $sql="SELECT * FROM contacts WHERE id=:id";
  $stmt=$conn->prepare($sql);
  $stmt->execute([
    ':id'=>$id
  ]);
  $contact=$stmt->fetch();
  
  $sql="UPDATE contacts SET view=1";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}

?>
  <div class="page-wrap">
    <div class="panel">
      <div class="row g-3">
        <div class="col-md-6">
          <div class="panel panel-soft">
            <small class="text-secondary d-block mb-1">Ism</small>
            <strong><?=$contact["name"]?></strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-soft">
            <small class="text-secondary d-block mb-1">Email</small>
            <strong><?=$contact["email"]?></strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-soft">
            <small class="text-secondary d-block mb-1">Mavzu</small>
            <strong>Yangi loyiha</strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-soft">
            <small class="text-secondary d-block mb-1">Sana</small>
            <strong>2026-04-02</strong>
          </div>
        </div>
        <div class="col-12">
          <div class="panel panel-soft">
            <small class="text-secondary d-block mb-2">Xabar matni</small>
            <p class="mb-0">Assalomu alaykum, men portfolio saytingiz uslubida yangi loyiha qildirmoqchiman.</p>
          </div>
        </div>
        <div class="row" >
          <a href="index.php" class="btn btn-sm btn-success" >qaytish</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
