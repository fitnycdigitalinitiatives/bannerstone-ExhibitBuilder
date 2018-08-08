<div class="row">
  <div class="col-12" id="text">
    <div class="row justify-content-center">
      <div class="col-md-4 d-flex">
        <div id="text-only-block">
          <h1>
            <?php if ($pageParent = get_current_record('exhibit_page')->getParent()): ?>
              <small class="text-muted">
                <?php echo metadata($pageParent, 'title'); ?>
              </small></br>
            <?php endif; ?>
            <?php echo metadata('exhibit_page', 'title'); ?>
          </h1>
          <?php echo $text; ?>
        </div>
      </div>
    </div>
  </div>
</div>
