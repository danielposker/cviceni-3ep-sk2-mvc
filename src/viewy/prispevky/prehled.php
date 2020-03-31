<script src="https://kit.fontawesome.com/2bff683dca.js" crossorigin="anonymous"></script>
<h1>Příspěvky</h1>
<ul>
    <?php
        foreach($prispevky as $prispevek)
        {
            echo "<li><a href=?c=prispevky&a=ziskatData&id=" . $prispevek->id . "><i class='far fa-edit'></i></a> <a href=?c=prispevky&a=smazat&id=" . $prispevek->id . "><i class='far fa-trash-alt'></i></a> <a href=?c=prispevky&a=detail&id=" . $prispevek->id . ">" . $prispevek->nadpis . "</a></li>";
        }
    ?>
</ul>