<div class="row">
    <div class="col-12">
        <ol>
            <?php if ($safeSearch): ?>
                <?php foreach ($safeSearch->info() as $key=>$val): ?>
                    <li><h6><?php echo ucfirst($key) ?>: </h6> <strong><?php echo $val; ?></strong><br><br></li>
                <?php endforeach ?>
            <?php endif?>
        </ol>
    </div>
</div>