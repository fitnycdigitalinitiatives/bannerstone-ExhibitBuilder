<?php
$galleryFileSize = isset($options['gallery-file-size'])
    ? html_escape($options['gallery-file-size'])
    : null;
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>
<div class="row">
  <div class="col-md-8" id="image">
    <div id="image-block">
      <div class="card-deck">
        <?php
          foreach ($attachments as $attachment) {
            $item = $attachment->getItem();
            $html = '<div class="card">';
            $html .= OpenSeadragonExhibit($item, @$attachment->file_id, $galleryFileSize);
            if ($attachment['caption']) {
              $html .= '<div class="exhibit-item-caption">' . $attachment['caption'] . '</div>';
            }
            $html .= '</div>';
            echo $html;
          };
        ?>
      </div>
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
