<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>
<nav class="navbar bg-white d-none d-md-flex" id="exhibit-nav">
  <?php echo exhibit_builder_link_to_exhibit($exhibit, null, array('class' => 'navbar-brand text-dark ml-5')); ?>
  <button class="navbar-toggler btn" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="#f9683b" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
  </button>
</nav>
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
<?php echo foot(array('bodyid'=>'exhibit')); ?>
