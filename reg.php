<?php include_once('function.inc'); ?>
<?php include_once('header.inc'); ?>
<div id="section">
    <h1>Registration</h1>
        <img src="registration.jpg" alt="reg" width="150px">
</div>
        <form autocomplete="off" action="reg.php" method="post">
            <div id="register">
                <?php if ($message != ""): ?>            
                <ul class='message'>
                    <?php echo $message; ?> 
                </ul>                
            <?php endif; ?>
            <div id="form-div">
                <div class="group">
                    <label class="js-form-required form-required">Username</label>
                    <div class="input"><input autocomplete="off" type="text" name="uname" id="uname" value=""></div>
                </div>
                <div class="group">
                    <label class="js-form-required form-required">Password</label>
                    <div class="input"><input type ="password" name="password" id="password" value=""></div>
                </div>
                <div class="group">
                    <label class="js-form-required form-required">Confirm Password</label>
                    <div class="input"><input type ="password" name="confirm_password" id="confirm_password" value=""></div>
                </div>
                <div class="group">
                    <label class="js-form-required form-required">FirstName</label>
                    <div class="input"><input type ="text" name="fname" id="fname"></div>
                </div>
                <div class="group">
                    <label class="js-form-required form-required">LastName</label>
                    <div class="input"><input type="text" name="lname" id="lname"></div>
                </div>
                <div class="group">
                    <label class="js-form-required form-required">E-mail</label>
                    <div class="input"><input type="email" name="email-id" id="email-id"></div>
                </div>
                <div class="group">               
                    <div class="input"><input type="submit" name="submit" id="submit" value="SUBMIT"></div>
                </div>

                <br>

            </div>
        </form>
    </div>
<?php include_once('footer.inc'); ?>
