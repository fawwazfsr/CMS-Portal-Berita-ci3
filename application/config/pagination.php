<?php
 //pagination
 $config['base_url'] = 'http://localhost/cms/admin/history/index';

 //style
 $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
 $config['full_tag_close'] = '</ul></nav></div>';

 $config['next_link'] = '&raquo';
 $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
 $config['next_tag_close'] = '</span></li>';

 $config['prev_link'] = '&laquo';
 $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
 $config['prev_tag_close'] = '</span></li>';

 
 $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
 $config['cur_tag_close'] = '</a></li>';
 
 $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
 $config['num_tag_close'] = '</span></li>';

 $config['attributtes'] = array('class' => 'page_link');