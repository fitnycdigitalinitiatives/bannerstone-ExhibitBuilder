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
  <div class="col-md-8 <?php if ($position == 'right') {echo 'order-last';} ?>" id="image">
    <div id="image-block">
      <?php
        foreach ($attachments as $attachment) {
          $item = $attachment->getItem();
          $link = record_url($item, null, true);
          $html = '<div class="d-flex">';
          $html .= OpenSeadragonExhibit($item, @$attachment->file_id, $size);
          $html .= '</div>';
          if ($attachment['caption']) {
            $html .= '<div class="exhibit-item-caption">' . $attachment['caption'] . '</div>';
          }
          echo $html;
        };
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
