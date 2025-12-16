<?php
namespace FormLib;

class Submit extends Input
{
	public function render(?string $error = null): string
	{
		return <<<HTML
<button type="submit" id="{$this->id}" class="btn btn-primary"> {$this->label}</button>
HTML;

	}
}