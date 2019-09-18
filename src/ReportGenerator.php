<?php

namespace App;

use App\Model;
use Dompdf\Dompdf;

class ReportGenerator extends Model
{
	private $PDF;
	private $templatePath = '../views/record-view.php';
	private $storageDirectory = '../public/PDFs/';
	
	public function __construct() {
		parent::__construct();

		$this->getAllUngeneratedRecordIDs();
		$this->getAllRecordsToBeGeneratedByID();

		$this->PDF = new Dompdf();
		$this->PDF->set_paper('A4', 'portrait');
	}

	public function setTemplatePath(string $path) {
		$this->templatePath = $path;
		return $this;
	}

	public function renderer(array $records) {
		ob_start();
		include($this->templatePath);
		$render = ob_get_contents();
		ob_clean();
		return $render;
	}

	public function makePDF() {
		$fileID = time() . rand(1, 1000);
		$this->PDF->loadHtml($this->renderer($this->applicableRecords));
		$this->PDF->render();
		file_put_contents(
			rtrim($this->storageDirectory, '/') . '/' . $fileID . '.pdf',
			$this->PDF->output()
		);

		$this->setPDFGeneratedStatus([
			'region_id' => $this->ungeneratedRecordIDs[0],
			'report_file_id' => $fileID,
		]);
	}

	public function init() {
		if (empty($this->ungeneratedRecordIDs) || empty($this->applicableRecords)) {
			return;
		}

		$this->makePDF();
	}
}