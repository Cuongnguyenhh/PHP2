<?php
require_once './vendor/autoload.php';
use app\core\Form;
$form = new Form();
?>

<style>
    .form-container {
        width: 500px;
        padding: 20px;
        font-family: sans-serif;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-size: 14px;
        color: #333;
    }
    input {
        width: 100%;
        padding: 12px;
        font-size: 14px;
        border: 1px solid #ddd;
        box-sizing: border-box;
    }
    button {
        width: 100%;
        padding: 12px;
        font-size: 14px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>

<div class="container form-container">
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
    <?php echo $form->field('password') -> PasswordField(); ?>
    <?php echo $form->field('confirmPassword') -> PasswordField();?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo Form::end(); ?>
</div>

