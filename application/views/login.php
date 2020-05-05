<?php $this->load->view('main/header'); ?>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Login/aksi_login'); ?>" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example" required="" value="" name="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="******" required="" value="" name="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <!-- <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p> -->
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <!-- <a class="btn btn-default btn-block" href="#">Register</a> -->
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
			</div>
		</div>   
    </div>
    <?php $this->load->view('main/footer'); ?>