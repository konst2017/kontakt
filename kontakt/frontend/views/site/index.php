<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;

use yii\captcha\Captcha;
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">
<h1> Добавить контакт </h1>

   <?php echo Yii::$app->session->getFlash('success'); ?>

                   <?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => ['site/index']]); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'tel') ?>

                  

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?> 

               
<h1> Список контактов </h1>
<?php if( !empty($hits) ): ?>
<div class="features_items"><!--features_items-->
   
    <?php foreach($hits as $hit): ?>
   
    <div class="col">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <p><a href="<?= \yii\helpers\Url::to(['site/view', 'id' => $hit->id]) ?>">
<?= $hit->name?><?= Html::img('img/kn1.jpg', ['alt' => 'Наш логотип']) ?></a></p> 
                  
                 <h6><?= $hit->tel?> </h6>
                </div>
                
            </div>
            
        </div>
    </div>
    <?php endforeach;?>
</div><!--features_items-->
<?php endif; ?>

</div>
