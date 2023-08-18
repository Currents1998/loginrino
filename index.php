<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <title>Login</title>
</head>

<body>
    <video autoplay muted loop class="video-background">
        <source src="eva.mp4" type="video/mp4">
    </video>
    <div class="login-container">
        <div class="logo-container">
            <img src="nerv.png" alt="Logo" class="logo">
        </div>
        <div class="tabs">
            <div class="tab active-tab" onclick="showContent('sign-in')">Sign In</div>
            <div class="tab" onclick="showContent('register')">Register</div>
        </div>
        <div class="tab-content active-content" id="sign-in">
            <h2 class="login-title">Login</h2>
            <form>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Login</button>
            </form>
            <div class="forgot-password">
                <button class="forgot-password-button">Forgot your password?</button>
            </div>
        </div>
        <div class="tab-content" id="register">
            <h2 class="register-title">Register</h2>
            <form>
                <label for="register-email">E-mail:</label>
                <input type="email" id="register-email" name="register-email" required><br><br>
                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="register-password" required><br><br>
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required><br><br>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <script>
        function showContent(contentId) {
            const tabs = document.querySelectorAll('.tab');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => tab.classList.remove('active-tab'));
            contents.forEach(content => content.classList.remove('active-content'));

            document.getElementById(contentId).classList.add('active-content');
            document.querySelector(`[onclick="showContent('${contentId}')"]`).classList.add('active-tab');
        }
    </script>
</body>

</html>