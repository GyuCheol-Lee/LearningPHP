<?php
$dimsum = array('닭고기번','오리발구이','순무케이크');
print '<tr><td>' . implode('</td><td>', $dimsum) . '</td></tr>';

//sort(), asort(), ksort() 내림차순 정렬
//rsort(), arsort(), krsort() 오름차순 정렬