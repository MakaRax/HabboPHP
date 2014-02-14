
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{$config->name}: Crée ton avatar, décore ton appart, tchatte et fais-toi plein d'amis. </title>

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboStaticFilePath = "https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery";
    </script>
    <link rel="shortcut icon" href="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed">
<link rel="stylesheet" href="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery/static/styles/v3_landing.css" type="text/css" />


<script src="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery/static/js/v3_landing_top.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/index.js" type="text/javascript"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


        <meta name="description" content="Habbo Hotel - fais-toi plein d'amis, deviens célèbre! Séjourne GRATUITEMENT dans le plus grand hôtel virtuel au monde! Crée ton avatar pour jouer et faire de nouvelles rencontres...">
        <meta name="keywords" content="habbo hotel, virtuel, monde, réseau social, gratuit, communauté, avatar, chat, connecté, adolescence, jeu de rôle, rejoindre, social, groupes, forums, sécurité, jouer, jeux, amis, rares, ados, jeunes, collector, collectionner, créer, connecter, meuble, mobilier, animaux, déco, design, appart, décorer, partager, création, badges, musique, célébrité, chat vip, fun, sortir, mmo, mmorpg, jeu massivement multijoueur">


    <meta name="build" content="63-BUILD-FOR-PATCH-2324d - 30.01.2014 13:27 - fr">
    
        <meta name="google-site-verification" content="C913THeNCku_uRG5-CRaDkqI0DP1RPYeOLqf4JC6OOY">
</head>
<body  >

<div id="overlay"></div>


<div id="change-password-form" class="overlay-dialog" style="display: none;">
    <div id="change-password-form-container" class="clearfix form-container">
        <h2 id="change-password-form-title" class="bottom-border">Mot de passe oublié?</h2>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/?changePwd=true" />
                <span>Merci d'indiquer ton adresse email d'inscription à Habbo</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Indique une adresse email valide</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Annuler</a>
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
                <a href="#" id="change-password-change-link">Autre adresse email</a>
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



<header >
    <div id="border-left"></div>
    <div id="border-right"></div>

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
{literal}
<script type="text/javascript">
    window.fbAsyncInit = function() {
        Cookie.erase("fbsr_292457515639");
        FB.init({
            appId: '292457515639',
            channelUrl : '/fbchannel',
            status: true,
            cookie: true,
            xfbml: true
        });

        FB.getLoginStatus(function (oSession) {
            if (typeof comufy_storeUser != 'undefined') {
                if (oSession.status !== 'connected') {
                    FB.Event.subscribe('auth.login', function (oSession) {
                        if (oSession.status == "connected") {
                            comufy_storeUser(oSession, {});
                        }
                    });
                } else {
                    comufy_storeUser(oSession, {});
                }
            }
        });

        if (window.habboPageInitQueue) {
            // jquery might not be loaded yet
            habboPageInitQueue.push(function() {
                $(document).trigger("fbevents:scriptLoaded");
            });
        } else {
            $(document).fire("fbevents:scriptLoaded");
        }

    };
    window.assistedLogin = function(FBobject, optresponse) {
        
        Cookie.erase("fbsr_292457515639");
        FBobject.init({
            appId: '292457515639',
            channelUrl : '/fbchannel',
            status: true,
            cookie: true,
            xfbml: true
        });

        permissions = 'user_birthday,email,user_likes';
        defaultAction = function(response) {
            if (response.authResponse) {
                fbConnectUrl = "/facebook?connect=true";
                Cookie.erase("fbhb_val_292457515639");
                Cookie.set("fbhb_val_292457515639", response.authResponse.accessToken);
                Cookie.erase("fbhb_expr_292457515639");
                Cookie.set("fbhb_expr_292457515639", response.authResponse.expiresIn);
                window.location.replace(fbConnectUrl);
            }
        };

        if (typeof optresponse == 'undefined')
            FBobject.login(defaultAction, {scope:permissions});
        else
            FBobject.login(optresponse, {scope:permissions});

    };

    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>
{/literal}

<a class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;">
    <span class="fb_button_border">
        <span class="fb_button_text">Entre avec Facebook</span>
    </span>
</a>


<div id="rpx-signin">
    <a class="janrainEngage" href="#">Autres modes de connexion</a>
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
        <li id="home-anchor" class="home-anchor-day" >
            <div id="welcome">
                    <a href="#registration" class="button large" id="join-now-button"><b></b><span>Rejoins-nous aujourd'hui</span><span class="sub">(C'est gratuit)</span></a>
                    <div id="slogan">
                        <h1>Bienvenue à {$config->name},</h1>
                        <p>{$config->welcome_message|stripslashes}</p>
                        <p><a id="tell-me-more-link" href="#">Dis-m'en plus...</a></p>
                    </div>


            </div>
            <div id="carousel">
                <div id="image1" ></div>
                <div id="image2" ></div>
                <div id="image3" ></div>
                <div id="tell-me-more">{$config->desc_index|stripslashes}</div>
            </div>
            <div id="floaters"></div>
        </li>

        <li id="registration-anchor" >

