<?php echo $this->include('template/headerUser'); ?>
<div class="container mt-5" style="margin-top: 80px;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" style="font-weight: bold;">REGISTER</h4>
                    <hr>
                    <?php if (session()->getFlashdata('success')) { ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger">
                        <?php foreach (session()->getFlashdata('error') as $field => $error) { ?>
                        <p><?php echo $error; ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>

                    <?php echo form_open('register'); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            </div>
            <div class="text-center mt-2">
                Sudah punya akun? <a href="<?php echo base_url('login'); ?>">Silakan login.</a>
            </div>
        </div>
    </div>
</div>
<?php echo $this->include('template/footer'); ?>