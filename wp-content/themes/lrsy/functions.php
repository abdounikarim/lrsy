<?php 
if(class_exists('dispatcherPps')) {
 dispatcherPps::addFilter('popupCheckCondition', 'supsystic_include_example_popups_condition');
}
function supsystic_include_example_popups_condition($condition) {
$addPopUpsIds = array(100);
$condition .= ' OR id IN ('. implode(',', $addPopUpsIds). ')';
return $condition;
}