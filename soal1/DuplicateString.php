<?php
	class DuplicateString {
		public function getDuplicateString($string){
			$arr_in = str_split($string);
			$arr_temp = array();
			$dup_string = null;

			foreach ($arr_in as $arr) {
				if($dup_string == null){
					if(!in_array($arr, $arr_temp)){
						$arr_temp[] = $arr; 
					} else {
						$dup_string =  $arr;
					}
				}
			}

			echo $dup_string;
		}
	}

?>