<div id="registration-form" class="hide-captcha">
    <div id="registration-form-header">
        <h2>Nom utilisateur</h2>
        <p>Remplis ces informations pour commencer :</p>
    </div>
    <div id="registration-form-main">
        <form id="register-new-use" autocomplete="off">
        <input type="hidden" name="next" value="">
        <div id="registration-form-main-left">

            <label for="registration-email">Pseudo</label>
            <label for="registration-email" class="details">Il s'agit du nom avec lequel les utilisateurs vont te voir, choisis le bien, il ne sera pas modifiable à l'avenir !</label>
            <input type="text" name="pseudo" id="registration-email" value="">


            <span id="password-field-container">
                <label for="registration-password">Nouveau mot de passe</label>
                <label for="registration-password" class="details">Ton mot de passe doit comprendre au moins <b>6 caractères</b> et inclure des <b>lettres et des chiffres</b></label>
                <input type="password" name="password" id="registration-password" maxlength="32" value="">

            </span>
            <div id="captcha-container">
                <script src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
                <script>
                    habboPageInitQueue.push(function() {
                        Registration.setRecaptchaKey("6LduyucSAAAAAFzYG8kHqLT5ToKrslSC4o4M89i2");
                    });
                </script>

            </div>
        </div>
        <div id="registration-form-main-right">

              <label for="registration-email">Email</label>
            <label for="registration-email" class="details">A l'avenir, tu devras indiquer ton adresse email pour te connecter à {$config->name}. Merci d'indiquer une adresse email valide et de vérifier que son extension est correcte (exemple: @hotmail.com ou @hotmail.fr; @yahoo.com ou @yahoo.fr)</label>
            <input type="email" name="email" id="registration-email" value="">
            <p class="checkbox-container" id="registration-tos">
                <input type="checkbox" id="tos" name="registrationBean.termsOfServiceSelection" value="true">
                <label for="tos" class="details checkbox">
                    J'accepte <a href="http://help.habbo.fr/forums/22876258-Conditions-d-Utilisation-du-Service" target="_blank" onclick="window.open('http://help.habbo.fr/forums/22876258-Conditions-d-Utilisation-du-Service'); return false;">les Conditions d'Utilisation et la Politique en matière de traitement des données personnelles</a>
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
            <div id="sail"></div>
            <div id="baggage" ></div>
        </li>
    </ul>
</div>

<footer>
        <div id="age-recommendation"></div>

    <div id="footer-content" class="partner-logo-present">
        <div id="footer"><a href="https://help.habbo.fr/home">Aide - Contact</a> / <a href="https://help.habbo.fr/entries/346533-le-guide-des-parents">Guide des parents</a> / <a href=" https://help.habbo.fr/entries/22570571-les-conditions-d-utilisation" target="_new">Conditions d'utilisation</a> / <a href="https://help.habbo.fr/entries/22574122-politique-en-matiere-de-traitement-des-donnees-personnelles" target="_new">Charte de protection des données personnelles</a> / <a href="http://www.habbo.fr/safety/habbo_way" target="_new">La Habbo attitude</a> / <a href="http://www.habbo.fr/safety/safety_tips">Sécurité</a> / <a href="http://issuu.com/sulake/docs/habbo_media_pack_2013_v3.1_france?mode=window&viewMode=doublePage" target="_blank">Partenaires/publicité</a></div>
        <div id="copyright">© 2004-2013 Sulake Corporation Oy, HABBO est une marque déposée de Sulake Corporation Oy dans l'Union Européenne, les Etats-Unis, le Japon, la république populaire de Chine et autres juridictions. Tous droits réservés.</div>
    </div>
</footer>


<script src="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery/static/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2324/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->

    <script src="/customjs/landing/.secure.fr.js"></script>




<script type="text/javascript">
    (function() {
        if (typeof window.janrain !== 'object') window.janrain = {};
        if (typeof window.janrain.settings !== 'object') window.janrain.settings = {};

        janrain.settings.tokenUrl = 'http://www.habbo.fr/rpx';
        janrain.settings.language = 'fr';

        function isReady() { janrain.ready = true; }
        if (document.addEventListener) {
            document.addEventListener("DOMContentLoaded", isReady, false);
        } else {
            window.attachEvent('onload', isReady);
        }

        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.id = 'janrainAuthWidget';

        if (document.location.protocol === 'https:') {
            e.src = 'https://rpxnow.com/js/lib/login.habbo.com/engage.js';
        } else {
            e.src = 'http://widget-cdn.rpxnow.com/js/lib/login.habbo.com/engage.js';
        }

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(e, s);
    })();
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-15']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    
    

    


</body>
</html>