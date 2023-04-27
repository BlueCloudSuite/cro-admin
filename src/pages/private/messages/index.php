<div class="col-sm-12 col-lg-4">
  <div class="card p-3 my-3 message-box">
    <div class="fs-5">
      <i class="bi bi-envelope-fill"></i><span class="m-2 fw-bold">Messages</span>
      <input class="form-control form-control flex-grow-1 my-2" type="text" placeholder="Search" aria-label=".form-control-sm example" />
    </div>
    <div class="scrollable-list">
      <?php for ($i = 0; $i < 8; $i++) : ?>
        <div class="card item p-4">
          <div class="fs-6">
            <div>
              <span class="">Shelton Strawder</span>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>
<div class="col-sm-12 col-lg-8 .d-flex">
  <div class="card p-3 mt-3 message-box">
    <div class="message-username mb-3">
      <span class="fw-bold">(NAME HERE) </span>
    </div>

    <div class="card scrollable-list">
      <?php for ($i = 0; $i < 8; $i++) : ?>
        <div class="card item p-4 my-1">
          <div class="fs-6">
            <div>
              <span class="">Shelton Strawder</span>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <div class="message-input mt-3">
      <div class="input-group">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline-primary">
          <i class="bi bi-paperclip" aria-hidden="true"></i>
        </button>
        <input type="text" class="form-control" placeholder="Send Message" aria-label="Send Message" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
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
    </div>
  </div>
</div>