 /*
 Developer: Saejong Jang

 output:
 200
 Key=ar, Value=Arabic
 Key=ca, Value=Catalan
 Key=cs, Value=Czech
 Key=da, Value=Danish
 Key=de, Value=German
 Key=el, Value=Greek
 Key=en, Value=English
 Key=es, Value=Spanish
 Key=fi, Value=Finnish
 Key=fr, Value=French
 Key=hu, Value=Hungarian
 Key=id, Value=Indonesian
 Key=it, Value=Italian
 Key=iw, Value=Hebrew
 Key=ja, Value=Japanese
 Key=ko, Value=Korean
 Key=lt, Value=Malay
 Key=nl, Value=Dutch
 Key=no, Value=Persian
 Key=pl, Value=Polish
 Key=pt, Value=Portuguese
 Key=ru, Value=Russian
 Key=sv, Value=Swedish
 Key=th, Value=Thai
 Key=tr, Value=Turkish
 Key=zh, Value=Chinese
 Spoke English for about 5 years
 My native language is Korean
 Currently working on my Chinese about 1 year.

 Environment: 
 Editor => VSCode
 Server => Apache(localhost running on Xampp) 
 Language => PHP

 Sources used:
 php.net manual for methods => file_get_contents and json_decode.
 w3schools and stackoverflow => applying php array and json parsing.

 List the HTTP requests and responses:
 file_get_contents(Http GET request only) => fetch the URL(http://gmc.lingotek.com/language) and return response the contents as a JSON string.
 Needed json_decode method to return the value encoded in json in appropriate PHP type.
 response => Key = String(i.e., "ko", "en"), Value = Array(i.e., "language")
 $status_code[0] => shows http connection status 200:success, 404:not found, 400: bad request, 403:forbidden, 504: service unavilable.
 */

<?php

  set_error_handler(
      function ($severity, $message, $file, $line) {
          throw new ErrorException($message, $severity, $severity, $file, $line);
      }
  );

  try {
      //fetch a URL(http://gmc.lingotek.com/language) and return the contents as a string.
      $response = file_get_contents('http://gmc.lingotek.com/language');
      //parsing returned json response into php type
      $data = json_decode($response, true);
      //print out http status
      echo $status_code[0];
      echo "<br>";
      //counting array
      $arrlength = count($data); //26 languages
      //stores $x_value['language'] into array
      foreach($data as $x => $x_value){
        $language[] = $x_value['language'];
        //echo "Key=" . $x . ", Value=" . $x_value['language'];
        //echo "<br>";
      }

      for($x = 0; $x < $arrlength; $x++) {
        if($language[$x] == 'Korean'){
          print_r("My native language is ");
          print_r($language[$x]);
          echo "<br>";
        }
        else if($language[$x] == 'English'){
          print_r("Spoke ");
          print_r($language[$x]);
          print_r(" for about 5 years");
          echo "<br>";
        }
        else if($language[$x] == 'Chinese'){
          print_r("Currently working on my ");
          print_r($language[$x]);
          print_r(" about 1 year.");
          echo "<br>";
        }
      }
  }
  catch (Exception $e) {
      $status_line = $http_response_header[0];
      echo $status_line;
      echo "<br>";
      echo $e->getMessage();
  }

  restore_error_handler();
  exit;
 ?>
