<?php 
    include("header.php"); 
?> 

<div class="login">
    <h3>Login</h3>
    <form action="processa.php" method="POST">
        <span>Usuário:</span>
        <input type="text" name="usuario" required>
        
        <span>Senha:</span>
        <input type="password" name="senha" required>
        
        <input type="submit" value="Entrar"/>
    </form>
</div>

<?php 
    if(isset($_GET['msg'])) { 
        echo "<div style='margin: 0 auto; text-align: center;'>
                <span style='color: red;'>" . htmlspecialchars($_GET['msg']) . "</span>
              </div>";
    } 
?>

<?php 
    include("footer.php"); 
?> 

</body> 
</html>
