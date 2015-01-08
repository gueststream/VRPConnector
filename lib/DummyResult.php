<?php

namespace Gueststream;

class DummyResult
{
    public $ID;
    public $post_title;
    public $post_content;
    public $post_name;
    public $post_author;
    public $comment_status = "closed";
    public $post_status = "publish";
    public $ping_status = "closed";
    public $post_type = "page";
    public $post_date = "";
    public $comment_count = 0;
    public $post_parent = 450;

    function __construct($ID, $title, $content)
    {
        $this->ID = $ID;
        $this->post_title = $title;
        $this->post_content = $content;
        $this->post_author = "admin"; // implement this function
    }
}
