<?php

namespace App;

use App\Config;
use \PDO;

class DB extends PDO
{
	public function __construct() {
		$this->config = new Config();

		$dsn = sprintf('mysql:host=%1$s;dbname=%2$s',
						$this->config->dbHost,
						$this->config->dbName
					);

		parent::__construct($dsn, $this->config->dbUser, $this->config->dbPass);
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function autoPreparePDO($Statement, $Array = array(), $ReturnType = 'fetch') {
        try {
            if (empty($Statement)) {
                throw new Exception('Statement can\'t be empty');
            }
            $Query = $this->prepare($Statement);
            foreach($Array as $Key => $Value) {
                if (is_int($Value)) {
                    $Query->bindValue($Key, (int)$Value, PDO::PARAM_INT);
                }
                else {
                    $Query->bindValue($Key, $Value);
                }
            }
            $Query->execute();
            if ($ReturnType == 'fetch'){
                return $Query->fetch(PDO::FETCH_ASSOC);
            }
            elseif ($ReturnType == 'obj') {
                return $Query->fetch(PDO::FETCH_OBJ);
            }
            elseif ($ReturnType == 'count'){
                return $Query->rowCount();
            }
            elseif ($ReturnType == 'lastid') {
                return $this->lastInsertId();
            }
            elseif ($ReturnType == 'raw'){
                return $Query;
            }
            elseif ($ReturnType == 'raw_arr'){
                return array('query'=> $Query, 'conn'=> $this);
            }
        }
        catch(Exception $e) {
            trigger_error('Failed to Perform Task '.$Statement.' '.$e->getMessage(), E_USER_ERROR);
            die();
        }
	}

    public function inSQLHelper(array $values) {
        $paramKeyValue = [];
        $stringedParamMap = '';

        for ($i=0; $i < sizeof($values); $i++) { 
            $paramKeyValue[':_' . $i] = $values[$i];
            $stringedParamMap .= ':_' . $i . ', ';
        }
        return array('array_param'=> $paramKeyValue, 'string_param'=> trim($stringedParamMap, ', '));
    }
}