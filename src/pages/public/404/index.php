<div class="bg_color">
  <div class="cont_principal">
    <div class="cont_error">
      <span class="oops">
        Oops!
      </span>
      <span class="not">
        404 Not Found
      </span>
      <span class="p fs-3">
        <?php
        $current_url = $_SERVER['REQUEST_URI'];
        echo "The current URL is: " . $current_url;
        ?>
      </span>
      <div class="buttons">
        <button class="btn btn-secondary" type="button" id="button-addon2">Home</button>
      </div>
    </div>
    <div class="cont_aura_1 d-none d-md-block"></div>
    <div class="cont_aura_2 d-none d-md-block"></div>
  </div>
</div>