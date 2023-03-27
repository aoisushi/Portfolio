<?php 

// Discipline page
class Project {

    public $name;
    public $title;
    public $subject;
    public $image;
    public $alt;
    public $link;

    public function __construct($props = []) {

        $this->name = $props['name'] ?? null;
        $this->title = $props['title'] ?? null;
        $this->subject = $props['subject'] ?? null;
        $this->image = $props['image'] ?? null;
        $this->alt = $props['alt'] ?? null;
        $this->link = $props['link'] ?? null;
    }
    
}

// Details page
class Details {
    
}