<?php

namespace App;

use Dompdf\Dompdf;
use App\ViewLoader;
use App\RecordGeneratorModel;

class ReportGenerator extends RecordGeneratorModel
{
	private $PDF;
	private $viewLoader;
	private $templatePath = '../views/regional-template.php';
	private $storageDirectory = '../public/PDFs/';
	
	public function __construct() {
		parent::__construct();

		$this->viewLoader = new ViewLoader();
		$this->viewLoader->setTemplatePath($this->templatePath);

		$this->PDF = new Dompdf();
		$this->PDF->set_paper('A2', 'portrait');
	}

	public function makePDF() {
		$fileID = time() . rand(1, 1000);
		$this->PDF->loadHtml($this->viewLoader->render([
			'records' => $this->allRegionIDScopedData
		]));

		$this->PDF->render();
		file_put_contents(
			rtrim($this->storageDirectory, '/') . '/' . $fileID . '.pdf',
			$this->PDF->output()
		);

		if (! file_exists(rtrim($this->storageDirectory, '/') . '/' . $fileID . '.pdf')) {
			return;
		}

		// $this->setPDFGeneratedStatus([
		// 	'region_id' => $this->currentRecordRegionID,
		// 	'report_file_id' => $fileID,
		// ]);
	}

	public function init() {
		$this->setRecordGenStartTime('7:00:00');
		
		if (is_null($this->fetchAllRegionDataByID($this->setCurrentRecordRegionID()))) {
			return;
		}

		$this->makePDF();
	}
}