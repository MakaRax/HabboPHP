<?php /* Smarty version Smarty-3.1.8, created on 2013-07-02 15:30:51
         compiled from "/Applications/MAMP/htdocs/HabboPHP/themes/templates/index-v2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189951200451d2d60bceb297-26986753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1a21f242a41dccbbc6d0f95c474eb2c5121d4f' => 
    array (
      0 => '/Applications/MAMP/htdocs/HabboPHP/themes/templates/index-v2.tpl',
      1 => 1372755103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189951200451d2d60bceb297-26986753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'token' => 0,
    'error_login_pseudo' => 0,
    'error_login_password' => 0,
    'error_login_wrong' => 0,
    'error_ban' => 0,
    'expire' => 0,
    'reason' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d2d60be0c7a4_55845685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d2d60be0c7a4_55845685')) {function content_51d2d60be0c7a4_55845685($_smarty_tpl) {?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
</title>
    <meta name="viewport" content="width=device-width">

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboStaticFilePath = "https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery";
    </script>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic">

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/v3_landing.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/v3_landing_top.js" type="text/javascript"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/password.js" type="text/javascript"></script>


        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->meta_description;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->meta_keywords;?>
" />


    <meta name="build" content="63-BUILD2051 - 02.04.2013 23:19 - fr" />
    
</head>
<body>

<div id="overlay"></div>


<div id="change-password-form" class="overlay-dialog" style="display: none;">
    <div id="change-password-form-container" class="clearfix form-container">
        <h2 id="change-password-form-title" class="bottom-border">Mot de passe oublié?</h2>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/?changePwd=true" />
                <span>Merci d'indiquer ton adresse email d'inscription à Habbo</span>
                <div id="email" class="center bottom-border">
				<input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
                    <input type="text" id="change-password-email-address2" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Indique une adresse email valide</div>
                </div>
            </form>
            <div class="change-password-buttons">
              
                <a href="#" id="change-password-submit-button" class="new-button"><b>Envoyer un email</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Un message contenant un lien te permettant de changer ton mot de passe t'a été envoyé par email.<br>
<br>

Si tu ne le trouves pas, jette un œil à ta boîte spam!</span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
              
                <a href="#" id="change-password-success-button" class="new-button"><b>Fermer</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom" class="form-container-bottom"></div>
</div>

<script type="text/javascript">
    function initChangePasswordForm() {
        ChangePassword.init();
    }
    if (window.HabboView) {
        HabboView.add(initChangePasswordForm);
    } else if (window.habboPageInitQueue) {
        habboPageInitQueue.push(initChangePasswordForm);
    }
</script>



<header>
    <div id="border-left"></div>
    <div id="border-right"></div>
	<?php if (isset($_smarty_tpl->tpl_vars['error_login_pseudo']->value)){?>
	<div id="login-errors">
        <?php echo $_smarty_tpl->getConfigVariable('error_login_pseudo');?>

    </div>
	
	<?php }elseif(isset($_smarty_tpl->tpl_vars['error_login_password']->value)){?>
		<div id="login-errors"><?php echo $_smarty_tpl->getConfigVariable('error_login_password');?>
</div>
	 <?php }elseif(isset($_smarty_tpl->tpl_vars['error_login_wrong']->value)){?>
		<div id="login-errors"><?php echo $_smarty_tpl->getConfigVariable('error_login_wrong');?>
</div>
	<?php }elseif(isset($_smarty_tpl->tpl_vars['error_ban']->value)){?>
		<div id="login-errors">Vous êtes banni jusqu'au <?php echo $_smarty_tpl->tpl_vars['expire']->value;?>
 pour la raison : <?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</div>
	<?php }?>
	
<div id="login-form-container">
    <a href="#home" id="habbo-logo"></a>

    <form action="" method="post">

		
    
    <div id="login-columns">
        <div id="login-column-1">
            <label for="credentials-email">Email</label>
            <input tabindex="2" type="text" name="username" id="credentials-email" value="">
            <input tabindex="5" type="checkbox" name="_login_remember_me" id="credentials-remember-me">
            <label for="credentials-remember-me" class="sub-label">Garder ma session active</label>
        </div>

        <div id="login-column-2">
            <label for="credentials-password">Mot de passe</label>
            <input tabindex="3" type="password" name="password" id="credentials-password">
            <a href="#" id="forgot-password" class="sub-label">Mot de passe oublié?</a>
        </div>

        <div id="login-column-3">
            <input type="submit" value="Login" style="margin: -10000px; position: absolute;">
            <a href="#" tabindex="4" class="button" id="credentials-submit"><b></b><span>Entrer</span></a>
        </div>

        <div id="login-column-4">
<div id="fb-root"></div>
<script type="text/javascript">

    window.fbAsyncInit = function() {
        Cookie.erase("fbsr_<?php echo $_smarty_tpl->tpl_vars['config']->value->fb_appid;?>
");
        FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['config']->value->fb_appid;?>
', status: true, cookie: true, xfbml: true, oauth: true});
        $(document).fire("fbevents:scriptLoaded");

    };
    window.assistedLogin = function(FBobject, optresponse) {
        
        Cookie.erase("fbsr_<?php echo $_smarty_tpl->tpl_vars['config']->value->fb_appid;?>
");
        FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['config']->value->fb_appid;?>
', status: true, cookie: true, xfbml: true, oauth: true});

        permissions = 'email';
        defaultAction = function(response) {

            if (response.authResponse) {
                fbConnectUrl = "register.php?page=4";
	            window.location.replace(fbConnectUrl);
            }
        };

        if (typeof optresponse == 'undefined')
            FB.login(defaultAction, {scope:permissions});
        else
            FB.login(optresponse, {scope:permissions});

    };

    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
     
  	if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }
</script>
<a class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;">
    <span class="fb_button_text">Entre avec Facebook</span>
</a>


<div id="rpx-signin">
   
   
</div>        </div>
    </div>
</form>
</div>

<script>
    habboPageInitQueue.push(function() {
        if (!LandingPage.focusForced) {
            LandingPage.fieldFocus('credentials-email');
        }
    });
</script>
    <div id="alerts">
<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        JavaScript support manquant
    </div>
    <div id="alert-javascript-text">
        Javascript est désactivé sur ton navigateur. Merci de l'activer ou passer à un navigateur qui contient Javascript pour utiliser Habbo :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        Cookies requis
    </div>
    <div id="alert-cookies-text">
        Ton navigateur internet refuse les cookies. Pour jouer à Habbo tu dois modifier ce paramètre et les autoriser.
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        if (window.habboPageInitQueue) {
            // jquery might not be loaded yet
            habboPageInitQueue.push(function() {
                $('#alert-cookies-container').show();
            });
        } else {
            $('alert-cookies-container').show();
        }
    }
</script>
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>


<div id="content">
    <ul>
        <li id="home-anchor">
            <div id="welcome">
                <a href="#registration" class="button large" id="join-now-button"><b></b><span>Rejoins-nous aujourd'hui</span><span class="sub">(C'est gratuit)</span></a>
                <div id="slogan">
                    <h1>Bienvenue à <?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
,</h1>
                    <p><?php echo stripslashes($_smarty_tpl->tpl_vars['config']->value->welcome_message);?>
.</p>
                    <p><a id="tell-me-more-link" href="#">Dis-m'en plus...</a></p>
                </div>
            </div>
            <div id="carousel">
                <div id="image1"></div>
                <div id="image2"></div>
                <div id="image3"></div>
                <div id="tell-me-more"><?php echo stripslashes($_smarty_tpl->tpl_vars['config']->value->desc_index);?>
</div>
            </div>
            <div id="floaters"></div>
        </li>

        <li id="registration-anchor">

<div id="registration-form" class="hide-captcha">
    <div id="registration-form-header">
        <h2>Nom utilisateur</h2>
        <p>Remplis ces informations pour commencer :</p>
    </div>
    <div id="registration-form-main">
        <form id="register-new-user" autocomplete="off">
        <input type="hidden" name="next" value="">
        <div id="registration-form-main-left">
            
            <label for="registration-email">Login</label>
            <input type="email" name="registrationBean.email" id="registration-email" value="">
			 <label for="registration-email">Email</label>
            <input type="email" name="registrationBean.email" id="registration-email" value="">
			<label for="registration-email">Mission</label>
            <input type="email" name="registrationBean.email" id="registration-email" value="">
            

        </div>
        <div id="registration-form-main-right">

            <span id="password-field-container">
                <label for="registration-password">Nouveau mot de passe</label>
                <label for="registration-password" class="details">Ton mot de passe doit comprendre au moins <b>6 caractères</b> et inclure des <b>lettres et des chiffres</b></label>
                <input type="password" name="registrationBean.password" id="registration-password" maxlength="32" value="">
            </span>

            <div id="captcha-container">

                <label for="recaptcha_response_field">Captcha</label>
                <label for="recaptcha_response_field" class="details">Ecrire en deux mots (séparés d'un espace):</label>

                    <script src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
                    
                    <div id="captcha-image-container">
                        <div id="recaptcha_image"></div>
                        <div id="captcha-overlay"></div>
                    </div>
                    <p id="captcha-new" class="details"><a class="recaptcha-reload" href="#">Essaye un nouveau code</a></p>
                    <input type="text" name="recaptcha_response_field" id="recaptcha_response_field">

            </div>
            <p class="checkbox-container" id="registration-tos">
                <input type="checkbox" id="tos" name="registrationBean.termsOfServiceSelection" value="true">
                <label for="tos" class="details checkbox">
                    J'accepte les <a href="http://help.habbo.fr/entries/22570571-les-conditions-d-utilisation" target="_blank" onclick="window.open('http://help.habbo.fr/entries/22570571-les-conditions-d-utilisation'); return false;">Conditions d'utilisation</a> et les <a href="https://help.habbo.fr/entries/22574122-politique-en-matiere-de-traitement-des-donnees-personnelles">Politique en matière de traitement des données personnelles</a>
                </label>
            </p>
            <p class="checkbox-container">

                <input type="checkbox" id="registration-marketing" value="true" name="registrationBean.marketing">
                <label for="registration-marketing" class="details checkbox">Je souhaite être informé des nouveautés sur Habbo et recevoir la newsletter.</label>
            </p>
            <div class="submit-button-wrapper">
                <a href="#" class="button large not-so-large register-submit"><b></b><span>Valider</span></a>
            </div>
        </div>

        <div id="parent-email-container" style="display: none;">
            <label for="parent-email">Email des parents</label>
            <label for="parent-email" class="details">Comme tu as moins de 13 ans, nous devons contacter tes parent(s) pour les informer que tu joues à Habbo.</label>
            <input type="email" id="parent-email" name="registrationBean.parentEmail" value="">
            <div class="submit-button-wrapper">
                <a href="#" class="button large not-so-large register-submit"><b></b><span>Valider</span></a>
            </div>
        </div>
        </form>
    </div>
</div>
<div id="magnifying-glass"></div>
            <div id="sail"></div>
        </li>
    </ul>
</div>

<footer>
        <div id="partner-logo"></div>
    <div id="age-recommendation"></div>

    <div id="footer-content" class="partner-logo-present">
        <div id="footer"><a href="http://habbophp.com">HabboPHP</a></div>
        <div id="copyright">© 2004-2013 Sulake Corporation Oy, HABBO est une marque déposée de Sulake Corporation Oy dans l'Union Européenne, les Etats-Unis, le Japon, la république populaire de Chine et autres juridictions. Tous droits réservés.</div>
    </div>
    <div id="sulake-logo"><a href="http://www.sulake.com"></a></div>
</footer>


<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->



<script type="text/javascript">
    var rpxJsHost = (("https:" == document.location.protocol) ? "https://" : "http://static.");
    document.write(unescape("%3Cscript src='" + rpxJsHost +
            "rpxnow.com/js/lib/rpx.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    RPXNOW.overlay = false;
    RPXNOW.language_preference = 'fr'; 
    RPXNOW.flags = 'show_provider_list';
</script>


    

    


</body>
</html><?php }} ?>