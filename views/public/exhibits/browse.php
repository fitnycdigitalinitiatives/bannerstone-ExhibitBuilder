<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <h1 class="text-center mb-4">Bannerstone Essays</h1>
        <p class="px-3 mb-4">
          This section gives an overview of the scope of the essays.
        </p>

        <ul class="leaders">
        <?php foreach (loop('exhibit') as $exhibit): ?>
          <li>
            <span><?php echo exhibit_builder_link_to_exhibit($exhibit, null, array('class' => 'text-dark')); ?></span>
            <span><?php echo exhibit_builder_link_to_exhibit($exhibit, date("m/d/Y", strtotime($exhibit->added)), array('class' => 'text-dark')); ?></span>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

<?php echo pagination_links(); ?>

<?php echo foot(); ?>
