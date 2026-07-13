<?php
require __DIR__ . '/includes/data.php';
$pageTitle  = 'Contact & Contribute';
$activePage = 'contact';

$subjects = [
    'general'    => 'General Inquiry',
    'contribute' => 'Contribute an Artifact',
    'correction' => 'Report a Correction',
];

$old = [
    'name'    => '',
    'email'   => '',
    'subject' => 'general',
    'message' => '',
];
$errors  = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old['name']    = trim($_POST['name'] ?? '');
    $old['email']   = trim($_POST['email'] ?? '');
    $old['subject'] = trim($_POST['subject'] ?? 'general');
    $old['message'] = trim($_POST['message'] ?? '');

    if ($old['name'] === '') {
        $errors['name'] = 'Please enter your name.';
    }

    if ($old['email'] === '') {
        $errors['email'] = 'Please enter your email address.';
    } elseif (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if (!array_key_exists($old['subject'], $subjects)) {
        $old['subject'] = 'general';
    }

    if ($old['message'] === '') {
        $errors['message'] = 'Please enter a message.';
    } elseif (strlen($old['message']) < 10) {
        $errors['message'] = 'Please enter at least 10 characters so we have enough detail to follow up.';
    }

    if (empty($errors)) {
        $success = true;
        $old = ['name' => '', 'email' => '', 'subject' => 'general', 'message' => ''];
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <div class="page-intro__inner">
        <h1 class="page-intro__title">Contact &amp; Contribute</h1>
        <p class="page-intro__lede">
            Spotted an inaccuracy, or have an artifact you think belongs in the archive? Send a
            message using the form below.
        </p>
    </div>
</section>

<section class="section section--contact">
    <div class="section__inner section__inner--narrow">

        <?php if ($success): ?>
            <div class="alert alert--success" role="status">
                <strong>Message sent.</strong> Thank you &mdash; your note has been received and a member of the
                archive team will follow up if a reply is needed.
            </div>
        <?php elseif (!empty($errors)): ?>
            <div class="alert alert--error" role="alert">
                <strong>Please fix the following before submitting:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="contact.php" method="post" class="contact-form" novalidate>
            <div class="contact-form__field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($old['name']) ?>"
                    class="<?= isset($errors['name']) ? 'has-error' : '' ?>">
                <?php if (isset($errors['name'])): ?><span class="field-error"><?= htmlspecialchars($errors['name']) ?></span><?php endif; ?>
            </div>

            <div class="contact-form__field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email']) ?>"
                    class="<?= isset($errors['email']) ? 'has-error' : '' ?>">
                <?php if (isset($errors['email'])): ?><span class="field-error"><?= htmlspecialchars($errors['email']) ?></span><?php endif; ?>
            </div>

            <div class="contact-form__field">
                <label for="subject">Subject</label>
                <select id="subject" name="subject">
                    <?php foreach ($subjects as $slug => $label): ?>
                        <option value="<?= htmlspecialchars($slug) ?>" <?= $old['subject'] === $slug ? 'selected' : '' ?>>
                            <?= htmlspecialchars($label) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="contact-form__field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6"
                    class="<?= isset($errors['message']) ? 'has-error' : '' ?>"><?= htmlspecialchars($old['message']) ?></textarea>
                <?php if (isset($errors['message'])): ?><span class="field-error"><?= htmlspecialchars($errors['message']) ?></span><?php endif; ?>
            </div>

            <button type="submit" class="btn btn--primary">Send Message</button>
        </form>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
