<?php 

namespace Geekbrains\Application1\Models;

class Phone {
    
    private string $phone;

    public function __construct() {
        // $this->phone = '+996 555 075 076';
    }

    // http://mysite.local/about//?phone=+996%20555%20075%20076
    // http://mysite.local/about/index/?phone=+996%20555%20075%20076
    public function getPhone() {
        $this->phone = $_GET['phone'] ?? ' ';
        return $this->phone;
    }
}