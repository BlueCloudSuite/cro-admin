<div class="col-sm-12 col-lg-8 my-3">
  <div class="card p-3">
    <div class="fs-5">
      <i class="bi bi-bell-fill"></i> <span class="m-1">Notifications</span>
    </div>
    <div class="row mt-3">
      <div>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="btnradio1">All</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio2">Messages</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio3">Updates</label>
        </div>
        <div class="card notification-list scrollable-list mt-4 border-secondary">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="card item p-3 my-1">
              <div class="fs-6">
                <div><span class="fw-bold">Shelton Strawder</span> sent a message</div>
                <div class="text-secondary">2023-04-24 23:48:46</div>
                <div class="m-2 ms-0">
                  <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample<?php echo $i; ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i; ?>">
                    View
                  </a>
                </div>
                <div class="collapse" id="collapseExample<?php echo $i; ?>">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?>
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="card item p-3 my-1">
              <div class="fs-6">
                <div><span class="fw-bold">Bajade Elaine</span> updated Anthony Agront business logo for LMTLS Enterprises</div>
                <div class="text-secondary">2023-04-24 23:48:46</div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "./src/pages/components/widgets/index.php" ?>