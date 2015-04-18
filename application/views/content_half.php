<?php
/**
 * @var $left
 * @var $right
 * @var $left_class
 * @var $right_class
 */

!isset($left_class) AND $left_class = 'grid_3';
!isset($right_class) AND $right_class = 'grid_9';
?>

<div class="content_left <?= $left_class?> first">
    <?= $left?>
</div>

<div class="content_right <?= $right_class?>">
    <?= $right?>
</div>
