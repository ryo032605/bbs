<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
 }
 /*DB接続*/
 function dbconnect(){
 $db=new mysqli('mysql26.conoha.ne.jp','ok2dv_66sc8auk','Shinomari_53','ok2dv_778nn44f');
	if(!$db){
		die($db->error);
	}
    return $db;
}
 ?>