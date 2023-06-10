<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo "&nbsp;";
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>
	<section class="content">
        <div class="box box-primary">    
            <div class="box-header with-border">
                <h3 class="box-title"> <?=$this->title ?> </h3>
            </div>
            <div class="box-body">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Derma Cosmetic `REBONCEL`</strong>
</footer>

<div class='control-sidebar-bg'></div>