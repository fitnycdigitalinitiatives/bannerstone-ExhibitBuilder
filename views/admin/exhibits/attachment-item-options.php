<?php
$item = $attachment->getItem();
$caption = $attachment->caption;
$file_id = $attachment->file_id;
if (metadata($item, array('Item Type Metadata', 's3_path'))) {
    $files = metadata($item, array('Item Type Metadata', 's3_path'), array('all' => true));
    $type = "s3";
}
if ($file_id === null && $files) {
    $file_id = 0;
}
if (!metadata($item, 'public')) {
    $private = ' ' . __('(Private)');
} else {
    $private = '';
}
?>
<?php echo $this->formHidden('item_id', $item->id); ?>
<h2><?php echo __('Selected Item: %s', metadata($item, array('Dublin Core', 'Title'))) . $private; ?></h2>
<?php if ($files): ?>
    <div class="file-select">
        <?php if (count($files) > 0): ?>
            <p class="direction"><?php echo __('Select a file to use.'); ?></p>
        <?php endif; ?>
        <div class="inputs">
            <ul>
                <?php foreach ($files as $index => $file): ?>
                    <?php
                    $selected = $file_id == $index;
                    $parsed_url = parse_url($file);
                    $key = ltrim($parsed_url["path"], '/');
                    $record_name = substr(substr(basename($file), 0, -4), 37);
                    ?>
                    <li class="item-file <?php if ($selected)
                                                echo 'selected'; ?>">
                        <label>
                            <img src="<?php echo square_thumbnail_url($item, $index); ?>" class="img-fluid"
                                title="<?php echo $record_name; ?>">
                            <input id="file-<?php echo $index; ?>" type="radio" name="file_id"
                                title="<?php echo $record_name; ?>" value="<?php echo $index; ?>" <?php if ($selected)
                                                                                                        echo 'checked'; ?>>
                            <div class="file-title"><?php echo $record_name; ?></div>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>