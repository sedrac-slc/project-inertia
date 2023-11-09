<?php

namespace App\Components;

class GenderOption extends Option{

    public const OTHER = "OTHER";
    public const MALE = "MALE";
    public const FEMALE = "FEMALE";

    function __construct($gender = "")
    {
        $this->options = [
            new Option(GenderOption::MALE,"Masculino", GenderOption::MALE == $gender),
            new Option(GenderOption::FEMALE,"Femenino",GenderOption::FEMALE == $gender),
            new Option(GenderOption::OTHER,"Outro",GenderOption::OTHER == $gender),
        ];
    }

    public static function factory($gender = ""){
        return new GenderOption($gender);
    }

}
