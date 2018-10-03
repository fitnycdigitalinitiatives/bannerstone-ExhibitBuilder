<div class="row full-screen" id="text-only">
  <div class="col-md-6 col-lg-5 col-xl-4" id="text-only-block">
    <h1>
      <?php if ($pageParent = get_current_record('exhibit_page')->getParent()): ?>
        <small class="text-muted">
          <?php echo metadata($pageParent, 'title'); ?>
        </small></br>
      <?php endif; ?>
      <?php echo metadata('exhibit_page', 'title'); ?>
    </h1>
    <?php echo $text; ?>
    <div class="d-none d-md-block" id="exhibit-nav">
      <?php if ($prevLink = exhibit_builder_link_to_previous_page('<i class="material-icons">keyboard_arrow_left</i><span class="sr-only">Previous</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnPrevious', 'aria-label' => 'Previous'))): ?>
        <?php echo $prevLink; ?>
      <?php else: ?>
        <?php echo exhibit_builder_link_to_exhibit(null, '<i class="material-icons">keyboard_arrow_left</i><span class="sr-only">Previous</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnPrevious', 'aria-label' => 'Previous')); ?>
      <?php endif; ?>
      <?php if ($nextLink = exhibit_builder_link_to_next_page('<i class="material-icons">keyboard_arrow_right</i><span class="sr-only">Next</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnNext', 'aria-label' => 'Next'))): ?>
        <?php echo $nextLink; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
