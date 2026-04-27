<?php
/*
*Estilizamos el login y personalizarlo con el logo de la empresa y no se vea tan generico
*/

function custom_login_styles() {
    echo '
    <style>
        html, body.login {
            height: 100vh !important;
            margin: 0 !important;
            padding: 0 !important;
            background: #f5f5f5 !important;
            overflow: hidden !important;
        }

        body.login {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        body.login #login {
            width: 100%;
            max-width: 420px;
            padding: 0 !important;
            margin: 0 auto !important;
        }

        .login h1 {
            margin-bottom: 25px !important;
        }

        .login h1 a {
            background-image: url("https://vivohouse.cl/wp-content/uploads/2026/03/logo-vivo-house.png") !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: 260px !important;
            height: 90px !important;
            margin: 0 auto !important;
        }

        .login form {
            border-radius: 14px !important;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08) !important;
            border: 1px solid #e5e5e5 !important;
            padding: 28px !important;
            background: #fff !important;
        }

        .wp-core-ui .button-primary {
            background: #0b4a6f !important;
            border-color: #0b4a6f !important;
            border-radius: 6px !important;
        }

        .language-switcher {
            display: none !important;
        }

        .privacy-policy-page-link,
        #nav,
        #backtoblog {
            text-align: center !important;
        }
    </style>';
}
add_action('login_enqueue_scripts', 'custom_login_styles');
