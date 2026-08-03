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
$api_url = getenv('HOLLIHOP_URL_STUDY_REQUEST') ?: 'Missing API key';

if (!empty($_POST)) {
  $postArray = [
    "fullName" => strip_tags($_POST['fullName']),
    "email" => strip_tags($_POST['email']),
    "level" => strip_tags($_POST['level']),
    "description" => strip_tags($_POST['description']),
    "type" => 'Request from an external form'
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
    $number = substr($response, 6, 3);
    $content = "<div class='success'>Форма $number успешно отправлена!<br>Мы обязательно свяжемся с Вами!</div>";
    echo $content;
  }

  // error handling
  if ( is_wp_error( $response ) ) {
    $error_message = $response->get_error_message();
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
    <label class="form-label">Email *</label>
    <input type="email" id="email" name="email" class="form-input" placeholder="Your email" pattern="^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
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