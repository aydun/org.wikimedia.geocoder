<?php
/**
 * Created by IntelliJ IDEA.
 * User: emcnaughton
 * Date: 1/19/18
 * Time: 3:09 PM
 */
return [
  [
    'name' => 'mapquest',
    'entity' => 'Geocoder',
    'params' => [
      'version' => 3,
      'name' => 'mapquest',
      'title' => 'MapQuest',
      'class' => 'MapQuest\MapQuest',
      'is_active' => 1,
      'weight' => 2,
      'threshold' => '15000',
      'threshold_unit' => 'month',
    ],
    'help_text' => ts('api key required - 15000 for free per month - sign up https://developer.mapquest.com/plan_purchase/steps/business_edition/business_edition_free/register')
  ]
];