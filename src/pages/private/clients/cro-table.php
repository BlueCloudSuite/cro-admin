<table id="cro-table" class="cro-table" width="100%">
  <thead>
    <tr>
      <th hidden>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <td hidden>1</td>
    <td>ABCD EFG</td>
    <td>0</td>
    <td>1</td>
    <td class="actions">
      <div class="message-modal d-inline">
        <div class="modal fade" id="croMessageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                CRO MESSAGE HERE
              </div>
            </div>
          </div>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#croMessageModal" class="btn btn-success" name="message" value="MESSAGE">
          <i class=" bi bi-envelope" aria-hidden="true"></i>
          <span class="d-none d-lg-inline">Message</span>
        </button>
      </div>
      <div class="preview-modal d-inline">
        <div class="modal fade" id="croPreviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                CRO PREVIEW HERE
              </div>
            </div>
          </div>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#croPreviewModal" class="btn btn-danger" name="message" value="MESSAGE">
          <i class=" bi bi-eye" aria-hidden="true"></i>
          <span class="d-none d-lg-inline">Preview</span>
        </button>
      </div>
    </td>
  </tbody>
</table>