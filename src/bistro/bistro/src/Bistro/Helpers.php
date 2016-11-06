<?php
 
namespace Bistro\Bistro;
 
/**
 * Costing Helpers
 */
class Helpers
{
  public function money($value, $modifier = null)
  {
    if ($modifier) {
      $format = money_format( $modifier, $value);
    } else {
      $format = money_format("$%i", $value);
    }
    return $format;
  }
 
  public function devout($array)
  {
   echo "<pre>";
   print_r($array);
   echo "</pre>";
  }
}