<?php
$course = [
    's1' => 'Bé',
    's2' => 'Xuân',
    's3' => 'Mai',
    's4' => 'Loen`',
    's5' => 'To'

];

//model
function get_course(){
    global  $course;
    return array_values($course);

}
function find_by_semester($semester){
    global $course;
    return(array_key_exists($semester,$course)? $_GET['semester']:'invalid course');
}

//controller
$list_of_course = get_course();
$semester = (!empty($_GET['semester']) ? $_GET['semester']:'' );
$course_name = find_by_semester($semester);
$page_content = $course_name;
//view

?>
<label>
    <select name="course" >
        <?php foreach ($list_of_course as $course_name): ?>
        <option><?=$course_name?></option>
        <?php endforeach;  ?>
    </select>
</label>
