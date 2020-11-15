<?php 
class DZ_Custom_Nav_Walker extends Walker_Nav_Menu {
// START FUNCTION MENU UL UNLIST 
    public function start_lvl(&$output,$depth =0,$arg=[]){
        $output .= '<ul class = "special-class">';
    }
    //MENU ITEM START 
    public function start_el(&$output, $item, $depth =0,$arg=[],$id = 0){
        //CAN SET CSS PROPERTICES 
        $output .= '<li class = "special-class-item">';
        $output .= $args->before;

        $output .= '<a href = " '. $item->url .' ">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .='</a>';
        $output .= $args->after;
    }
     //MENU ITEM END 
    public function end_el(&$output, $item, $depth =0,$arg=[],$id = 0){
        $output .='</li>';
    }
// END FUNCTION MENU UL UNLIST 
    public function end_lvl(&$output,$depth =0,$arg=[]){ 
        $output .='</ul>';
    }
}