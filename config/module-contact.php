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
        "contact.name" => ["string", 'max:191', 'required'],
        "contact.dni" => ["string", 'max:191', 'required'],
        "contact.company" => ["string", 'max:191', 'required'],
        "contact.email" => ["email", 'required'],
        "contact.phone" => ["string", 'max:191', 'required'],
        "contact.asunto" => ["string", 'required'],
        "contact.message" => ["string", 'required']
    ],
];
