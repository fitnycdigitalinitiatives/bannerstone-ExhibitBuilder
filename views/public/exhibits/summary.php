<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>
  <div class="container-fluid">
    <div class="d-none d-md-block" id="exhibit-home">
      <a href="/exhibits" role="button" class="btn btn-close" aria-label="Close">
        <i class="material-icons">close</i>
        <span class="sr-only">Close</span>
      </a>
    </div>


    <div class="row">
      <div class="col-lg-6 col-md-8" id="text">
        <div id="title-block">
          <h1 id="main-title">
            <?php echo metadata('exhibit', 'title'); ?>
          </h1>
          <?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
          <p>
          <strong>by <?php echo $exhibitCredits; ?></strong>
          </p>
          <?php endif; ?>
          <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
          <div class="exhibit-description">
              <?php echo $exhibitDescription; ?>
          </div>
          <?php endif; ?>
      </div>
      </div>
    </div>

    <?php
    $pageTree = exhibit_builder_page_tree();
    if ($pageTree):
    ?>
    <?php endif; ?>
    <div id="exhibit-nav">
      <?php if ($firstPage = $exhibit->getFirstTopPage()): ?>
        <?php echo exhibit_builder_link_to_exhibit($exhibit, '<i class="material-icons">keyboard_arrow_right</i><span class="sr-only">Next</span>', array('role' => 'button', 'class' => 'btn btn-arrow btnNext', 'aria-label' => 'Next'), $firstPage); ?>
      <?php endif; ?>
    </div>
  </div>
  <nav class="navbar navbar-expand-md fixed-bottom navbar-light bg-light d-none d-md-flex" id="exhibit-footer">
    <?php echo exhibit_builder_link_to_exhibit($exhibit, null, array('class' => 'navbar-brand')); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFooter" aria-controls="navbarFooter" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="#343a40" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarFooter">
      <?php echo exhibit_builder_page_tree($exhibit, null, 'navbar-nav'); ?>
    </div>
  </nav>

<?php echo foot(); ?>
