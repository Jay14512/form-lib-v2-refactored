<?php

// Konfiguration aller Inputs
return [
    'username' => [
        'name' => 'username',
        'type' => 'text',
        'id' => 'myUserName',
        'label' => 'Username'
    ],
    'email' => [
        'name' => 'email',
        'type' => 'email',
        'id' => 'myEmail',
        'label' => 'E-Mail'
    ],
    'password' => [
        'name' => 'password',
        'type' => 'password',
        'id' => 'myPassword',
        'label' => 'Password'
    ],
    'date' => [
        'name' => 'date',
        'type' => 'date',
        'id' => 'myDate',
        'label' => 'Date'
    ],
    'message' => [
        'name' => 'message',
        'type' => 'textarea',
        'id' => 'myMessage',
        'label' => 'Message',
        'cols' => 30,
        'rows' => 5
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
        'genders' => ['Male', 'Female', 'Diverse']
    ],
    'privacy' => [
        'name' => 'privacy',
        'type' => 'checkbox',
        'id' => 'privacy',
        'label' => 'I agree to the general terms and conditions.'
    ],
    'submit' => [
        'name' => 'submit',
        'type' => 'submit',
        'id' => 'mySubmit',
        'label' => 'Send'
    ]
];