<?php 
    $fruit=array("Mango", "Orange", 123, 10.9);
        var_dump($fruit);echo"</br></br>";

        print_r($fruit);echo"</br></br>";

        echo $fruit[3];echo"</br></br>";

        echo $fruit[1]="Grape";echo"</br></br>";

        print_r($fruit);echo"</br></br>";

        foreach($fruit as $nm){
            echo $nm."<br>";
        }echo"</br></br>";

        foreach($fruit as $num=>$nm){
            echo "$num=>$nm <br>";
        }
?>