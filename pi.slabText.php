<?php
class Plugin_slabtext extends Plugin {
    public function index() {
        $title  = $this->fetch_param('title', "");
        $delim  = $this->fetch_param('delim', "|");

        if(strpos($title, $delim) === false) {
            return $title;
        };

        return '<span class="slabtext">' . implode('</span><span class="slabtext">', explode($delim, $title)) . '</span>';
    }
};
?>
