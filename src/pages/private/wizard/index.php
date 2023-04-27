<div class="col-sm-12 col-lg-8 mt-3">
  <div class="card p-3">
    <div class="fs-4">
      <i class="bi bi-lightning-fill"></i> <span class="m-1">Active Clients status</span>
    </div>
    <p class="fs-6 mt-3 text-justify">
      Select a client to update score status. <br />
      To update dispute status from R(n) - Processed to R(k) - Waiting, click on arrow button.
      <br />
      Please keep in mind that updating the client's status will notify the cro and the client.
    </p>
    <?php include("./src/components/table.php") ?>
  </div>
  <div class="card p-3 my-3">
    <div class="fs-5">
      Step 1. Access client's credit report
    </div>
    <p class="fs-6 mt-3 text-justify">
      Search for active CRO's clients who has completed their onboarding and successfully linked a credit monitoring account.
    </p>
    <input class="form-control form-control flex-grow-1" type="text" placeholder="Search" aria-label=".form-control-sm example" />
  </div>
</div>

<?php include "./src/components/widgets/index.php" ?>