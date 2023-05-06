<div class="col-sm-12 col-lg-8">
  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-person-fill"></i> <span class="m-1">Account Settings</span>
      <p class="fs-6 mt-3 text-justify">
        Update the account settings. (Change Password, Email, Contact Details, etc.) <br>
        **Please leave field blank if no changes should be made
      </p>
      <div class="m-2 ms-0 text-center">
        <button class="btn btn-secondary btn-sm mt-3" data-bs-toggle="collapse" href="#collapseProflie" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
          <i class="bi bi-chevron-compact-down fs-4"></i>
        </button>
      </div>
      <div class="collapse" id="collapseProflie">
        <div class="card card-body">
          <div class="account-image d-flex justify-content-center">
            <img src="https://storage.googleapis.com/preview-production-assets/funnel/img/img_400x300.png" class="rounded-3 shadow-4" style="width: 150px;" alt="Avatar" />
          </div>
          <div class="container text-center">
            <div class="row">
              <div class="col-sm-12 col-lg-12">
                <input type="text" class="form-control mt-2" placeholder="Gmail" aria-label="Gmail" aria-describedby="basic-addon1">
              </div>
              <div class="col-sm-12 col-lg-6">
                <input type="text" class="form-control mt-2" placeholder="New Password" aria-label="New Password" aria-describedby="basic-addon1">
              </div>
              <div class="col-sm-12 col-lg-6">
                <input type="text" class="form-control mt-2" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-primary m-1">Update</button>
            <button type="button" class="btn btn-secondary m-1 mr-0">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TEAM MEMBER BOX -->
  <!-- TEAM MEMBER BOX -->
  <!-- TEAM MEMBER BOX -->

  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-person-fill"></i> <span class="m-1">Team Members</span>
      <p class="fs-6 mt-3 text-justify">
        Add admin account to access super admin portal. (Change Password, Email, Contact Details, etc.) <br>
        **Please leave field blank if no changes should be made
      </p>
      <div class="m-2 ms-0 text-center">
        <button class="btn btn-secondary btn-sm mt-3" data-bs-toggle="collapse" href="#collapseMember" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
          <i class="bi bi-chevron-compact-down fs-4"></i>
        </button>
      </div>
      <div class="collapse" id="collapseMember">
        <div class="card card-body">
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="file" class="form-control" id="customFile" />
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="image-upload-btn fs-6 my-2 col-sm-12 col-lg-12">
                <label class="form-label" for="customFile">Upload Image</label>
                <input type="file" class="form-control" id="customFile" />
              </div>
              <div class="col-sm-12 col-lg-12">
                <input type="text" class="form-control mt-2" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
              </div>
              <div class="col-sm-12 col-lg-6">
                <input type="text" class="form-control mt-2" placeholder="New Password" aria-label="New Password" aria-describedby="basic-addon1">
              </div>
              <div class="col-sm-12 col-lg-6">
                <input type="text" class="form-control mt-2" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-primary m-1">Create Account</button>
            <button type="button" class="btn btn-secondary m-1 mr-0">Cancel</button>
          </div>
          <div class="fs-6">
            <?php include("./src/components/table.php") ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTRACTS BOX -->
  <!-- CONTRACTS BOX -->
  <!-- CONTRACTS BOX -->

  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-envelope-paper-fill"></i> <span class="m-1">Contracts</span>
      <p class="fs-6 mt-3 text-justify">
        Edit contract agreement.
      </p>
      <div class="m-2 ms-0 text-center">
        <button class="btn btn-secondary btn-sm mt-3" data-bs-toggle="collapse" href="#collapseContracts" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
          <i class="bi bi-chevron-compact-down fs-4"></i>
        </button>
      </div>
      <div class="collapse" id="collapseContracts">
        <div class="card card-body">
          <textarea class="form-control" aria-label="With textarea" rows=12></textarea>
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-primary m-1">Update</button>
            <button type="button" class="btn btn-secondary m-1 mr-0">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- COMPANY SETTINGS BOX -->
  <!-- COMPANY SETTINGS BOX -->
  <!-- COMPANY SETTINGS BOX -->

  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-building-fill"></i> <span class="m-1">Company Settings</span>
      <p class="fs-6 mt-3 text-justify">
        Edit or customize the company settings
      </p>
      <div class="m-2 ms-0 text-center">
        <button class="btn btn-secondary btn-sm mt-3" data-bs-toggle="collapse" href="#collapseBackUp" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
          <i class="bi bi-chevron-compact-down fs-4"></i>
        </button>
      </div>
      <div class="collapse" id="collapseBackUp">
        <div class="card card-body">
          <div class="back-up-upload-btn fs-6 mt-3">
            <label class="form-label" for="customFile">Edit Company Logo</label>
            <input type="file" class="form-control" id="customFile" />
          </div>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="file" class="form-control" id="customFile" />
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-primary m-1">Update</button>
            <button type="button" class="btn btn-secondary m-1 mr-0">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ANNOUNCEMENT BOX -->
  <!-- ANNOUNCEMENT BOX -->
  <!-- ANNOUNCEMENT BOX -->

  <div class="card p-3 my-3">
    <div class="fs-5">
      <i class="bi bi-megaphone-fill"></i> <span class="m-1">Announcement</span>
      <p class="fs-6 mt-3 text-justify">
        You can create an announcement to share important information with all users.
      </p>
      <div class="m-2 ms-0 text-center">
        <button class="btn btn-secondary btn-sm mt-3" data-bs-toggle="collapse" href="#collapseAnnouncement" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
          <i class="bi bi-chevron-compact-down fs-4"></i>
        </button>
      </div>
      <div class="collapse" id="collapseAnnouncement">
        <div class="dropdown mt-4 mb-2">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actions
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Maintenance</a></li>
            <li><a class="dropdown-item" href="#">Down Server</a></li>
            <li><a class="dropdown-item" href="#">Update</a></li>
          </ul>
        </div>
        <div class="card card-body">
          <textarea class="form-control" aria-label="With textarea" rows=12></textarea>
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-primary m-1">Submit</button>
            <button type="button" class="btn btn-secondary m-1 mr-0">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "./src/pages/components/widgets/index.php" ?>