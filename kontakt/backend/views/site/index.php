<?php

/* @var $this yii\web\View */

$this->title = 'Админпанель';
?>
<div class="site-index">

    <ul>
										 <li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">Главная</a></li>
                                <li class="dropdown"><a href="#">Данные опроса<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['interview/index']) ?>">Список </a></li>
                                       
                                    </ul>
                                </li>
</ul>


    </div>
</div>
