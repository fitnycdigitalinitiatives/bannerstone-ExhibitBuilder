<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>
  <div class="container-fluid">
    <div id="exhibit-blocks">
    <?php exhibit_builder_render_exhibit_page(); ?>
    </div>

    <div class="d-md-none" id="exhibit-nav">
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
  <nav class="navbar fixed-bottom bg-light d-none d-md-flex" id="exhibit-footer">
    <?php echo exhibit_builder_link_to_exhibit($exhibit, null, array('class' => 'navbar-brand text-dark')); ?>
  </nav>
<?php echo foot(); ?>
