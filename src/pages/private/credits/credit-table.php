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
            <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ADD SOMETHING HERE
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
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    DEDUCT SOMETHING HERE
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