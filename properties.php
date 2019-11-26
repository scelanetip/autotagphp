<div class="row">
    <div class="col-12">
        <ol>
            <?php if ($properties): ?>
                <?php foreach ($properties->info()['dominantColors'] as $key=>$dominantColors): ?>
                    <?php foreach ($dominantColors as $key=>$dominantColor): ?>

                        <?php
                            $rgb = json_decode(json_encode($dominantColor))-> color;
                            $score = json_decode(json_encode($dominantColor))-> score;
                            $pixelFraction = json_decode(json_encode($dominantColor))-> pixelFraction;
                        ?>
                         <li>
                            <strong>
                                <span style="color: rgb(<?php echo $rgb->red;?>,<?php echo $rgb->green;?>,<?php echo $rgb->blue;?>);">
                                RGB:
                                </span>
                            </strong>
                            <?php echo $rgb->red;?>,<?php echo $rgb->green;?>,<?php echo $rgb->blue; ?>
                            <br>
                            <strong>Score: </strong><?php echo $score?><br>
                            <strong>Pixel Fraction: </strong><?php echo $pixelFraction?><br>
                         </li>
                    <?php endforeach ?>
                <?php endforeach ?>
            <?php endif?>
        </ol>
    </div>
</div>