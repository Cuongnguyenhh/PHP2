<?php
require_once './vendor/autoload.php';
use Core\Field;
use app\core\Form;

?>

<div class="container">
    <h1>Create an account</h1>
    <?php $form = Form::begin ('', 'post'); ?>
    <div class="row">
        <div class="col">
        <?php echo $form->field('firstname');?>
        </div>
        <div class="col">
        <?php echo $form->field('lastname'); ?>
        </div>
    </div>
    <?php echo $form->field('email');?>
    <?php echo $form->field('password') -> passwordField(); ?>
    <?php echo $form->field('confirmPassword') -> passwordField();?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo Form::end(); ?>
</div>