<?php
require 'controller.php';
require 'modal.php';
$list_of_course = get_course();
?>
<select name="namecourse">
    <?php foreach ($list_of_course as $course_name): ?>
        <option><?=$course_name?></option>
    <?php endforeach;  ?>
</select>