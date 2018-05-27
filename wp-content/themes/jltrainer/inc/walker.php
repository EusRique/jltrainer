<?php

class TopMenu_Walker extends Walker_Nav_Menu 
{
    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) 
    {
        $output .= sprintf( "\n<li class='Navigation__item'><a class='Navigation__link scroll %s' href='%s' target='%s'>%s</a></li>\n",
                $item->classes[0],
                $item->url,
                $item->target,
                $item->title
            );
    }
}

