<?php 
    $x=array("Suraya", "Rita", 941);

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
        foreach($x as $y=>$z){
            echo"$y=>$z <br>";
        }
?>