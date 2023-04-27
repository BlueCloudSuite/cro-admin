<div class="col-sm-12 col-lg-8 mt-3">
  <div class="card p-3">
    <div class="row">
      <div class="fs-4 col-xs-12 col-sm-6">
        <i class="bi bi-people-fill"></i> <span class="m-1">Client list</span>
      </div>
      <div class="fs-4 col-xs-12 col-sm-6 text-xs-start text-sm-end">
        <button type="button" class="btn btn-success btn-sm"><i class="bi bi-person-plus-fill"></i><span class="m-1">Add</span></button>
        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-cloud-arrow-up-fill"></i><span class="m-1">Import / Export</span></button>
      </div>
    </div>
    <?php include("./src/components/table.php") ?>
  </div>
  <div class="card p-3 mt-3">
    <div class="fs-5">
      <i class="bi bi-list-stars"></i> <span class="m-1">Round Ends</span>
    </div>
    <?php include("./src/components/table.php") ?>
  </div>
  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-list-stars"></i> <span class="m-1">CRO Client Portal Link</span>
      <?php include("./src/components/table.php") ?>
    </div>
  </div>
</div>

<?php include "./src/components/widgets/index.php" ?>