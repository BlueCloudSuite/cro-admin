<div class="col-sm-12 col-lg-8 mt-3">
  <div class="card p-3">
    <div class="fs-5">
      <i class="bi bi-bell-fill"></i> <span class="m-1">Notifications</span>
    </div>
    <div class="row mt-3">
      <div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-primary">
            All
          </button>
          <button type="button" class="btn btn-primary">
            Messages
          </button>
          <button type="button" class="btn btn-primary">Updates</button>
        </div>
        <div class="card notification-list scrollable-list mt-4 border-secondary">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="card item p-3">
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
            <div class="card item p-3">
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

<?php include "./src/components/widgets/index.php" ?>