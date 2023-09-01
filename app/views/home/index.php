<h1><?= $data['url'] ?></h1>
<?php
    foreach($data['all'] as $d){
?>
    <ul>
        <li><?= $d['nama'] ?></li>
        <li><?= $d['username'] ?></li>
        <li><?= $d['password'] ?></li>

    </ul>
<?php
    }
?>