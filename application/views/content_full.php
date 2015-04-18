<?php
/**
 * @var $title
 * @var $content
 */
$title = (isset($title)) ? $title : 'Title';
$content = (isset($content)) ? $content : 'Title';

?>
<div class="content_full">

    <h2><?= $title?></h2>

    <div class="">
        <?= $content?>
    </div>

</div>
