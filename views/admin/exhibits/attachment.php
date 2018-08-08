<?php
$item = $attachment->getItem();
if (!$item) {
    return;
}

$file_id = $attachment->file_id;
$stem = $block->getFormStem() . "[attachments][{$index}]";
?>
<div class="attachment" data-attachment-index="<?php echo html_escape($index); ?>">
    <div class="attachment-header">
        <div class="delete-element" role="button" title="<?php echo __('Remove/Restore'); ?>"></div>
    </div>
    <div class="attachment-body">
        <div class="attachment-background" style="background: url('<?php echo square_thumbnail_url($item, $file_id); ?>') center / cover"></div>
        <h5>
            #<?php echo html_escape($item->id); ?>:<br>
            <?php if (!metadata($item, 'public')): ?>
            <?php echo __('(Private)') . ' '; ?>
            <?php endif; ?>
            <?php echo metadata($item, array('Dublin Core', 'Title')); ?>
        </h5>
        <?php echo $this->formHidden($stem . '[item_id]', $item->id); ?>
        <?php if ($file_id): ?>
        <?php echo $this->formHidden($stem . '[file_id]', $file_id); ?>
        <?php endif; ?>
        <?php echo $this->formHidden($stem . '[caption]', $attachment->caption); ?>
        <?php echo $this->formHidden($stem . '[order]', $index + 1, array('class' => 'attachment-order')); ?>
    </div>

    <span class="edit-attachment" role="button"><?php echo __('Edit'); ?></span>
</div>
