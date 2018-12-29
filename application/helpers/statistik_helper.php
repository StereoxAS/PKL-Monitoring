<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function find_max($data) {
        return max($data);
    }

    function find_min($data) {
        return min($data);
    }

    function find_med($data) {
        $iCount = count($data);
        if ($iCount == 0) {
         throw new DomainException('Median of an empty array is undefined');
        }
        // if we're down here it must mean $data
        // has at least 1 item in the array.
        $middle_index = floor($iCount / 2);
        sort($data, SORT_NUMERIC);
        $median = $data[$middle_index]; // assume an odd # of items
        // Handle the even case by averaging the middle 2 items
        if ($iCount % 2 == 0) {
         $median = ($median + $data[$middle_index - 1]) / 2;
        }
        return $median;
        //return min($data);
    }

    function find_range($data){
    	return(max($data)-min($data));
    }

    function find_modus($data){
        $v = array_count_values($data);
        arsort($v);
        foreach($v as $k => $v){$modus = $k; break;}
        return $modus;
    }

    function find_q1($data){
      sort($data, SORT_NUMERIC);
      $pos = (count($data) - 1) * 0.25;

      $base = floor($pos);
      $rest = $pos - $base;

      if( isset($data[$base+1]) ) {
        return $data[$base] + $rest * ($data[$base+1] - $data[$base]);
      } else {
        return $data[$base];
      }
    }

    function find_variance($data){
    	$temp = [];
    	for ($i=0; $i <count($data) ; $i++) {
    		$temp[$i] = $data[$i]*$data[$i];
    	}

    	$data_quadratic = array_sum($temp);
		$mean = array_sum($data)/count($data);

		$variance = ($data_quadratic-(count($data)*$mean*$mean))/(count($data)-1);

		return $variance;
    }


    function find_q3($data){
      sort($data, SORT_NUMERIC);
      $pos = (count($data) - 1) * 0.75;

      $base = floor($pos);
      $rest = $pos - $base;

      if( isset($data[$base+1]) ) {
        return $data[$base] + $rest * ($data[$base+1] - $data[$base]);
      } else {
        return $data[$base];
      }
    }

    function find_stdev($data){
    	$temp = [];
    	for ($i=0; $i <count($data) ; $i++) {
    		$temp[$i] = $data[$i]*$data[$i];
    	}

    	$data_quadratic = array_sum($temp);
		$mean = array_sum($data)/count($data);

		$variance = ($data_quadratic-(count($data)*$mean*$mean));

		return sqrt($variance);
    }



    function find_mean($data){

		$mean = array_sum($data)/count($data);

		return $mean;
    }




    function find_skewness($data){
    //sort($data, SORT_NUMERIC);
        $numValues = count( $data );
        if ( $numValues == 0 ) {
          return 0.0;
        }

        // Use function from php_stats library if available
        if ( function_exists( 'stats_skew' ) ) {
          return stats_skew( $data );
        }

        //$mean = array_sum( $data ) / floatval( $numValues );
        $mean = find_mean($data);
        $add2 = 0.0;
        $add3 = 0.0;
        foreach ( $data as $value ) {
          if ( ! is_numeric( $value ) ) {
            return false;
          }

          $dif = $value - $mean;
          $add2 += ( $dif * $dif );
          $add3 += ( $dif * $dif * $dif );

        } // foreach values

        //$variance = $add2 / floatval( $numValues );
        $variance = find_variance($data);
        return ( $add3 / floatval( $numValues ) ) / pow( $variance, 3 / 2.0  );
    }





    function find_kurtosis($data){
    $numValues = count( $data );
 if ( $numValues == 0 ) {
   return 0.0;
 }

 // Use function from php_stats library if available
 if ( function_exists( 'stats_kurtosis' ) ) {
   return stats_kurtosis( $data );
 }

 $mean = array_sum( $data ) / floatval( $numValues );
 $add2 = 0.0;
 $add4 = 0.0;

 foreach ( $data as $value ) {
   if ( ! is_numeric( $value ) ) {
     return false;
   }
   $dif = $value - $mean;
   $dif2 = $dif * $dif;
   $add2 += $dif2;
   $add4 += ( $dif2 * $dif2 );
 } // foreach values


 //$variance = $add2 / floatval( $numValues );
 $variance = find_variance($data);
 return ( $add4 * $numValues ) / ( $add2 * $add2 ) - 3.0;
 }

 function skewnessandkurtosis($array, &$skew, &$kurt) {
 $skew = "N/A";
 $kurt = "N/A";
 $amount = count($array);
 if ($amount > 2) {
 for ($i = 0, $m2 =0,$m3=0,$m4=0; $i < $amount; $i++) {
 $array [$i] -= find_mean($array);
 $m2 += pow($array[$i], 2);
 $m3 += pow($array[$i], 3);
 $m4 += pow($array[$i], 4);
 }
 $m2 /= $amount;
 $m3 /= $amount;
 $m4 /= $amount;
 $skew = $m3 / pow($m2, 1.5);
 $skew *= sqrt($amount*($amount-1))/ ($amount-2);
 if ($amount > 3) {
 $kurt = ($m4/ pow($m2, 2))-3;
 $kurt = (($amount+1)*$kurt)+6;
 $kurt *= ($amount-1)/(($amount-2)*($amount-3));
 }
 }
 }

  function find_histogram($datas){
      $min = find_min($datas);
      $max = find_max($datas);
      $kelas = 1 + (3.3 * log(count($datas),10));
      $range = find_range($datas);
      $interval = $range/$kelas;

      $interv = [];

      $histogram = [];
      $nilai = [];
      $temp = [];
      $i = 0;
      $j = 0;
      $b = 0;

      if($range == 0){
        array_push($interv, $datas[0]);
        array_push($temp, count($datas));

      }else{
              $widths = range($min, $max, ceil($interval)); // creates array of the form: array(0, 10, 20, 30, 40, ...)
              $bins = array();
              $isLast = count($widths);

              $check = (ceil($interval)*($isLast-1))+$min;

              foreach($widths as $key => $value) {
                  if($key < $isLast - 1) {
                      $bins[] = array('min' => $value, 'max' => $widths[$key+1]);
                  }
              }


              if($check<$max){
                array_push($bins, array('min' => $check, 'max' => ($check+ceil($interval))));
              }




                    sort($datas);

                  while ($b < count($bins)) {

                      array_push($interv, (($bins[$b]['min'])+$b)."-".($bins[$b]['max']+$b));

                    
                        $i = $j;

                    $jumlah = 0;
                                  
                        for($i; $i<count($datas); $i++) {
                                $tracker[$i] = "$datas[$i] = $i";
                                $batas = pow(10,(substr_count($datas[$i], ".")))*0.5;

                                if( ($datas[$i] >= ($bins[$b]['min']+$b-$batas)) && ($datas[$i] < ($bins[$b]['max']+$b+$batas)) ) {
                                    $jumlah = $jumlah+1;
                                    if($i == count($datas)-1){
                                      array_push($temp, $jumlah);                                 
                                    }
                                }else{

                                    array_push($temp, $jumlah);
                     
                                  $j = $i;

                                  break;
                               }

                        }  
                        $b = $b+1;
                  }

                  if($temp[count($interv)-1]==0){
                      unset($interv[count($interv)-1]);
                      unset($temp[count($temp)-1]);
                  }

      }



                    


      array_push($histogram, $temp);
      array_push($histogram, $interv);

      return $histogram;
  }
  
?>
