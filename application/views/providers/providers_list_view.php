<?php
$prefurl = base_url().'providers/providers_list/show/'.$entitytype.'';

$form = '<form id="filter-form"><input name="filter" id="filter" value="" placeholder="'.lang('rr_search').'" size="30" type="text"></form>';


echo '<div class="row">';
echo '<div class="medium-9 large-9 columns">';

echo '<dl class="sub-nav"> <dt><span class="show-for-large-up"><i class="fi-widget"></i>'.lang('rr_filter').':</span></dt> <dd class="afilter filterall"><a href="'.$prefurl.'/all" class="afilter filterall">'.lang('allprov').'</a></dd> <dd class="afilter filterext"><a href="'.$prefurl.'" class="afilter filterext">'. lang('extprov').'</a></dd> <dd class="afilter filterlocal active"><a href="'.$prefurl.'" class="afilter filterlocal initiated">'.lang('localprov').'</a></dd> </dl>';

echo '</div>';


echo '<div class="medium-3 large-3 columns">';
echo $form;
echo '</div>';

echo '</div>';
echo '<div data-alert class="alert-box alert hidden"></div>';

echo '<div id="providerslistresult"></div>';

echo '<div class="subtitleprefix hidden">'.lang('rr_found').'</div>';
