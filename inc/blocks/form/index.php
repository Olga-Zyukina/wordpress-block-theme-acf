<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */
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

        <div class="success">
        </div>