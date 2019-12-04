<div class="row">
    <div class="col-12">
    <?php if ($labels): ?>
        <input type="text" value="<?php foreach ($labels as $key=>$label):
            echo ucfirst($label->info()['description']);?>,
            <?php endforeach ?>" data-role="tagsinput" />
        <script>
            $(function() {
                $("input").tagsinput('items')

        });
        </script>
    <?php endif?>
    </div>
    <div class="col-12">
        <ol>
            <?php if ($labels): ?>
                <?php foreach ($labels as $key=>$label): ?>
                    <li><h6><?php echo ucfirst($label->info()['description']) ?></h6> Confidence: <strong><?php echo number_format($label->info()['score'] * 100, 2)?>
                    </strong><br><br></li>
                <?php endforeach ?>
            <?php endif?>
        </ol>
    </div>
</div>