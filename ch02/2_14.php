<?php
$html = '<span class="{class}">유부<span>
<span class="{class}">생선튀김</span>';

$my_class = 'lunch';

print str_replace('{class}', $my_class,$html);