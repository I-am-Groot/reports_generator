<?php

namespace App;

use App\DB;
use \PDO;

/**
 * 
 */
class RecordGeneratorModel extends DB
{
	public $recordGenStartTime = '7:00:00';
	public $generatedRecordRegionIDs;
	public $ungeneratedRecordRegionIDs;
	public $currentRecordRegionID;
	public $allRegionIDScopedData;
	
	public function _construct() {
		parent::__construct();
	}

	public function setRecordGenStartTime(string $time) {
		$this->recordGenStartTime = $time;
	}

	public function fetchgeneratedRecordRegionIDs() {
		$records = $this->autoPreparePDO(
			"SELECT region_id FROM report_tracker WHERE generated_at > :generated_at",
			[':generated_at' => date('Y-m-d') . $this->recordGenStartTime],
			'raw'
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->generatedRecordRegionIDs[] = $record->FILE_REGID;
		}

		return $this->generatedRecordRegionIDs;
	}

	public function fetchUngeneratedRegionIDs() {
		if (! is_null($this->fetchgeneratedRecordRegionIDs())) {
			$params = $this->inSQLHelper($this->generatedRecordRegionIDs);

			$records = $this->autoPreparePDO(
				"SELECT FILE_REGID FROM at_fileeast WHERE FILE_REGID NOT IN ({$params['string_param']}) GROUP BY FILE_REGID",
				$params['array_param'],
				'raw'
			);
		}
		else {
			$records = $this->autoPreparePDO(
				"SELECT FILE_REGID FROM at_fileeast GROUP BY FILE_REGID",
				[],
				'raw'
			);
		}

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->ungeneratedRecordRegionIDs[] = $record->FILE_REGID;
		}

		return $this->ungeneratedRecordRegionIDs;
	}

	public function setCurrentRecordRegionID() {
		if (is_null($this->fetchUngeneratedRegionIDs())) {
			return;
		}

		return $this->currentRecordRegionID = $this->ungeneratedRecordRegionIDs[0];
	}

	public function fetchAllRegionDataByID(Int $regionID) {
		$records = $this->autoPreparePDO(
			"SELECT FILE_ID,
			(SELECT name FROM departments WHERE id = MainQuery.FILE_REGID) AS department_name
			FROM at_fileeast AS MainQuery WHERE FILE_REGID = :regionID LIMIT 20",
			[':regionID' => $regionID],
			'raw'
		);

		while ($record = $records->fetch(PDO::FETCH_OBJ)) {
			$this->allRegionIDScopedData[] = $record;
		}

		return $this->allRegionIDScopedData;
	}
}