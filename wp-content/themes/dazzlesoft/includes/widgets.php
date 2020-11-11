<?php 
function dz_widgets_init(){
    // using __ Retrieve the translation of $text.
   // If there is no translation, or the text domain isn't loaded, the original text is returned.
//    'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">', is importent 
    register_sidebar([
    'name'          =>  __( 'Sidebar','dazzle' ),
	'id'            => 'dz_sidebar',
	'description'   => __('Sidebar for Dazzlesoft','dazzle'),
	'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">',
	'after_widget'  => "</div>\n",
	'before_title'  => '<h4>',
	'after_title'   => "</h4>\n",
    ]);
}


function dz_widgets_init2(){
    // using __ Retrieve the translation of $text.
   // If there is no translation, or the text domain isn't loaded, the original text is returned.
    register_sidebar([
    'name'          =>  __( 'Sidebar2','dazzle2' ),
	'id'            => 'dz_sidebar2',
	'description'   => __(' Dazzlesoft Sidebar','dazzle'),
	'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">',
	'after_widget'  => "</div>\n",
	'before_title'  => '<h3>',
	'after_title'   => "</h3>\n",
    ]);
}