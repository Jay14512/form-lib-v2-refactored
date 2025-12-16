<?php
namespace FormLib;

class Input
{
	protected $name;
	protected $type;
	protected $id;
	protected $label;

	/**
	 * Konstruktor, befüllt Variablen
	 *
	 * @param string $name
	 * @param string $id
	 * @param string $label
	 * @param string $type
	 */
	public function __construct(string $name, string $id, string $label, string $type = "text")
	{
		$this->name = $name;
		$this->type = $type;
		$this->id = $id;
		$this->label = $label;
	}

	/**
	 * Liefert label, input und error Message für mein aktuelles Feld
	 *
	 * @return string
	 */
	public function render(?string $error = null): string
	{
		$out = '';

		//determine input class
		$inputClass = 'form-control';
		if ($error) {
			$inputClass .= ' is-invalid';
		}

		//label + input

		$out .= <<<HTML
<label for="{$this->id}" class="form-label">{$this->label}</label>
<input type="{$this->type}" name="{$this->name}" id="{$this->id}" class="{$inputClass}" >
HTML;

		//error message 
		if ($error) {
			$out .= "<div class='invalid-feedback'>{$error}</div>";
		}

		return $out;
	}
}