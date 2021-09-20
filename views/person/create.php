<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'CRUDapp2';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">CRUD APP - PERSON/CREATE</h1>
    </div>

    <div class="body-content">
<?php 
    $form = ActiveForm::begin()
?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'name');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'lastname');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'birthdate');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'birthplace');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'education');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'privatelife');?>
                </div>
            </div>
        </div>
                <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'work')?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($oneperson, 'achievements')?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
                <?= Html::submitButton('Create Post', ['class' => 'btn btn-primary']);?>
                </div>
                <div class="col-lg-12">
               <a href= <?php echo yii::$app->homeUrl;?> class="btn btn-primary">Come Back</a>
                </div>
            </div>
        </div>
        </div>
        <?php ActiveForm::end(); ?>
        </div>
    </div>

