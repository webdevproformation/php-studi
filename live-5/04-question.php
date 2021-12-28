<?php $matieres = ["js","php","html", "css"]; ?>

<ul>
    <?php foreach($matieres as $m) : ?>
        <li><?= $m ?></li>
    <?php endforeach ?>
</ul>

<?php 

foreach($matieres as $m){

}

// mixer du php et html
foreach($matieres as $m) :
    
endforeach ;
?>

<ul>
    <?php foreach($matieres as $m) { ?>
        <?php if($m == "php"){ ?>
            <li>je fais du php en live</li>
        <?php } else {?>
            <li><?php echo $m ?> 
        <?php } ?>
    <?php } ?>
</ul>


<ul>
    <?php foreach($matieres as $m) : ?>
        <?php if($m == "php") : ?>
            <li>je fais du php en live</li>
        <?php else  : ?>
            <li><?php echo $m ?> 
        <?php endif ?>
    <?php endforeach ?>
</ul>
