<?php
$galleryFileSize = isset($options['gallery-file-size'])
    ? html_escape($options['gallery-file-size'])
    : null;
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>
<div class="row">
  <div class="col-md-7 col-lg-8 order-last order-md-first" id="image">
      <div class="card-deck">
        <?php
          $attachment_count = count($attachments);
          $item_list = array();
          foreach ($attachments as $attachment) {
            $item = $attachment->getItem();
            $html = '<div class="card count-' . $attachment_count . '">';
            $html .= OpenSeadragonExhibit($item, @$attachment->file_id, $galleryFileSize);
            if ($attachment['caption']) {
              $html .= '<div class="exhibit-item-caption">' . $attachment['caption'] . '</div>';
            }
            $html .= '</div>';
            echo $html;
            $item_title = metadata($item, array('Dublin Core', 'Title'));
            $item_url = record_url($item, null, true);
            $item_list[$item_title] = $item_url;
          };
        ?>
      </div>
  </div>
  <div class="col-md-5 col-lg-4 order-first order-md-last" id="text">
    <div id="text-block">
      <h1>
        <?php if ($pageParent = get_current_record('exhibit_page')->getParent()): ?>
          <small class="text-muted">
            <?php echo metadata($pageParent, 'title'); ?>
          </small></br>
        <?php endif; ?>
        <?php echo metadata('exhibit_page', 'title'); ?>
      </h1>
      <?php
        $html = '<ul class="list-inline mb-2">';
        foreach ($item_list as $title => $url) {
          $html .= '<li class="list-inline-item">';
          $html .= '<a href="' . $url .'">';
          $html .= '<i class="material-icons align-bottom">info</i> ' . $title;
          $html .= '</a>';
          $html .= '</li>';
        }
        $html .= '</ul>';
        echo $html;
        echo $text;
      ?>
    </div>
  </div>
</div>
