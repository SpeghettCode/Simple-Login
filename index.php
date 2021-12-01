<?php
        include 'includes/head.inc.php';
    ?>
    <title>Simple Login</title>
</head>
<body>
    <div class="container">
        <div class="h2-wrap"></div>
        <h2 class="header">Waves</h2>

        <form action="includes/login.inc.php" method="post" class="login-form">
            <div class="input-wrapper">
                <label for="username">USERNAME OR EMAIL:</label>
                <input type="text" name="username" placeholder="Username or email..." id="username">
            </div>
            <div class="input-wrapper">
                <label for="password">PASSWORD:</label>
                <input type="password" name="password" placeholder="Password..." id="password">
            </div>

            <button type="submit" name="submit">SIGN IN</button>
        </form>
    
        <h2 class="dont-have-acc-btn">DONT HAVE AN ACCOUNT? <a href="signup.php">SIGN UP</a></h2>
    </div>
</body>
</html>