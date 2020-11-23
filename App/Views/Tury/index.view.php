<?php
/** @var \App\Models\Tura[] $data */
foreach ($data as $tura) {
?>

    <div class="card karta">
        <img class="card-img-top"
             src="SalerSemestralka/Public/img/tury/<?=$tura->getImg()?>"alt =
        "Card image" style = "width:100%" >
        <div class="card-body" >
            <h4 class="card-title"><?=$tura->getNazov()?></h4>
                <div class="text">
                    <p class="card-text"><?=$tura->getText()?></p>
                </div>
            <a class="btn btn-primary"
               href="?c=tury&a=uprav&id=<?=$tura->getId()?>">Upravit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-danger"
               href="?c=tury&a=odstranit&id=<?=$tura->getId()?>">Odstranit</a>
        </div >
    </div>

<?php
}
?>