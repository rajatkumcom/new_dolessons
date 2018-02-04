<?php

/**
 * @file
 * Views integration.
 */

/**
 * Implements hook_views_data().
 */
function twilio_otp_views_data() {

  $data['twilio_otp']['table']['group'] = t('Twilio OTP');
  $data['twilio_otp']['table']['base'] = array(
    'field' => 'id',
    'title' => t('Twilio OTP'),
    'help' => t('Twilio OTP contains mobile numbers of users'),
    'weight' => -10,
  );
  $data['twilio_otp']['table']['join'] = array(
    'users' => array(
      'left_field' => 'uid',
      'field' => 'uid',
    ),
  );
  $data['twilio_otp']['id'] = array(
    'title' => t('Id Twilio OTP'),
    'help' => t('Serial Id Twilio OTP'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );
  $data['twilio_otp']['uid'] = array(
    'title' => t('Uid Twilio OTP'),
    'help' => t('Uid Twilio OTP'),
    'relationship' => array(
      'base' => 'users',
      'base field' => 'uid',
      'handler' => 'views_handler_relationship',
      'label' => t('Twilio OTP'),
      'title' => t('Twilio OTP'),
      'help' => t('Twilio OTP'),
    ),
  );
  $data['twilio_otp']['mobile_number'] = array(
    'title' => t('Mobile Number'),
    'help' => t('Mobile Number'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );
  $data['twilio_otp']['country_code'] = array(
    'title' => t('Country Code'),
    'help' => t('Country Code'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );

  return $data;
}
