<h2>Decio Casagrande</h2>

<?php if (isLoggedIn()): ?>
    <p> Olá, <?php echo $_SESSION['user_name']; ?> . </p>
<?php else: ?>
    <p>Olá visitante, clique para fazer seu <a href="pages/form-login.php">Login</a></p>
<?php endif; ?>