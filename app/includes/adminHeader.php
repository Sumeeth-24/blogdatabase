<header>
        <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
            <h1 class="logo-text"><span>Heartful</span>Minds</h1>
        </a>
        <i class="fas fa-bars menu-toggle"></i>
        <ul class="nav">
           <?php if (isset($_SESSION['id'])): ?>
            <li><a href="#">
                <i class="fas fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fas fa-chevron-down" style="font-size: 0.8em;"></i>
            </a> <ul>
               
                <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
            </ul>
        </li>
           <?php endif; ?>
        </ul>
    </header>