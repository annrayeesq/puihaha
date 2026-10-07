<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Welcome Back</h1>
        <p class="lead mb-0">Log in to your personal Puihaha Electric account.</p>
    </div>
</section>

<section class="section-padding bg-light-custom">
    <div class="container">
        <div class="card account-card shadow-lg mx-auto" style="max-width: 520px;">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="feature-icon" style="background:linear-gradient(135deg,#ec4899,#a855f7);">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2 class="h3">Personal Account Login</h2>
                    <p class="text-muted">Use the email and password you registered with.</p>
                </div>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger" role="alert"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>

                <form method="post" action="<?= site_url('account/login') ?>">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email Address</label>
                        <input class="form-control form-control-lg" type="email" id="email" name="email" autocomplete="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input class="form-control form-control-lg" type="password" id="password" name="password" autocomplete="current-password" required>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Log In</button>
                </form>

                <p class="text-center mt-4 mb-0">Don't have an account?
                    <a href="<?= site_url('register') ?>">Create one</a>
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
