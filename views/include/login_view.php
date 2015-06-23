<?php $this->load->view('include/header_view'); ?>
<div id="container">
    <div class="row">
        <div class="small-10 large-4 small-centered columns text-center welcome-header">
            <h3>wecome to login page</h3>                   
        </div>
        <?php echo form_open('index.php/login/login_page'); ?>
        <div class="row">
            <div class="small-10 large-4 small-centered columns box">
                <div class="row">
                    <div class="small-12 text-left columns uname-header">
                        <h5>Email</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 text-left columns">
                        <input type="text" value="" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 text-left columns uname-header">
                        <h5>Username</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 text-left columns">
                        <input type="text" value="" placeholder="username" name="uname">
                    </div>
                </div>
                 <div class="row">
                    <div class="small-12 text-left columns">
                        <h5>Password</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 text-left columns">
                        <input type="password" value="" placeholder="password" name="password">
                    </div>
                </div>
                 <div class="row">
                    <div class="small-6 text-left columns">
                       <input class="button tiny radius" type="submit" name="mysubmit" value="submit" />
                    </div>
                    <div class="small-6 text-right columns">
                       <a href="#" class="button tiny radius">Create account</a>
                    </div>
                </div>     
            </div>
        </div> 
        <?php echo form_close(); ?>       
    </div>
</div>
<?php $this->load->view('include/footer_view'); ?>