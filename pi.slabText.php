<?php
class Plugin_slabtext extends Plugin {
    public function index() {
        $title  = $this->fetch_param('title', null);
        $class  = $this->fetch_param('class', "");
        $delim  = $this->fetch_param('delimiter', "|");
        
        if($title === null) {
            return false;
        };
        
        if(strpos($delim, $title) === false) {
            return array(
                "slabtexted"    => $title,
                "class"         => ""
                );
        };
        
        $parts = '<span class="slabtext">' . implode('</span><span class="slabtext">', explode($delim, $title)) . '</span>';
        $class = ' class="' . trim('slabtext ' . $class) . '"';
        
        return array(
            "slabtexted"    => $parts,
            "class"         => $class
        );
    };
}
?>
