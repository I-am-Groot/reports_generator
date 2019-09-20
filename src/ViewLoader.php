<?php

namespace App;

class ViewLoader
{
	private $templatePath = '../views/record-view.php';

	public function setTemplatePath($path) {
		$this->templatePath = $path;
		return $this;
	}

	public function render(array $data) {
		extract($data); unset($data);
		ob_start();
		include($this->templatePath);
		$render = ob_get_contents();
		ob_clean();
		return $render;
	}
}