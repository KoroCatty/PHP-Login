<?php $currentPage = 'sign-up'; ?>

<?php include 'layout/header.php'; ?>


<div class="container">
    <div class="content">
        <h2 class="heading">Sign Up</h2>

        <?php
        // 送信ボタンがクリックされた場合
        if (isset($_POST['sign-up'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_confirm_password = $_POST['user_confirm_password'];

            // フォームの入力値を表示
            echo $first_name . '<br>';
            echo $last_name . '<br>';
            echo $user_name . '<br>';
            echo $user_email . '<br>';
            echo $user_password . '<br>';
            echo $user_confirm_password . '<br>';

            // matching passwords
            if ($user_password == $user_confirm_password) {
                echo 'Passwords match 😊';
            } else {
                echo 'Passwords do not match';
            }
        }
        ?>

        <div class='notification'>Sign up successful. Check your email for activation link</div>
        <form action="sign_up.php" method="POST">

            <div class="input-box">
                <input type="text" class="input-control" placeholder="First name" name="first_name" autocomplete="off" required>
                <span class='error'>Error messages</span>
            </div>

            <div class="input-box">
                <input type="text" class="input-control" placeholder="Last name" name="last_name" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="text" class="input-control" placeholder="Username" name="user_name" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="email" class="input-control" placeholder="Email address" name="user_email" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="password" class="input-control" placeholder="Enter password" name="user_password" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="password" class="input-control" placeholder="Confirm password" name="user_confirm_password" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="submit" class="input-submit" value="SIGN UP" name="sign-up">
            </div>

            <!--  -->
            <div class="sign-up-cta"><span>Already have an account?</span> <a href="login.php">Login here</a></div>
        </form>

    </div>
</div>

<?php include 'layout/footer.php'; ?>