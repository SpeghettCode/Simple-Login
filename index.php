<?php
        require_once 'includes/head.inc.php';
    ?>
    <title>Simple Login</title>
</head>
<body>
    <div class="container">

        <div class="h2-wrap">
        </div>
        <h2 class="header">Waves</h2>

        <form action="#" method="post" class="login-form">
            <div class="input-wrapper">
                <label for="username">USERNAME:</label>
                <input type="text" name="login-username" placeholder="Username..." id="username">
            </div>
            <div class="input-wrapper">
                <label for="password">PASSWORD:</label>
                <input type="password" name="login-password" placeholder="Password..." id="password">
            </div>
            <div class="input-wrapper">
                <label for="keep-signed-in">KEEP ME SIGNED IN?</label>
                <input type="checkbox" name="keep-signed-in" id="keep-signed-in">
            </div>
            <button type="submit">LOGIN</button>
        </form>

        <h2>DONT HAVE AN ACCOUNT? <a href="#">SIGN UP</a></h2>
    </div>
</body>
</html>