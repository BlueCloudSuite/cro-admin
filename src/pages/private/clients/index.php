<div class="col-sm-12 col-lg-8 mt-3">
  <div class="card p-3">
    <div class="row">
      <div class="fs-4 col-xs-12 col-sm-6">
        <i class="bi bi-people-fill"></i> <span class="m-1">Client list</span>
      </div>
      <div class="fs-4 col-xs-12 col-sm-6">
        <div class="add-client-modal">
          <div class="modal fade p-0" id="addClientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                  <span class="fs-5 text-white">
                    Modal Title Here
                  </span>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mx-3">
                    <span class="fs-4">
                      Add Client
                    </span>
                    <p class="fs-6 fw-light">
                      Add a new client and turn on portal access so they can complete client onboarding and order
                      reports so you can import them and run a credit audit. You can also import and audit for a
                      lead (without the portal), but you'll need to send them a credit monitoring service to signup with.
                    </p>
                  </div>
                  <div class="container">
                    <span class="fs-6 fw-bold mx-1">
                      Personal Details:
                    </span>
                    <div class="row">
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="First Name" aria-label="New Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="Middle Name (Optional)" aria-label="Confirm Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="Last Name" aria-label="New Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="number" class="form-control my-2" placeholder="Phone" aria-label="Confirm Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-12">
                        <input type="text" class="form-control my-2" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="container mt-3">
                    <span class="fs-6 fw-bold mx-1">
                      Business Details:
                    </span>
                    <div class="row">
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="Business Name" aria-label="New Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="Street Number" aria-label="Confirm Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="State" aria-label="New Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="City" aria-label="Confirm Password" aria-describedby="basic-addon1">
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <input type="text" class="form-control my-2" placeholder="Zip Code" aria-label="Email" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mt-2 me-3">
                    <button type="button" class="btn btn-success me-2">
                      <span>Save</span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                      <span>Cancel</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="add-client-modal">
          <div class="modal fade" id="importExportModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                  <span class="fs-5 text-white">
                    Modal Title Here
                  </span>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mx-3">
                    <span class="fs-4">
                      Import / Export
                    </span>
                    <p class="fs-6 fw-light">
                      Add a new client and turn on portal access so they can complete client onboarding and order reports so you can import
                      them and run a credit audit. You can also import and audit for a lead (without the portal),
                      but you'll need to send them a credit monitoring service to signup with.
                    </p>
                  </div>
                  <div class="mx-3">
                    <input type="file" class="form-control" id="customFile" />
                  </div>
                  <div class="d-flex justify-content-end mt-2 me-3">
                    <button type="button" class="btn btn-primary me-2">
                      <span>Import</span>
                    </button>
                    <button type="button" class="btn btn-primary">
                      <span>Export</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-sm-end">
          <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addClientModal">
            <i class="bi bi-person-plus-fill"></i>
            <span class="m-1">
              Add
            </span>
          </button>
          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#importExportModal">
            <i class="bi bi-cloud-arrow-up-fill"></i>
            <span class="m-1">
              Import / Export
            </span>
          </button>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <?php include("./src/pages/private/clients/client-table.php") ?>
    </div>
  </div>
  <div class="card p-3 mt-3">
    <div class="fs-5">
      <i class="bi bi-list-stars"></i> <span class="m-1">Round Ends</span>
    </div>
    <div class="mt-3">
      <?php include("./src/pages/private/clients/round-end-table.php") ?>
    </div>
  </div>
  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-list-stars"></i> <span class="m-1">CRO Client Portal Link</span>
    </div>
    <div class="mt-3">
      <?php include("./src/pages/private/clients/cro-table.php") ?>
    </div>
  </div>
</div>

<?php include "./src/pages/components/widgets/index.php" ?>