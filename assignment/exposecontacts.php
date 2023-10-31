<?php
$myfile = file("./data/companycontacts.txt");


?>

<ul>
    <?php foreach ($myfile as $line) { ?>
        <li><?php echo $line ?></li>
    <?php }  ?>
</ul>