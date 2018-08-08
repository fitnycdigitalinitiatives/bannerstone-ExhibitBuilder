<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$size = isset($options['file-size'])
    ? html_escape($options['file-size'])
    : 'fullsize';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>
<div class="row">
  <div class="col-md-8" id="image">
    <div id="image-block">
      <?php
      $item = $attachments[0]->getItem();
      $convert = new OpenSeadragon;
      echo $convert->render($item);
      ?>
    </div>
  </div>
  <div class="col-md-4" id="text">
    <div id="text-block">
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
