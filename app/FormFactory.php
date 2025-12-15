<?php

namespace App;

use FormLib\Input;
use FormLib\Checkbox;
use FormLib\Radiobutton;
use FormLib\Select;
use FormLib\Textarea;
use FormLib\Submit;
class FormFactory
{
    public static function build(array $config): array
    {

        $fields = [];

        foreach ($config as $key => $conf) {
            switch ($conf['type']) {
                case 'submit':
                    $fields[$key] = new Submit(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                        $conf['type']
                    );
                    break;
                case 'textarea':
                    $fields[$key] = new Textarea(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                        $conf['type'],
                        $conf['cols'],
                        $conf['rows'],
                    );
                    break;
                case 'select':
                    $fields[$key] = new Select(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                        $conf['options'],
                    );
                    break;
                case 'checkbox':
                    $fields[$key] = new Checkbox(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                    );
                    break;
                case 'radio':
                    $fields[$key] = new Radiobutton(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                        $conf['genders'],
                    );
                    break;
                default:
                    $fields[$key] = new Input(
                        $conf['name'],
                        $conf['id'],
                        $conf['label'],
                        $conf['type']
                    );
                    break;
            }
        }
        return $fields;
    }
}