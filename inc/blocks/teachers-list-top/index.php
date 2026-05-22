<?php
$teacher_image = !empty(get_field( 'teacher_image', $post_id )) ? get_field( 'teacher_image', $post_id ) : 'Teacher image';
$teacher_name = !empty(get_field( 'teacher_name', $post_id )) ? get_field( 'teacher_name', $post_id ) : 'Teacher name';
$teacher_location = !empty(get_field( 'teacher_location', $post_id )) ? get_field( 'teacher_location', $post_id ) : 'Teacher location';
$teacher_rating = !empty(get_field( 'teacher_rating', $post_id )) ? get_field( 'teacher_rating', $post_id ) : 'Teacher rating';
$teacher_reviews = !empty(get_field( 'teacher_reviews', $post_id )) ? get_field( 'teacher_reviews', $post_id ) : 'Teacher_reviews';
?>

<div class="teachers-list-top" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
  <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding:0;font-size:60px;line-height:1">
    <?php echo esc_html( $teacher_image ); ?>
  </div>
  <div class="teachers-details" style="margin-top:0;margin-bottom:0;padding:0">
    <div style="font-size:20px;font-style:normal;font-weight:700">
      <?php echo esc_html( $teacher_name ); ?> 
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
    </div>

    <div style="font-size:14px;font-style:normal;font-weight:500">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
      <?php echo esc_html( $teacher_location ); ?>
    </div>

    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
      <p style="margin-right:5px;float: left;font-size:16px;line-height: 20px;font-style:normal;font-weight:600">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fill-yellow text-yellow"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
        <?php echo esc_html( $teacher_rating ); ?>
      </p> 
      <p style="font-size:14px;line-height: 20px;font-style:normal;font-weight:500">
        (<?php echo esc_html( $teacher_reviews ); ?> reviews)
      </p>
    </div>
  </div>
</div>