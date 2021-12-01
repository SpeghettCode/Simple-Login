<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header('location: index.php?error=pleasesignin');
}

include 'includes/head.inc.php';
?>
</head>
<body>
    <div class="profile-page">
        <nav>
            <ul>
                <li class="nav-list">
                    <h2 class="logo">WAVES</h2>
                </li>
                <li class="nav-list">
                    <a href="#" class="nav-link">HOME</a>
                </li>
                <li class="nav-list">
                    <a href="#" class="nav-link">PRODUCTS</a>
                </li>
                <li class="nav-list">
                    <a href="#" class="nav-link">ABOUT</a>
                </li>
                <li class="nav-list">
                    <a href="#" class="nav-link">CONTACT</a>
                </li>
            </ul>
            <ul>
                <li class="nav-list">
                    <h2 class="username"><?php echo strtoupper($_SESSION['username']); ?></h2>
                </li>
                <li class="nav-list">
                    <a href="includes/logout.inc.php" class="logout-btn">Log out</a>
                </li>
            </ul>
        </nav>

        <h2>HELLO <?php echo strtoupper($_SESSION['username']); ?></h2>
    </div>
</body>
</html>