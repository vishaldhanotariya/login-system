    <div class="container">
        <div class="top_color"></div>
        <div class="register active">
            <form class="form-container" action="process.php" method="POST" enctype="multipart/form-data">
                <h2>Register</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <label for="file" class="image">Choose Photo:</label>
                <input type="file" id="file" name="file" style="display: none;"/>

                <button type="submit" name="register">Register</button>
                <p>Already have an account?<a href="#" class="show_register_btn">Login</a></p>
            </form>
        </div>

        
        <div class="login">
            <h2>Login</h2>
            <form action="process.php" method="POST">
                <label for="uname">Username</label> 
                <input type="text" name="username" placeholder="Username" id="uname" required/>
                <label for="pass">Password</label>
                <input type="password" placeholder="password" id="pass" name="password" required/>
                <input type="submit" value="Login" name="login"/>
                <p>Don't have an account?<a href="#" class="show_login_btn">Register</a></p>
            </form>
        </div>
        <div class="bottom_color"></div>
    </div>
<?php
    date_default_timezone_set("Asia/Kolkata");
    echo time();

?>