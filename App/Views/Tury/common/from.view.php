<?php
/** @var \App\Models\Tura $data */
?>
<div class="container">
    <div class="stred">
        <form method="post">
            <?php if (!empty($data)) { ?>
                <input type="hidden" value="<?=$data->getId()?>" name="id">
            <?php } ?>
            <label for="nazov">Názov túry:</label>
            <input type="text" class="form-control" id="nazov"
                   placeholder="Zadaj názov" name="nazov"
                   pattern="[A-Za-z]{1,50}"
                   value="<?= ( !empty($data) ? $data->getNazov() : "") ?>"
                   required>
            <br>

            <label for="text">Text:</label>
            <textarea id="text" class="form-control" rows="5" minlength="30"
                      maxlength="500" placeholder="Zadaj text" name="text"
                      required><?=( !empty($data) ? $data->getText() : "")
                ?></textarea>
            <br>
            <div class="custom-file">
                <label for="subor">Vyber obrázok</label>
                <input type="file" id="subor" name="img" accept="image/*"
                       value="<?=( !empty($data) ? $data->getImg() : "") ?>">
            </div>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Odoslat">
        </form>
    </div>
</div>

