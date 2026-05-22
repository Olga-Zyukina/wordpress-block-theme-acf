  <?php
  $post = $args['post'] ?? '';
  $course_level = $args['level'] ?? 'Level';
  $course_category = $args['category'] ?? 'Category';
	$course_description = esc_html( !empty(get_field( 'course_description', $post )) ? get_field( 'course_description', $post ) : 'Course description' );
	$сourse_lessons = esc_html( !empty(get_field( 'сourse_lessons', $post )) ? get_field( 'сourse_lessons', $post ) : 'Course lessons' );
	$course_duration = esc_html( !empty(get_field( 'course_duration', $post )) ? get_field( 'course_duration', $post ) : 'Course duration' );
	$course_size = esc_html( !empty(get_field( 'course_size', $post )) ? get_field( 'course_size', $post ) : 'Course size' );
	$course_price = esc_html( !empty(get_field( 'course_price', $post )) ? get_field( 'course_price', $post ) : 'Course price' );

	?>
<li class="wp-block-post course">
  <div class="wp-block-group overflow-hidden has-border-color has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="border-color:#e5e7eb;border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <div class="wp-block-cover has-custom-content-position is-position-top-center position-relative" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);min-height:160px;aspect-ratio:unset;">
      <span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient" style="background:linear-gradient(135deg,#1447e6 0%,#9810fa 100%); opacity: 0.8;">    
      </span>
      <div class="wp-block-cover__inner-container has-global-padding is-layout-constrained course-taxonomies wp-block-cover-is-layout-constrained">
        <div class="wp-block-group is-content-justification-right is-nowrap is-layout-flex wp-container-core-group-is-layout-level wp-block-group-is-layout-flex">
          <div style="color:#101828;font-size:12px;font-style:normal;font-weight:500;line-height:16px;border-radius:100px;padding-top:5px;padding-bottom:5px;padding-left:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10)" class="taxonomy-level has-text-align-right has-link-color wp-block-post-terms has-text-color has-heading-color has-background has-background-1-background-color">
              <?php echo esc_html( $course_level ); ?>
          </div>
        </div>
        <div class="wp-block-group is-vertical is-content-justification-left is-layout-flex wp-container-core-group-is-layout-title wp-block-group-is-layout-flex">
          <div style="font-size:14px;padding-top:0;padding-bottom:0" class="taxonomy-course-category wp-block-post-terms">
            <?php echo esc_html( $course_category ); ?>
          </div>
          <h2 style="font-size:clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.67), 20px);font-style:normal;font-weight:700;line-height:1.4;" class="wp-block-post-title">
            <?php echo esc_html(get_the_title($post)); ?>
          </h2>
        </div>
      </div>
    </div>

    <div class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-wrapper wp-block-group-is-layout-constrained">
      <div class="wp-block-group is-vertical is-content-justification-stretch is-layout-flex wp-container-core-group-is-layout-info wp-block-group-is-layout-flex" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <div class="wp-block-group has-text-color has-link-color is-nowrap is-layout-flex wp-block-group-is-layout-flex" style="color:#4a5565;font-size:16px;line-height: 24px;letter-spacing: 0px;font-weight: 400;margin-bottom: 20px;">
          <?php echo $course_description; ?>
        </div>

        <div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-is-layout-details wp-block-group-is-layout-flex" style="border-bottom:1px solid #e5e7eb;margin:0;padding:0 0 20px;font-size:14px;line-height:1">
          <div class="wp-block-group has-text-color has-link-color is-nowrap is-layout-flex wp-container-core-group-is-layout-879c0eda wp-block-group-is-layout-flex" style="color:#4a5565;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px">
            <div class="wp-block-group is-nowrap is-layout-flex wp-block-group-is-layout-flex details-item">
              <div class="wp-block-outermost-icon-block items-justified-left">
                <div class="icon-container" style="width:14px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 7v14">
                    </path>
                    <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                    </path>
                  </svg>
                </div>
              </div>
              <p style="margin:0;padding:0;font-size:14px;line-height:20px;letter-spacing: 0px;font-weight: 400;">
                <?php echo $сourse_lessons; ?> lessons
              </p>
            </div>
          </div>

          <div class="wp-block-group has-text-color has-link-color is-nowrap is-layout-flex wp-container-core-group-is-layout-6c531013 wp-block-group-is-layout-flex" style="color:#4a5565;font-size:14px">
            <div class="wp-block-group is-nowrap is-layout-flex wp-block-group-is-layout-flex details-item">
              <div class="wp-block-outermost-icon-block items-justified-left">
                <div class="icon-container" style="width:14px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10">
                    </circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
              </div>
              <p style="margin:0;padding:0;font-size:14px;line-height:20px;letter-spacing: 0px;font-weight: 400;">
               <?php echo $course_duration; ?> months
              </p>
            </div>
          </div>

          <div class="wp-block-group has-text-color has-link-color is-nowrap is-layout-flex wp-container-core-group-is-layout-6c531013 wp-block-group-is-layout-flex" style="color:#4a5565;font-size:14px">
            <div class="wp-block-group is-nowrap is-layout-flex wp-block-group-is-layout-flex details-item">
              <div class="wp-block-outermost-icon-block items-justified-left">
                <div class="icon-container" style="width:14px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                    </path>
                    <circle cx="12" cy="8" r="6"></circle>
                  </svg>
                </div>
              </div>
              <p style="margin:0;padding:0;font-size:14px;line-height:20px;letter-spacing: 0px;font-weight: 400;">
                <?php echo $course_size; ?> students enrolled
              </p>
            </div>
          </div>
        </div>

        <div class="wp-block-group is-content-justification-space-between is-nowrap is-layout-flex wp-container-core-group-is-layout-button wp-block-group-is-layout-flex">
          <div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-is-layout-price wp-block-group-is-layout-flex" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <div class="wp-block-group has-text-color has-link-color is-nowrap is-layout-flex wp-block-group-is-layout-flex" style="color:#101828;margin-top:0;margin-bottom:0;padding:0;font-size:24px;font-style:normal;font-weight:700;line-height:1.3">
              $ <?php echo $course_price; ?>
            </div>
            <div style="font-size:12px;line-height:1.3">one-time payment</div>
          </div>
          <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
            <div class="wp-block-button">
              <a class="wp-block-button__link has-background-1-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--10);padding-right:25px;padding-bottom:var(--wp--preset--spacing--10);padding-left:25px;font-size:14px;font-style:normal;font-weight:600">
                Enroll
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>