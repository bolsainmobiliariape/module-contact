<?php
// config for Bolsainmobiliariape/ModuleContact
return [

    "fields" => [
        "name",
        "dni",
        "company",
        "email",
        "phone",
        "asunto",
        "message",
    ],

    "names" =>  [
        "name" => "Nombre",
        "dni" => "DNI/RUC",
        "company" => "Empresa",
        "email" => "Correo",
        "phone" => "Telefono",
        "asunto" => "Asunto",
        "message" => "Mensaje",
    ],

    "migrations" => [
        "name" => "string",
        "dni" => "string",
        "company" => "string",
        "email" => "string",
        "phone" => "string",
        "asunto" => "text",
        "message" => "text"
    ],

    "rules" => [
        "name" => ["string", 'max:191', 'required'],
        "dni" => ["string", 'max:191', 'required'],
        "company" => ["string", 'max:191', 'required'],
        "email" => ["email", 'required'],
        "phone" => ["string", 'max:191', 'required'],
        "asunto" => ["string", 'required'],
        "message" => ["string", 'required']
    ],
];
