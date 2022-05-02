<?php

class dipentente{
    public $id;
    public $first_name;
    public $last_name;
    public $birth_date;
    public $hire_date;

    public function __construct($first_name, $last_name, $birth_date, $hire_date){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->hire_date = $hire_date;
    }
}