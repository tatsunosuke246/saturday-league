<?php

/**
 *  Htmlフォーム作成ユーティリティクラス
 */

class FormUtil
{
	public static function getSexOptions( $parameter_name, $select_sex = 1 )
	{
		$sex_list = array(
			'1' => '男性',
			'2' => '女性' );

		$s = '';
		$s .= '<SELECT size="0" name="'.$parameter_name.'">\n';
		foreach ( $sex_list as $key => $value )
		{
			if( $key == $select_sex )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public static function getSelectOptions( $name, $array_select_value,  $selected = 0 )
	{
		$s = '<SELECT size="0" name='.$name.'>\n';
		foreach ( $array_select_value as $key => $value )
		{
			if( $key == $selected )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}


	public static function getRadioOptions( $name, $array_radio_value,  $selected = 0, $disabled = 0 )
	{
		$s = '';
		foreach ( $array_radio_value as $key => $value )
		{
			if( $key == $selected )
			{
				$attr = ' checked';
			}
			else if( $key == $disabled )
			{
				$attr = ' disabled';
			}
			else
			{
				$attr = '';
			}
			$s .= '<input type="radio" name="'.$name.'" value="'.$key.'" '.$attr.'>'.$value;
		}
		return $s;
	}
}

