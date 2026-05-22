<?php
$teacher_category = !empty(get_field( 'teacher_category', $post_id )) ? get_field( 'teacher_category', $post_id ) : 'Teacher category';
$teacher_description = !empty(get_field( 'teacher_description', $post_id )) ? get_field( 'teacher_description', $post_id ) : 'Teacher description';
$teacher_experience = !empty(get_field( 'teacher_experience', $post_id )) ? get_field( 'teacher_experience', $post_id ) : 'Teacher experience';
$teacher_taught = !empty(get_field( 'teacher_taught', $post_id )) ? get_field( 'teacher_taught', $post_id ) : 'Teacher taught';
$teacher_languages = !empty(get_field( 'teacher_languages', $post_id )) ? get_field( 'teacher_languages', $post_id ) : 'Teacher languages';
?>

  <div class="teacher_category">
   <?php echo esc_html( $teacher_category ); ?>
  </div>
  <p class="teacher_description">
   <?php echo esc_html( $teacher_description ); ?>
  </p>
  <div class="teacher_skills">
    <div class="flex items-center justify-between m-12 text-gray-600">
      <span>Experience</span>
      <span class="font-medium text-gray-900"><?php echo esc_html( $teacher_experience ); ?> years</span>
    </div>
    <div class="flex items-center justify-between m-12 text-gray-600">
      <span>Lessons taught</span>
      <span class="font-medium text-gray-900"><?php echo esc_html( $teacher_taught ); ?></span>
    </div>
    <div class="flex items-center justify-between m-12 text-gray-600">
      <span>Languages</span>
      <span class="font-medium text-gray-900"><?php echo esc_html( $teacher_languages ); ?></span>
    </div>
  </div>