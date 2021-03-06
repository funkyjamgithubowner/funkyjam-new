<?php
App::uses('Model', 'Model');
class AppModel extends Model {
	public $actsAs = array('Containable');

	function validSelectString($field)
	{
		if (array_values($field)[0] !== (string)0) { return true; }
	}

	function validSelect($field)
	{
		if (array_values($field)[0] !== 0) { return true; }
	}

	function validSelectNull($field)
	{
		$field = array_keys($field);
		if ($this->data[$this->name][$field[0]] != null) {
			return true;
		}
		return false;
	}

	function validAlphaNumeric($field)
	{
		$field = array_keys($field);
		if (preg_match('/^[a-zA-Z0-9]+$/', $this->data[$this->name][$field[0]])) {
			return true;
		}
		return false;
	}

	function validAlphaNumericSymbol($field)
	{
		$field = array_keys($field);
		if (preg_match('/^[a-zA-Z0-9@_\+\-\.]+$/', $this->data[$this->name][$field[0]])) {
			return true;
		}
		return false;
	}
	/*
        インクリメント
        @params int $id 指定したIDを更新
        @params str $field フィールド名
        @params int $int 増減したい数値
        ex. 3増やす 3 , 10減らす -10
    */
    function increment($model, $field, $id, $int=1){
        $this->query("UPDATE " . $model . " SET " . $field . " = " . $field . " + ".$int." WHERE id=" . $id);
    }
}
