<?php
function get_course(){
    global  $course;
    return array_values($course);

}
function find_by_semester($semester){
    global $course;
    return(array_key_exists($semester,$course)? $_GET['semester']:'invalid course');
}

?>