<?php 
    //===================Indexing Array START=========================
        //$x=array("Suraya", "Rita", 941);
        //$y=count($x);

        //koyta array data ase,ki doroner data ase,kototuk jayga nise,kon data koto number
            //var_dump($x);

        //data index akare asbe
            //print_r($x);

        //single data dekhar jonno
            //echo $x[1];

        //value change korar jonno ba new data add kora
        /* $x[0]="SI";
            $x[3]="R";
            print_r($x); */

        //array er value onno ekta variable er modhe show
        /* foreach($x as $y){
                echo $y."</br>";
            }  */
            
        //array er value onno ekta variable er modhe index soho show    
            /* foreach($x as $y=>$z){
                echo"$y=>$z <br>";
            } */

            /*for($a=0; $a<$y; $a++){
                echo $a."=>".$x[$a]."<br>";
            }*/

    //====================Indexing Array END==========================
    //====================Associative Array START======================
        
        /*$info=array("Name"=>"RITA", "Age"=>23, "Phone"=>016125, "City"=>"Dhaka");
            var_dump($info);

            print_r($info);

            echo $info["Name"];

            $info["Name"]="MAMUN";
            $info["Age"]=30;
            print_r($info);

            foreach($info as $x){
                echo $x."<br>";
            }

            foreach($info as $x=>$y){
                echo"$x=>$y </br>";
            }*/

    //====================Associative Array END======================

    //===================Indexing Array Value ADD START=========================

        //============single value add==========
            $animal=["RAT", "CAT", "DOG"];
                echo"<pre> </br>";
                print_r($animal);

                array_push($animal,"TIGER");
                echo"<pre> </br>";
                print_r($animal);

        //============multi value add==========
                array_push($animal,"LION", 123);
                echo"<pre> </br>";
                print_r($animal);

    //===================Indexing Array Value ADD end=========================
    //====================Associative Array Value ADD START======================

        //============single value add==========
            
    //====================Associative Array Value ADD end======================
?>