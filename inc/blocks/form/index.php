<?php
/**
 * Request Form Block.
 *
 * @param array $block The block settings and attributes.
 */

if ( !defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once(ABSPATH . 'hollihop-data.php');
$api_url = esc_url( getenv('HOLLIHOP_URL_STUDY_REQUEST') ) ?: 'API URL not found';

if (!empty($_POST)) {
  $postArray = [
    "fullName" => sanitize_text_field( $_POST['fullName'] ),
    // "email" => sanitize_email($_POST['email']),
    "email" => sanitize_email( 'admin@example.com' ),
    "level" => esc_html( $_POST['level'] ),
    "description" => sanitize_textarea_field( $_POST['description'] ),
    "type" => esc_html( 'Request from an external form' )
  ];
  $json = json_encode($postArray);
  $options = [
    'http' => [
      'method'  => 'POST',
      'header'  => 'Content-type: application/json',
      'content' =>  $json,
    ],
  ];
  $context  = stream_context_create($options);
  $response = file_get_contents($api_url, false, $context);

  if($response) {
    $number = substr(esc_html( $response ), 16, 3);
    $content = "<div class='success'>Форма $number успешно отправлена!<br>Мы обязательно свяжемся с Вами!</div>";
    echo $content;
  }

  // error handling
  if ( is_wp_error( $response ) ) {
    $error_message = esc_html( $response->get_error_message() );
    echo "Что-то пошло не так: $error_message";
  }
}
?>

<form class="request-form" enctype="multipart/form-data" method="post" id="form" name="form" action="">
  <div>
    <label class="form-label">Name *</label>
    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Your full name" minlength="2" maxlength="30" required>
  </div>
  <div>
    <label class="form-label">Email</label>
    <!-- <input type="email" id="email" name="email" class="form-input" placeholder="Your email" pattern="^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"> -->
    <input type="email" id="email" name="email" class="form-input" placeholder="Your email" disabled>
  </div>
  <div>
    <label class="form-label">Level</label>
    <select id="level" name="level" class="form-select" value="beginner">
      <option value="Beginner">Beginner</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Advanced">Advanced</option>
    </select>
  </div>
  <div>
    <label class="form-label">Message</label>
    <textarea id="description" name="description" class="form-textarea" placeholder="Your message" rows="5"></textarea>
  </div>
  <button type="submit" class="form-button">Send</button>
</form>