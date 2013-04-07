<?php

/**
 * 住所関連 ユーティリティクラス
 */

class AddressUtil
{
	/**
	*    全都道府県のoption要素を取得する
	*    @param    string    $selected    選択状態にする都道府県の区分 or 都道府県名
	*    @return    string    （省略可）都道府県を選択するselect要素のhtml
	*/
	public static function getOptions( $selected = '' )
	{
		$list = AddressUtil::_getList();
		$s = '';
		$s .= "<SELECT size=\"0\" name=\"todouhuken_id\">\n";
		foreach ($list as $block => $kens)
		{
			$s .= "<optgroup label=\"$block\">\n";
			foreach ($kens as $kbn => $ken)
			{
				if ($kbn == $selected || $ken == $selected)
				{
					$attr = ' selected="selected"';
				}
				else
				{
					$attr = '';
				}
				$s .= "<option value=\"$kbn\"$attr>$ken</option>\n";
			}
			$s .= "</optgroup>\n";
		}
		$s .= "</SELECT>\n";

		return $s;
	}

	/**
	*    都道府県の区分から都道府県名を取得する
	*    @param    string    $kbn    都道府県の区分
	*    @return   string    都道府県名
	*/
	public static function getName( $kbn )
	{
		$list = AddressUtil::_getList();
		foreach ( $list as $block => $kens )
		{
			if ( $kens[$kbn] )
			{
				return $kens[$kbn];
			}
		}
		return false;
	}

	public static function getNameFromID( $id )
	{
		$id_list = array(
                  '1' => '北海道',
                  '2' => '青森県',
                  '3' => '岩手県',
                  '4' => '宮城県',
                  '5' => '秋田県',
                  '6' => '山形県',
                  '7' => '福島県',
                  '8' => '茨城県',
                  '9' => '栃木県',
                  '10' => '群馬県',
                  '11' => '埼玉県',
                  '12' => '千葉県',
                  '13' => '東京都',
                  '14' => '神奈川県',
                  '15' => '新潟県',
                  '16' => '富山県',
                  '17' => '石川県',
                  '18' => '福井県',
                  '19' => '山梨県',
                  '20' => '長野県',
                  '21' => '岐阜県',
                  '22' => '静岡県',
                  '23' => '愛知県',
                  '24' => '三重県',
                  '25' => '滋賀県',
                  '26' => '京都府',
                  '27' => '大阪府',
                  '28' => '兵庫県',
                  '29' => '奈良県',
                  '30' => '和歌山県',
                  '31' => '鳥取県',
                  '32' => '島根県',
                  '33' => '岡山県',
                  '34' => '広島県',
                  '35' => '山口県',
                  '36' => '徳島県',
                  '37' => '香川県',
                  '38' => '愛媛県',
                  '39' => '高知県',
                  '40' => '福岡県',
                  '41' => '佐賀県',
                  '42' => '長崎県',
                  '43' => '熊本県',
                  '44' => '大分県',
                  '45' => '宮崎県',
                  '46' => '鹿児島県',
                  '47' => '沖縄県'
            );
		$name = $id_list[ $id ];
		return $name;
	}

	/**
	*    都道府県一覧を取得する
	*    @return    array    都道府県一覧
	*/
	private static function _getList()
	{
        return array(
            '北海道・東北' => array(
                  '1' => '北海道'
                , '2' => '青森県'
                , '3' => '岩手県'
                , '4' => '宮城県'
                , '5' => '秋田県'
                , '6' => '山形県'
                , '7' => '福島県'
            ), '関東' => array(
                  '8' => '茨城県'
                , '9' => '栃木県'
                , '10' => '群馬県'
                , '11' => '埼玉県'
                , '12' => '千葉県'
                , '13' => '東京都'
                , '14' => '神奈川県'
            ), '北陸・甲信越' => array(
                  '15' => '新潟県'
                , '16' => '富山県'
                , '17' => '石川県'
                , '18' => '福井県'
                , '19' => '山梨県'
                , '20' => '長野県'
            ), '東海' => array(
                  '21' => '岐阜県'
                , '22' => '静岡県'
                , '23' => '愛知県'
                , '24' => '三重県'
            ), '関西' => array(
                  '25' => '滋賀県'
                , '26' => '京都府'
                , '27' => '大阪府'
                , '28' => '兵庫県'
                , '29' => '奈良県'
                , '30' => '和歌山県'
            ), '中国' => array(
                  '31' => '鳥取県'
                , '32' => '島根県'
                , '33' => '岡山県'
                , '34' => '広島県'
                , '35' => '山口県'
            ), '四国' => array(
                  '36' => '徳島県'
                , '37' => '香川県'
                , '38' => '愛媛県'
                , '39' => '高知県'
            ), '九州' => array(
                  '40' => '福岡県'
                , '41' => '佐賀県'
                , '42' => '長崎県'
                , '43' => '熊本県'
                , '44' => '大分県'
                , '45' => '宮崎県'
                , '46' => '鹿児島県'
                , '47' => '沖縄県'
            )
        );
	}


}

