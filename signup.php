<?php
    include 'includes/head.inc.php';
?>
    <title>Simple Login</title>
</head>
<body>
    <div class="container">
        <div class="h2-wrap"></div>
        <h2 class="header">Waves</h2>

        <form action="includes/signup.inc.php" method="post" class="signup-form">
            <div class="input-wrapper">
                <label for="username">USERNAME: <span class="input-span name-span"></span></label>
                <input type="text" name="username" class="sign-up-input" placeholder="Username..." id="username">
            </div>
            <div class="input-wrapper">
                <label for="email">EMAIL: <span class="input-span email-span"></span></label>
                <input type="email" name="email" class="sign-up-input" placeholder="Email..." id="email">
            </div>
            <div class="input-wrapper">
                <label for="password">PASSWORD: <span class="input-span pass-span"></span></label>
                <input type="password" name="password" class="sign-up-input sign-up-pass" placeholder="Password..." id="password">
            </div>
            <div class="input-wrapper">
                <label for="confirm-password">CONFIRM PASSWORD: <span class="input-span confirm-pass-span"></span></label>
                <input type="password" name="confirm-password" class="sign-up-confirm-pass" placeholder="Confirm password..." id="confirm-password">
            </div>
            <button type="submit" class="sign-up-btn" name="submit">SIGN UP</button>
        </form>

        <h2 class="already-have-acc-btn">ALREADY HAVE AN ACCOUNT? <a href="index.php">SIGN IN</a></h2>
    </div>
</body>
</html>