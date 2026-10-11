<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="panel">
    <h1>Profile</h1>
    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
    <p><strong>Full name:</strong> <?= esc($user['full_name']) ?></p>
    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <p><strong>Member since:</strong> <?= esc(date('F j, Y', strtotime($user['created_at']))) ?></p>
</section>
<?= $this->endSection() ?>
