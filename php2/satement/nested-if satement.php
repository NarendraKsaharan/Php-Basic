
<?php

//nested-if satement

$a =60;
$b =75;
$c =95;
$d =10;
$e =70;

if($a > $b){
    if($a > $c){
        if($a > $d){
            if($a > $e){
                echo "A is big";
            }else{
                echo "E is big";
            }
        }else{
            if($d > $e){
                echo "D is big";
            }else{
                echo "E is big";
            }
        }
    }else{
        if($c > $d){
            if($c > $e){
                echo "C is big";
            }else{
                echo "E is big";
            }
        }else
             if($d > $e){
            echo "D is big";
        
        }else{
            echo "E is big";
        }
    }
}else{
    if($b > $c){
        if($b > $d){
            if($b > $e){
                echo "B is big";
            }else{
                echo "E is big";
            }
        }else{
            if($d > $e){
                echo "D is big";
            }else{
                echo "E is big";
            }
        }
    }else{
        if($c > $d){
            if($c > $e){
                echo "C is big";
            }else{
                echo "E is big";
            }
        }else{
            if($d > $e){
                echo "D is big";
            }else{
                echo "E is big";
            }
        }
    }
}

/*
$a =60;
$b =70;
$c =80;
$d =90;
$e =100;
$f =110;
if($a > $b){
    if($a > $c){
        if($a > $d){
            if($a > $e){
                if($a > $f){
                    echo "A is big";
                }else{
                    echo "F is big";
                }
            } else{
                if($e > $f){
                    echo "E is big";
                }else{
                    echo "F is big";
                }
            }   
        }else{
            if($d > $e){
                if($d > $f){
                    echo "D is big";
                }else{
                    echo "F is big";
                        
                    
                        
                    
                }
            }else{
                if($e > $f){
                    echo "E is big";
                }else{
                    echo "F is big";
                }
            }
        }
    }else{
        if($c > $d){
            if($c > $e){
                if($c > $f){
                    echo "C is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                    echo"E is big";
                }else{
                    echo"F is big";
                }
            }
        }else{
            if($d > $e){
                if($d > $f){
                    echo"D is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                    echo"E is big";
                }else{
                    echo"F is big";
                }
            }
        }
    }
}else{
    if($b > $c){
        if($b > $d){
            if($b > $e){
                if($b > $f){
                    echo"B is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                    echo"E is big";
                }else{
                    echo"F is big";
                }
            }
        }else{
            if($d > $e){
                if($d > $f){
                    echo"D is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                  echo"E is big";  
                }else{
                    echo"F is big";
                }
            }
        }
    }else{
        if($c > $d){
            if($c > $e){
                if($c > $f){
                    echo"C is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                    echo"E is big";
                }else{
                    echo"F is big";
                }
            }
        }else{
            if($d > $e){
                if($d > $f){
                    echo"D is big";
                }else{
                    echo"F is big";
                }
            }else{
                if($e > $f){
                    echo"E is big";
                }else{
                    echo"F is big";
                }
            }

            
        }
    }
}
*/

// $a =60;
// $b =75;
// $c =95;
// $d =10;
// $e =70;

// if($a > $b){
//     if($a > $c){
//         if($a > $d){
//             if($a > $e){
//                 echo "A is big";
//             }else{
//                 echo "E is big";
//             }
//         }else{
//             if($d > $e){
//                 echo "D is big";
//             }else{
//                 echo "E is big";
//             }
//         }
//     }else{
//         if($c > $d){
//             if($c > $e){
//                 echo "C is big";
//             }else{
//                 echo "E is big";
//             }
//         }else
//              if($d > $e){
//             echo "D is big";
        
//         }else{
//             echo "E is big";
//         }
//     }
// }else{
//     if($b > $c){
//         if($b > $d){
//             if($b > $e){
//                 echo "B is big";
//             }else{
//                 echo "E is big";
//             }
//         }else{
//             if($d > $e){
//                 echo "D is big";
//             }else{
//                 echo "E is big";
//             }
//         }
//     }else{
//         if($c > $d){
//             if($c > $e){
//                 echo "C is big";
//             }else{
//                 echo "E is big";
//             }
//         }else{
//             if($d > $e){
//                 echo "D is big";
//             }else{
//                 echo "E is big";
//             }
//         }
//     }
// }

$a =60;
$b =75;
$c =95;
$d =10;
$e =70;
$f =20;
$g =30;
if($a > $b){
    if($a > $c){
        if($a > $d){
            if($a > $e){
                if($a > $f){
                    if($a > $g){
                      echo  "a is big";
                    }else{
                      echo "g is big";
                    }
                }else{
                    if($f > $g){
                        echo "f is big";
                    }else{
                       echo "g is big";
                    }
                }
            }else{
                if($e > $f){
                    if($e > $g){
                        echo "e is big";
                    }else{
                        echo "g is big";
                    }
                }else{
                    if($f > $g){
                        echo "f is big";
                    }else{
                        echo "g is big";
                    }
                }
            }
        }else{
            if($d > $e){
                if($d > $f){
                    if($d > $g){
                        echo "d is big";
                    }else{
                        echo "g is big";
                    }
                }else{
                    if($f > $g){
                        echo "f is big";
                    }else{
                        echo "g is big";
                    }
                }
            }else{
                if($e > $f){
                    if($e > $g){
                        echo "e is big";
                    }else{
                        echo "g is big";
                    }
                }else{
                    if($f > $g){
                        echo  "f is big";
                    }else{
                        echo "g is big";
                    }
                }
            }
        }

        
    }else{
        if($c > $d){
            if($c > $e){
              if($c > $f){
                if($c > $g){
                    echo "c is big";
                }else{
                    echo "g is big";
                }
            }else{
                if($f > $g){
                    echo "f is big";
                }else{
                    echo "g is big";
                }
            }
         }else{
            if($e > $f){
                if($e > $g){
                    echo "e is big";
                }else{
                    echo "g is big";
                }
            }else{
                if($f > $g){
                    echo "f is big";
                }else{
                    echo "g is big";
                }
            }
         } 
      }else{
        if($d > $e){
            if($d > $f){
                if($d > $g){
                    echo "d is big";
                }else{
                    echo "g is big";
                }
            }else{
                if($f > $g){
                    echo "f is big";
                }else{
                    echo "g is big";
                }
            }
        }else{
            if($e > $f){
                if($e > $g){
                    echo "e is big";
                }else{
                    echo "g is big";
                }
            }else{
              if($f > $g){
                    echo "f is big";
                }else{
                    echo "g is big";
                }
        }   }
      }
   }

}else{
    if($b > $c){
        if($b > $d){
            if($b > $e){
                if($b > $f){
                    if($b > $g){
                         echo "b is big";
                    }else{
                        echo "g is big";
                    }
                }
            }
        }
    }
}

?>