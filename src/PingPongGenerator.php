<?php

    class PingPongGenerator {

        function playPingPong($input_number)
        {
           $results = "";
           $count = 1;
           while ($count <= $input_number) {
               if ($count % 3 == 0 && $count % 5 == 0) {
                   $results .= ", ping pong";
               } elseif ($count % 5 == 0) {
                   $results .= ", pong";
               } elseif ($count % 3 == 0) {
                   $results .= ", ping";
               }  else {
                   $results .=  ", " . $count;
               }
               ++$count;
           }
           $results = substr($results, 2);
           return $results;
         }
    }
?>
