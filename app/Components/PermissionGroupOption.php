<?php

namespace App\Components;

class PermissionGroupOption extends Option{

    public const VIEW = "VIEW";
    public const STORE = "STORE";
    public const UPDATE = "UPDATE";
    public const DELETE = "DELETE";
    public const NONE = "NONE";
    public const SPECIAL = "SPECIAL";
    public const VALIDATION = "VALIDATION";

    function __construct($group = "")
    {
        $this->options = [
            new Option(PermissionGroupOption::VIEW,"Visualização", PermissionGroupOption::VIEW == $group),
            new Option(PermissionGroupOption::STORE,"Criação",PermissionGroupOption::STORE == $group),
            new Option(PermissionGroupOption::UPDATE,"Actualização",PermissionGroupOption::UPDATE == $group),
            new Option(PermissionGroupOption::DELETE,"Eliminação",PermissionGroupOption::DELETE == $group),
            new Option(PermissionGroupOption::NONE,"Indefinido",PermissionGroupOption::NONE == $group),
            new Option(PermissionGroupOption::SPECIAL,"Especial",PermissionGroupOption::SPECIAL == $group),
            new Option(PermissionGroupOption::VALIDATION,"Validação",PermissionGroupOption::VALIDATION == $group),
        ];
    }

    public static function factory($group = ""){
        return new PermissionGroupOption($group);
    }

}
