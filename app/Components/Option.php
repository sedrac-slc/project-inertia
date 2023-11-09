<?php

namespace App\Components;


class Option{

    private string $code;
    private string $label;
    private string $selected;

    protected $options;

    function __construct($code,$label,$selected = false){
        $this->code = $code;
        $this->label = $label;
        $this->selected = $selected;
    }

    function __get($name){
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function values(){
        $code = [];
        foreach($this->options as $option) $code[] = $option->code;
        return $code;
    }

    public function keyValues(){
        $code_label = [];
        foreach($this->options as $option) $code_label[$option->code] = $option->label;
        return $code_label;
    }

    public function elements(){
        return $this->options;
    }

    public function regex(){
        $join = join("|",$this->values());
        return "regex/[{$join}]/";
    }

}
