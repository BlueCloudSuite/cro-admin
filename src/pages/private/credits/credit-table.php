<table id="credit-table" class="cro-table" width="100%">
  <thead>
    <tr>
      <th hidden>ID</th>
      <th>Name</th>
      <th>Free</th>
      <th>Total Credits</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i < 8; $i++) : ?>
      <tr>
        <td hidden>1</td>
        <td>ABCD EFG</td>
        <td>0</td>
        <td>1</td>
        <td class="actions">
          <div class="add-modal d-inline">
            <div class="modal fade p-0" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <span class="fs-5 text-white">
                      Modal Title Here
                    </span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <span class="fs-5 fw-semibold me-2">
                      <?php echo User::currentUser()->getFullName(); ?>
                    </span>
                    <span class="fs-7">
                      (Available credits here: )
                    </span>
                    <div class="row my-3">
                      <label for="addCredits" class="col-sm-3 col-form-label">Add Credits</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="addCredits">
                      </div>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div>
                        <button type="button" class="btn btn-success me-2">
                          <span>Save</span>
                        </button>
                      </div>
                      <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-success" name="message" value="MESSAGE">
              <i class=" bi bi-plus" aria-hidden="true"></i>
              <span class="d-none d-lg-inline">Add</span>
            </button>
          </div>
          <div class="deduct-modal d-inline">
            <div class="modal fade" id="deductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <span class="fs-5 text-white">
                      Modal Title Here
                    </span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <span class="fs-5 fw-semibold me-2">
                      <?php echo User::currentUser()->getFullName(); ?>
                    </span>
                    <span class="fs-7">
                      (Existing credits here: )
                    </span>
                    <div class="row my-3">
                      <label for="deductCredits" class="col-sm-4 col-form-label">Deduct Credits</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="deductCredits">
                      </div>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div>
                        <button type="button" class="btn btn-success me-2">
                          <span>SAVE</span>
                        </button>
                      </div>
                      <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                          CANCEL
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#deductModal" class="btn btn-danger" name="message" value="MESSAGE">
              <i class=" bi bi-dash" aria-hidden="true"></i>
              <span class="d-none d-lg-inline">Deduct</span>
            </button>
          </div>
        </td>
      </tr>
    <?php endfor; ?>
  </tbody>
</table>