<?php
    session_start();
?>

<!DOCTYPE html>
<meta charset='utf-8'>
		<link href="css/style1.css" type="text/css" rel="stylesheet" />
     <title>webdestroer</title>
 <head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script></head>
 <script type="text/javascript">
    $(document).ready(function(){
        "use strict";
        //проверка email
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');
         
        mail.blur(function(){
            if(mail.val() != ''){
 
                
                if(mail.val().search(pattern) == 0){
                    
                    $('#valid_email_message').text('');
 
                    
                    $('input[type=submit]').attr('disabled', false);
                }else{
                    
                    $('#valid_email_message').text('Не правильный Email');
 
                    
                    $('input[type=submit]').attr('disabled', true);
                }
            }else{
                $('#valid_email_message').text('Введите Ваш email');
            }
        });
 
        
        var password = $('input[name=password]');
         
        password.blur(function(){
            if(password.val() != ''){
 
                
                if(password.val().length < 6){
                    
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');
 
                    
                    $('input[type=submit]').attr('disabled', true);
                     
                }else{
                    
                    $('#valid_password_message').text('');
 
                    
                    $('input[type=submit]').attr('disabled', false);
                }
            }else{
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
</script>
<body>
<div id="auth_block">
<?php
    
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        
?>
	<div id="wrapper">
		 <header class='site-header'>
		  <ul>
			  <li> <a href="/form_auth.php">Войти</a></li>
			  <li> <a href="/form_register.php">Зарегистрироваться</a></li>
			  <li> <a href="/index.php">Главная</a></li>
			  </ul>
		<?php
    }else{
        
?> 
        <div id="link_logout">
            <a href="/logout.php">Выход</a>
        </div>
        

<?php if ($user->guest) { ?> 
	
<?php } else { ?> 


<?php } ?> 
<center>
<div class="link">
	<nav>
			 <a href="webdestroer.rar" ><img src="images/btn44.png" ></a>
			 </nav>
			 </div>
</center><br><br>


<?php
    }
?>
</div>
		 </header>