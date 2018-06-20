<?php
    require_once("header.php");
?>
 
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
 
    <center><div id="form_auth">
        <h4>Форма авторизации</h4>
        <form action="auth.php" method="post" name="form_auth">
            <table class="form">
          
                <tbody><tr>
                    <td> Email: </td>
                    <td>
                        <input type="email" name="email" required="required"><br><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>
          
                <tr>
                    <td> Пароль: </td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                 
                <tr>
                        <td> Введите капчу: </td>
                        <td>
                            <p>
                                <img src="captcha.php" alt="Капча" /> <br><br>
                                <input type="text" name="captcha" placeholder="Проверочный код" required="required">
                            </p>
                        </td>
                    </tr>
 
                <tr>
                    <td colspan="2">
                        <center><input type="submit" name="btn_submit_auth" value="Войти"></center>
                    </td>
                </tr>
            </tbody></table>
        </form>
    </div>
    </center><br><br>
 
<?php
    }else{
?>
 
    <center><div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div></center>
 
<?php
    }
?>
 
<?php
    require_once("footer.php");
?>