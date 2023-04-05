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
    
    public $project_name;
    public $project_title;
    public $project_subject;

    public $image_url;
    public $alt;
    public $role;
    public $duration;
    public $tools;
    public $introduction;
    public $live;


    public function __construct($props = []) {

        $this->project_name = $props['project_name'] ?? null;
        $this->project_title = $props['project_title'] ?? null;
        $this->project_subject = $props['project_subject'] ?? null;

        $this->image_url = $props['image_url'] ?? null;
        $this->alt = $props['alt'] ?? null;
        $this->role = $props['role'] ?? null;
        $this->duration = $props['duration'] ?? null;
        $this->tools = $props['tools'] ?? null;
        $this->introduction = $props['introduction'] ?? null;
        $this->live = $props['live'] ?? null;
    }
}