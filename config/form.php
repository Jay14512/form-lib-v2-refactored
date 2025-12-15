<?php

// Konfiguration aller Inputs
return [
    'email' => [
        'name' => 'email',
        'type' => 'email',
        'id' => 'myEmail',
        'label' => 'E-Mail'
    ],
    'date' => [
        'name' => 'date',
        'type' => 'date',
        'id' => 'myDate',
        'label' => 'Datum'
    ],
    'username' => [
        'name' => 'username',
        'type' => 'text',
        'id' => 'myUserName',
        'label' => 'Benutzername'
    ],
    'message' => [
        'name' => 'message',
        'type' => 'textarea',
        'id' => 'myMessage',
        'label' => 'Nachricht',
        'cols' => 30,
        'rows' => 5
    ],
    'password' => [
        'name' => 'password',
        'type' => 'password',
        'id' => 'myPassword',
        'label' => 'password'
    ],
    'submit' => [
        'name' => 'submit',
        'type' => 'submit',
        'id' => 'mySubmit',
        'label' => 'Senden'
    ],
    'country' => [
        'name' => 'country',
        'type' => 'select',
        'id' => 'country',
        'label' => 'Country',
        'options' => ['Austria', 'Sweden', 'Germany', 'Italy', 'Canada']
    ],
    'gender' => [
        'name' => 'gender',
        'type' => 'radio',
        'id' => 'gender',
        'label' => 'Gender',
        'genders' => ['male', 'female', 'diverse']
    ],
    'privacy' => [
        'name' => 'privacy',
        'type' => 'checkbox',
        'id' => 'privacy',
        'label' => 'I read and agree to the general terms and conditions.'
    ]
];