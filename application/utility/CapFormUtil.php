<?php

/**
 *  Htmlフォーム作成ユーティリティクラス
 */

class CapFormUtil
{
	public static function MonthPerMoneyCodeOptions( $parameter_name, $money_code )
	{
		$sex_list = array(
			'1' => '万円／月',
			'2' => '千円／月' );

		$s = '';
		$s .= '<SELECT size="0" name="'.$parameter_name.'">';
		foreach ( $sex_list as $key => $value )
		{
			if( $key == $money_code )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>";
		return $s;
	}

	public static function SelectSyachouhaigusyaOptions( $select_syachouhaigusya )
	{
		$sex_list = array(
			'1' => '社長',
			'2' => '配偶者' );

		$s = '';
		$s .= '<SELECT size="0" name="select_syachouhaigusya" onChange="selectSyachouhaigusya()">';
		foreach ( $sex_list as $key => $value )
		{
			if( $key == $select_syachouhaigusya )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>";
		return $s;
	}
}

