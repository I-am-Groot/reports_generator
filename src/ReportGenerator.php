<?php

namespace App;

use App\Model;
use Dompdf\Dompdf;
use App\ViewLoader;

class ReportGenerator extends Model
{
	private $PDF;
	private $viewLoader;
	private $templatePath = '../views/record-view.php';
	private $storageDirectory = '../public/PDFs/';
	
	public function __construct() {
		parent::__construct();

		$this->getAllUngeneratedRecordIDs();
		$this->getAllRecordsToBeGeneratedByID();

		$this->viewLoader = new ViewLoader();
		$this->viewLoader->setTemplatePath($this->templatePath);

		$this->PDF = new Dompdf();
		$this->PDF->set_paper('A4', 'portrait');
	}

	public function makePDF() {
		$fileID = time() . rand(1, 1000);
		$this->PDF->loadHtml($this->viewLoader->render($this->applicableRecords));
		$this->PDF->render();
		file_put_contents(
			rtrim($this->storageDirectory, '/') . '/' . $fileID . '.pdf',
			$this->PDF->output()
		);

		if (! file_exists(rtrim($this->storageDirectory, '/') . '/' . $fileID . '.pdf')) {
			return;
		}

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