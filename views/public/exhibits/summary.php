<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

  <div class="container-fluid">
    <div class="row full-screen" id="text-only">
      <div class="col-md-6 col-lg-5 col-xl-4" id="text-only-block">
          <h1 class="text-center" id="main-title">
            <?php echo metadata('exhibit', 'title'); ?>
          </h1>
          <?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
          <p class="text-center mb-1" id="credits">
          by <?php echo $exhibitCredits; ?>
          </p>
          <?php endif; ?>
          <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
          <div class="exhibit-description">
              <?php echo $exhibitDescription; ?>
          </div>
          <?php endif; ?>
          <div class="d-none d-md-block" id="exhibit-nav">
            <?php if ($firstPage = $exhibit->getFirstTopPage()): ?>
              <?php echo exhibit_builder_link_to_exhibit($exhibit, '<i class="material-icons">keyboard_arrow_right</i><span class="sr-only">Next</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnNext', 'aria-label' => 'Next'), $firstPage); ?>
            <?php endif; ?>
          </div>
      </div>
    </div>
    <div class="d-md-none" id="exhibit-nav">
      <?php if ($firstPage = $exhibit->getFirstTopPage()): ?>
        <?php echo exhibit_builder_link_to_exhibit($exhibit, '<i class="material-icons">keyboard_arrow_right</i><span class="sr-only">Next</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnNext', 'aria-label' => 'Next'), $firstPage); ?>
      <?php endif; ?>
    </div>
  </div>  
  <nav class="navbar fixed-bottom bg-light d-none d-md-flex" id="exhibit-footer">
    <?php echo exhibit_builder_link_to_exhibit($exhibit, null, array('class' => 'navbar-brand text-dark')); ?>
  </nav>

<?php echo foot(); ?>
