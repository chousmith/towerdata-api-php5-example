<?php
/*
 * https://github.com/TowerData/SDKs/blob/master/php5/TowerDataExample.php
 *
 * Copyright 2010 Rapleaf
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace TowerData;
include "config.php";
include "TowerDataApi.php";

$bulk = [["email"=>"email1@gmail.com"],
["email"=>"email2@hotmail.com"]];

//echo "\n". "api key : ". $tower_data_api_key ."\n";

$api = new TowerDataApi( $tower_data_api_key );
try {
  $response = $api -> bulk_query($bulk);
  if ( count( $response ) > 0 ) {
    echo '<table><tr><th>#</th><th>email</th><th>marital_status</th><th>net_worth</th><th>occupation</th><th>education</th><th>home_market_value</th><th>gender</th><th>length_of_residence</th><th>household_income</th><th>home_owner_status</th><th>age</th><th>presence_of_children</th></tr>';
    foreach ( $response as $i => $v ) {
      echo '<tr>';
      echo '<td>'. $i .'</td>';
      echo '<td>'. $bulk[$i]['email'] .'</td>';

      echo '<td>'. ( isset($v['marital_status']) ? $v['marital_status'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['net_worth']) ? $v['net_worth'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['occupation']) ? $v['occupation'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['education']) ? $v['education'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['home_market_value']) ? $v['home_market_value'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['gender']) ? $v['gender'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['length_of_residence']) ? $v['length_of_residence'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['household_income']) ? $v['household_income'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['home_owner_status']) ? $v['home_owner_status'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['age']) ? $v['age'] : '' ) .'</td>';
      echo '<td>'. ( isset($v['presence_of_children']) ? $v['presence_of_children'] : '' ) .'</td>';

      echo '</tr>';
    }
    echo '</table>';
  }
  echo '<pre>';
  print_r($response);
  echo '</pre><br>';

} catch (\Exception $e) {
  echo 'Caught exception: ' .  $e->getMessage() . "\n";
}

if (!defined('STDIN')) {
  echo '</pre></body></html>';
}
