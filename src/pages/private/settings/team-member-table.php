<table id="team-member-table" class="cro-table" width="100%">
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
    <?php for ($i = 0; $i < 2; $i++) : ?>
      <tr>
        <td hidden>1</td>
        <td>ABCD EFG</td>
        <td>0</td>
        <td>1</td>
        <td class="actions">
          <div class="view-modal d-inline">
            <div class="modal fade" id="viewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    VIEW
                  </div>
                </div>
              </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn btn-success" name="message" value="MESSAGE">
              <i class=" bi bi-eye" aria-hidden="true"></i>
              <span class="d-none d-lg-inline">View</span>
            </button>
          </div>
          <div class="delete-modal d-inline">
            <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    DELETE
                  </div>
                </div>
              </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger" name="message" value="MESSAGE">
              <i class=" bi bi-trash" aria-hidden="true"></i>
              <span class="d-none d-lg-inline">Delete</span>
            </button>
          </div>
        </td>
      </tr>
    <?php endfor; ?>
  </tbody>
</table>