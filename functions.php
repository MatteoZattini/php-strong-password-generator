<?php 

function getDizionario ($dizionario, $charval, $char, $numval, $num, $symbval, $symb, $length, $psswrd ) {
//     if ($charval == "char" || $numval == "num" || $symbval == "symb") {
//        $dizionario = $dizionario . $char . $num . $symb;
//    }
     if ($charval == "char") {
        $dizionario .= $char;
    }
      if ($numval == "num") {
        $dizionario .= $num;
    } 
     if ($symbval == "symb") {
        $dizionario .= $symb;
    }
    for ($i = 0; $i <= $length - 1; $i++) {
        $psswrd .= $dizionario[rand(0, strlen($dizionario) - 1)];
    }
    return $psswrd;
};

// function getPassword ($dizionario, $length, $psswrd) {
//    for ($i = 0; $i <= $length - 1; $i++) {
//      $psswrd .= $dizionario[rand(0, strlen($dizionario) - 1)];
//  }
//  return $psswrd;
// };

//     function getRandInt($length, $psswrd, $char, $num, $symb, $charval, $numval, $symbval) {
//     //     for ($i = 0; $i <= $length - 1; $i++) {
//     //     $psswrd = $psswrd . $char[rand(0, strlen($char) - 1)];
//     // }
//     // return $psswrd;
//     if ($charval == "char" && $numval == "" && $symbval == "") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $char[rand(0, strlen($char) - 1)];
//         }
//     } else if ($numval == "num" && $charval == "" && $symbval == "") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $num[rand(0, strlen($num) - 1)];
//         }
//     } else if ($symbval == "symb" && $numval == "" && $charval == "") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $symb[rand(0, strlen($symb) - 1)];
//         } 
//     } else if ($charval == "char" && $numval == "num") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $char[rand(0, strlen($char))] .  $num[rand(0, strlen($num) - 1)];
//         }
//     } else if ($charval == "char" && $symbval == "symb") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $char[rand(0, strlen($char))] .  $symb[rand(0, strlen($symb) - 1)];
//         }
//     }
//      else if ($numval == "num" && $charval == "char") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $num[rand(0, strlen($num))] .  $char[rand(0, strlen($char) - 1)];
//         }
//     }
//     else if ($numval == "num" && $symbval == "symb") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $num[rand(0, strlen($num))] .  $symb[rand(0, strlen($symb) - 1)];
//         }
//     }
//     else if ($symbval == "symb" && $charval == "char") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $symb[rand(0, strlen($symb))] .  $char[rand(0, strlen($char) - 1)];
//         }
//     }
//     else if ($symbval == "symb" && $numval == "num") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $symb[rand(0, strlen($symb))] .  $num[rand(0, strlen($num) - 1)];
//         }
//     }
//     else if ($symbval == "num" && $numval == "num" && $charval == "char") {
//         for ($i = 0; $i <= $length - 1; $i++) {
//             $psswrd = $psswrd . $symb[rand(0, strlen($symb))] .  $num[rand(0, strlen($num) - 1)] .  $char[rand(0, strlen($char) - 1)];
//         }
//     }
//     return $psswrd;
// };



?>




