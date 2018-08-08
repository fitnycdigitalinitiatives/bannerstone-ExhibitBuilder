<?php

/**
 * View helper for a single item listing in the attachment selection dialog.
 * @package ExhibitBuilder\View\Helper
 */
class ExhibitBuilder_View_Helper_ExhibitItemListing extends Zend_View_Helper_Abstract
{
    /**
     * Return the form for showing an item to be attached.
     *
     * @param Item $item
     * @return string
     */
    public function exhibitItemListing($item)
    {
        $html = '<div class="item-listing" data-item-id="' . $item->id . '">';
        $html .= '<div class="item-file">'
            . '<img src="' . square_thumbnail_url($item) . '" class="img-fluid">'
            . '</div>';
        $private = '';
        if (!metadata($item, 'public')) {
            $private = ' ' . __('(Private)');
        }
        $html .= '<h4 class="title">'
              . metadata($item, array('Dublin Core', 'Title'))
              . $private
              . '</h4>';
        $html .= '<button type="button" class="select-item">' . __('Select Item') . '</button>';
        $html .= '</div>';
        return $html;
    }
}
