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
<div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?> captions-<?php echo $captionPosition; ?>">
  <?php
    foreach ($attachments as $attachment) {
      $item = $attachment->getItem();
      $link = record_url($item, null, true);
      $html = '<div>';
      $html .= OpenSeadragonExhibit($item, @$attachment->file_id, $size);
      $html .= '</div>';
      if ($attachment['caption']) {
        $html .= '<div class="exhibit-item-caption">' . $attachment['caption'] . '</div>';
      }
      echo $html;
    };
  ?>
</div>
<h2><?php echo metadata('exhibit_page', 'title'); ?></h2>
<?php echo $text; ?>
