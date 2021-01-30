<?php
/**
 * User: izzat
 * Date: 1/13/21
 * Time: 11:26 PM
 *
 */
/** @var \common\models\Product $model */
?>
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="<?= $model->getImageUrl() ?>" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#"> <?= $model->name ?> </a>
        </h4>
        <h5> <?php echo Yii::$app->formatter->asCurrency($model->price) ?> </h5>
        <p class="card-text"> <?= $model->getShortDescription() ?></p>
    </div>
    <div class="card-footer text-right">
        <a href="#" class="btn btn-primary">
            Add to Cart
        </a>
    </div>
</div>

