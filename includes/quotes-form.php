<div class="quotes-form__section">
  <form class="quotes-form" role="form" aria-label="Get a Quotes Form">
  <input type="hidden" name="csrf_token" value="YOUR_GENERATED_TOKEN_HERE">
  <div class="quotes-form__close-btn">
    <span>x</span>
  </div>
  <div class="quotes-form__input-group row">
    <div class="col-12 col-md-6">
      <input type="text" id="name" name="name" placeholder="Full Name" required>
    <small class="error"></small>
    </div>
    <div class="col-12 col-md-6">
      <input type="email" id="email" name="email" placeholder="Email Address" required>
    <small class="error"></small>
    </div>
  </div>
  <div class="quotes-form__input-group row">
    <div class="col-12 col-md-6">
      <input type="tel" id="phone" name="phone" placeholder="Phone Number">
    <small class="error"></small>
    </div>
    <div class="col-12 col-md-6">
      <select id="projectType" name="projectType">
    <option selected disabled>Select Services</option>
    <option value="residential">Residential Construction</option>
    <option value="commercial">Commercial Construction</option>
    <option value="renovation">Renovation/Remodeling</option>
    <option value="renovation">Architectural Design Only</option>
    <option value="renovation">Interior Works</option>
  </select>
  <small class="error"></small>
    </div>
  </div>
  <div class="quotes-form__input-group row">
    <div class="col-12 col-md-6">
      <input type="text" id="location" name="location" placeholder="Location">
    <small class="error"></small>
    </div>
    <div class="col-12 col-md-6">
      <input type="number" id="size" name="size" placeholder="Size">
    <small class="error"></small>
    </div>
  </div>
  <div class="quotes-form__input-group row">
    <div class="col-12 col-md-6">
      <input type="number" id="budget" name="budget" placeholder="Budget">
    <small class="error"></small>
    </div>
    <div class="col-12 col-md-6">
      <input type="date" id="timeline" name="timeline" placeholder="Timeline">
    <small class="error"></small>
    </div>
  </div>
  <div class="quotes-form__input-group row">
    <div class="col-12">
      <textarea id="description" name="description" placeholder="Message"></textarea>
    <small class="error"></small>
    </div>
  </div>
  <div class="quotes-form__action-btn">
    <button type="submit">Submit</button>
  </div>
</form>
</div>