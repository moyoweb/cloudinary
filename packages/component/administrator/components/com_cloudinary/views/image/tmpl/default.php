<?php
/**
 * ComCloudinary
 *
 * @author      Jasper van Rijbroek <jasper@moyoweb.nl>
 * @category    Nooku
 * @package     Moyo Components
 * @subpackage  Cloudinary
 */

defined('KOOWA') or die('Restricted Access'); ?>

<img src="<?= $image->url ?>" <?= $image->attribs; ?> <?= ($image->width) ? 'width="'.$image->width.'"' : '' ?> <?= ($image->height) ? 'height="'.$image->height.'"' : '' ?>>