<?php 

namespace App;

use App\DB;
use \PDO;

class Model extends DB
{
	public $recordGenStartTime;
	public $ungeneratedRecordIDs = [];
	public $generatedRecordIDs = [];
	public $availableRecords = [];
	public $applicableRecords = [];
	public $generatedRecords = [];
	
	public function _construct() {
		parent::__construct();
	}

	public function setRecordGenStartTime(string $time) {
		$this->recordGenStartTime = $time;
	}

	public function getAllRecordID(array $ignore = []) {
		$params = $this->inSQLHelper($ignore);

		$records = $this->autoPreparePDO(
			"SELECT region_id FROM sales WHERE region_id NOT IN ({$params['string_param']})",
			$params['array_param']
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->availableRecords[] = $record->region_id;
		}

		return $this->availableRecords;
	}

	public function getAllGeneratedRecordIDs() {
		$records = $this->autoPreparePDO(
			'SELECT region_id FROM daily_report_tracker WHERE created_at > :start_time GROUP BY region_id',
			[':start_time' => date('Y-m-d ') . $this->recordGenStartTime],
			'raw'
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->generatedRecordIDs[] = $record->region_id;
		}

		return $this->generatedRecordIDs;
	}

	public function getAllUngeneratedRecordIDs() {
		$params = $this->inSQLHelper($this->getAllGeneratedRecordIDs());

		// $records = $this->autoPreparePDO(
		// 	"SELECT region_id FROM sales " . (empty($params['array_param']) ? "" : "WHERE region_id NOT IN ({$params['string_param']}) ") . "GROUP BY region_id",
		// 	$params['array_param'],
		// 	'raw'
		// );

		if (empty($params['array_param'])) {
			$records = $this->autoPreparePDO(
				"SELECT region_id FROM sales GROUP BY region_id",
				[],
				'raw'
			);
		}
		else {
			$records = $this->autoPreparePDO(
				"SELECT region_id FROM sales WHERE region_id NOT IN ({$params['string_param']}) GROUP BY region_id",
				$params['array_param'],
				'raw'
			);
		}

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->ungeneratedRecordIDs[] = $record->region_id;
		}

		return $this->ungeneratedRecordIDs;
	}

	public function getAllRecordsToBeGeneratedByID() {
		if (empty($this->ungeneratedRecordIDs)) {
			return;
		}

		$records = $this->autoPreparePDO(
			"SELECT * FROM sales WHERE region_id = :region_id",
			[':region_id' => $this->ungeneratedRecordIDs[0]],
			'raw'
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->applicableRecords[] = $record;
		}
	}

	public function setPDFGeneratedStatus(array $persitentData) {
		$toBePersisted = [
			':region_id'      => $persitentData['region_id'],
			':report_file_id' => $persitentData['report_file_id'],
			':status'         => 'generated',
			':created_at'     => date('Y-m-d H:i:s'),
		];

		(($this->autoPreparePDO(
			'INSERT INTO daily_report_tracker (region_id, report_file_id, status, created_at) VALUES (:region_id, :report_file_id, :status, :created_at)', 
			$toBePersisted, 
			'count'
		)) > 0) ? true : false;
	}

	public function setReportSentStatus($reportID) {
		$toBePersisted = [
			':status' => 'sent',
		];

		(($this->autoPreparePDO(
			'UPDATE daily_report_tracker SET status = :status, updated_at = :updated_at WHERE id = :id',
			[
				':status'     => 'sent',
				':id'         => $reportID,
				':updated_at' => date('Y-m-d H:i:s'),
			], 
			'count'
		)) > 0) ? true : false;
	}

	public function getGeneratedReport() {
		$records = $this->autoPreparePDO(
			'SELECT id, region_id, report_file_id, status, created_at, updated_at,
			(SELECT email FROM report_receipients WHERE MainQuery.region_id = region_id LIMIT 1) AS email,
			(SELECT concat(lastname) FROM report_receipients WHERE MainQuery.region_id = region_id LIMIT 1) AS receipient_lastname,
			(SELECT concat(firstname) FROM report_receipients WHERE MainQuery.region_id = region_id LIMIT 1) AS receipient_firstname,
			(SELECT concat(title) FROM report_receipients WHERE MainQuery.region_id = region_id LIMIT 1) AS receipient_title
			 FROM daily_report_tracker AS MainQuery WHERE created_at > :start_time AND status = :status', 
			[':start_time' => date('Y-m-d ') . $this->recordGenStartTime, ':status' => 'generated'],
			'raw'
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->generatedRecords[] = $record;
		}

		return $this->generatedRecords;
	}
}

