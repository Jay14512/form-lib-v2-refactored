<?php
namespace FormLib;

class Checkbox extends Input
{
    /**
     * Constructor fills variables 
     *
     * @param string $name
     * @param string $id
     * @param string $label
     */

    // constructing the new class

    public function __construct(string $name, string $id, string $label)
    {
        parent::__construct($name, $id, $label);
    }

    public function render(?string $error = null): string
    {
        $class = 'form-check-input';
        if ($error) {
            $class .= ' is-invalid';
        }

        //Start: empty String
        $out = <<<HTML
        <div  class="form-check">
       <input type='checkbox' name='{$this->name}' id='{$this->id}' class='{$class}'>

       <label for='{$this->id}' class='form-check-label'>{$this->label}</label>
       

    HTML;

        if ($error) {
            $out .= "<div class='invalid-feedback d-block'>{$error}</div>";
        }

        $out .= "</div>";
        return $out;
    }

}
