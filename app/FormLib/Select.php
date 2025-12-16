<?php
namespace FormLib;

class Select extends Input
{

    // Adding the attribute that Select needs
    private $options;

    /**
     * Constructor fills variables 
     *
     * @param string $name
     * @param string $id
     * @param string $label
     * @param array $options
     */

    // constructing the new class

    public function __construct(string $name, string $id, string $label, array $options)
    {
        parent::__construct($name, $id, $label, 'select');
        $this->options = $options;
    }

    public function render(?string $error = null): string
    {

        $class = 'form-control';
        if ($error) {
            $class .= ' is-invalid';
        }


        // Label
        $out = "<label for='{$this->id}' class='form-label'>{$this->label}</label>";

        // add opening select 
        $out .= "<select name='{$this->name}' id='{$this->id}' class='{$class}'>";

        // empty default option
        $out .= "<option value=''>Please select an option</option>";

        // render options 
        foreach ($this->options as $option) {
            $out .= "<option value='{$option}'>{$option}</option>";
        }

        // close select 
        $out .= "</select>";

        if ($error) {
            $out .= "<div class='invalid-feedback'>{$error}</div>";
        }

        // return completed HTML String        
        return $out;
    }

}