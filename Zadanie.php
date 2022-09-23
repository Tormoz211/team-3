<?php
for($i=1; $i <=30; $i++){
    if ($i%2 == 0){
        echo $i, '<br>';}
}


$i=1;
for($i==1;$i<=50;$i++){
   

    if($i % 3 == 0) {
        echo "<div class='element50 kursiv'>".$i." номер элемента</div>";
    }else{
        echo "<div class='element50'>".$i." номер элемента</div>";
    }
}
?>
<style>
    .element50{
        background-color: #1486ff;
        padding: 10px;
        margin: 5px;
        display: inline-block;
    }
    .kursiv{
        font-style: italic;
    }
</style>
