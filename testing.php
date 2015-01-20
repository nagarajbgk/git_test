<?php
global $DB;
require_once("config.php");
require_once("$CFG->dirroot/user/profile/lib.php");

require_login();

/*$newuserobj = new stdClass();
$newuserobj->profile_field_RNO="123rfgg";
$newuserobj->id = $USER->id;
profile_save_data($newuserobj);
$user = $DB->get_record('user', array('id'=>$newuserobj->id));
$table='user'; 
*/

$user=$DB->get_record_sql('SELECT * FROM {user} WHERE firstname = :firstname AND lastname = :lastname', 
                       array('firstname' => 'Nagaraj','lastname'=> 'K'));

$conditions='';
$table='user'; 










//$user=$DB->get_record($table, array('id'=>$newuserobj->id) , $fields='*', $strictness=IGNORE_MISSING); 

echo "<pre>";
print_r($user);
echo "</pre>";
echo "<pre>";
print_r(profile_user_record($USER->id));
echo "</pre>";
