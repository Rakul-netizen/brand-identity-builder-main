<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </noscript>
    <link rel="stylesheet" href="../form.css">
</head>

<body>
    <div class="consulation-form__section">
        <form class="consulation-form" role="form" aria-label="enquiry form">
            <input type="hidden" name="csrf_token" value="YOUR_GENERATED_TOKEN_HERE">
            <div class="consulation-form__close-btn">
                <span>x</span>
            </div>
            <div class="consulation-form__input-group row">
                <div class="col-12 col-md-6">
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                    <small class="error"></small>
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                    <small class="error"></small>
                </div>
            </div>
            <div class="consulation-form__input-group row">
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
            <div class="consulation-form__input-group row">
                <div class="col-12">
                    <textarea id="description" name="description" placeholder="Message"></textarea>
                    <small class="error"></small>
                </div>
            </div>
            <div class="consulation-form__action-btn">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
</body>

</html>