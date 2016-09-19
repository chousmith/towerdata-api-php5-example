# TowerData API php5 Example

TowerData API php5 Example, from https://github.com/TowerData/SDKs/tree/master/php5

## Installation

This has been modified to look for a `config.php` file with the following :

### config.php

      <?php
      namespace TowerData;
      $tower_data_api_key = 'yourapikeyhere';

## Usage

Download these, add that `config.php`, and then go to TowerDataExample.php passing in an email in the URL

`TowerDataExample.php?email=email@example.com`

## Sample Outputs :

      Array
      (
          [marital_status] => Married
          [net_worth] => 250k-500k
          [occupation] => Professional
          [education] => Completed Graduate School
          [home_market_value] => 500k-1mm
          [gender] => Male
          [length_of_residence] => 20+ years
          [household_income] => 150k-175k
          [home_owner_status] => Own
          [age] => 55-64
          [presence_of_children] => Yes
      )

      Array
      (
         [marital_status] => Single
         [net_worth] => 0-5k
         [occupation] => Middle Management
         [education] => Completed Graduate School
         [home_market_value] => 500k-1mm
         [gender] => Male
         [age] => 65+
      )

      Array
      (
          [marital_status] => Married
          [net_worth] => 25k-50k
          [occupation] => Professional
          [education] => Completed High School
          [home_market_value] => 350k-500k
          [gender] => Female
          [length_of_residence] => 3 Years
          [household_income] => 150k-175k
          [home_owner_status] => Own
          [age] => 35-44
          [presence_of_children] => Yes
      )

      Array
      (
          [gender] => Male
          [age] => 25-34
      )

      Array
      (
          [marital_status] => Single
          [net_worth] => 50k-100k
          [home_market_value] => 500k-1mm
          [gender] => Male
          [length_of_residence] => 5 Years
          [household_income] => 15k-25k
          [home_owner_status] => Rent
          [age] => 35-44
          [presence_of_children] => No
      )
