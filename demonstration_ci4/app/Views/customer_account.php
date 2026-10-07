<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">My Personal Account</h1>
        <p class="lead mb-0">Welcome, <?= esc($user['first_name']) ?>!</p>
    </div>
</section>

<section class="section-padding bg-light-custom">
    <div class="container" style="max-width: 900px;">
        <div class="card account-card shadow-lg">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <div>
                        <h2 class="h3 mb-1">Account Information</h2>
                        <p class="text-muted mb-0">Your personal details are saved securely in your account.</p>
                    </div>
                    <span class="badge rounded-pill text-bg-success">Active</span>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">Full Name</small>
                            <div class="fw-semibold"><?= esc($user['first_name'] . ' ' . $user['last_name']) ?></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">Email</small>
                            <div class="fw-semibold"><?= esc($user['email']) ?></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">Phone</small>
                            <div class="fw-semibold"><?= esc($user['phone'] ?: 'Not provided') ?></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">Address</small>
                            <div class="fw-semibold"><?= esc($user['address'] ?: 'Not provided') ?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">City</small>
                            <div class="fw-semibold"><?= esc($user['city'] ?: 'Not provided') ?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">State / Province</small>
                            <div class="fw-semibold"><?= esc($user['state'] ?: 'Not provided') ?></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 bg-light">
                            <small class="text-muted">ZIP / Postal Code</small>
                            <div class="fw-semibold"><?= esc($user['zip_code'] ?: 'Not provided') ?></div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 p-3 rounded-3" style="background:#fff0f7;">
                    <i class="fas fa-heart me-2" style="color:#ec4899;"></i>
                    Need help? Use the <a href="<?= site_url('contact') ?>">Contact</a> page to reach Puihaha Electric.
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
