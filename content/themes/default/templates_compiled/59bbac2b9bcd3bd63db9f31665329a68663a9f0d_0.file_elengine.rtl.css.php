<?php
/* Smarty version 5.4.1, created on 2025-03-01 07:12:32
  from 'file:../css/elengine.rtl.css' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c2b360442f90_83109701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59bbac2b9bcd3bd63db9f31665329a68663a9f0d' => 
    array (
      0 => '../css/elengine.rtl.css',
      1 => 1711869404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c2b360442f90_83109701 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/css';
?>.fr_welcome {
  min-height: 100vh;
  min-height: 100dvh;
  background-color: #fff;
}

body.night-mode .fr_welcome {
  background-color: #0f1112;
}

/* Sign Form */
.fr_welcome_mid {
  margin: auto 0;
}

.fr_welcome_sign {
  max-width: 540px;
}

.fr_welcome_sign_head {
  text-align: center;
}

.fr_welcome_sign_head h5 {
  display: none;
}

.fr_welcome_sign .logo-wrapper {
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
}

.fr_welcome_sign .logo-wrapper img {
  max-width: 150px;
  max-height: 45px;
  transform: translateZ(0px);
}

.fr_welcome_sign img.logo-light {
  display: inline-block;
}

body.night-mode .fr_welcome_sign img.logo-light {
  display: none;
}

.fr_welcome_sign img.logo-dark {
  display: none;
}

body.night-mode .fr_welcome_sign img.logo-dark {
  display: inline-block;
}

.fr_auth_form {
  background-color: #fff;
  padding: 20px;
  border-radius: 30px;
}

body.night-mode .fr_auth_form {
  background-color: #0f1112;
}

.fr_welcome_title {
  font-weight: 600;
}

.fr_welcome_field {
  position: relative;
  display: block;
  margin: 0 0 20px;
}

.fr_welcome_field input,
.fr_welcome_field select {
  border-radius: 14px;
  border: 2px solid #EFEFEF;
  background-color: #EFEFEF;
  padding: 10px 55px;
  font-size: 16px;
  width: 100%;
  height: 56px;
  display: block;
  margin: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  transition: background-color .15s ease-in-out, border-color .15s ease-in-out;
  outline: none;
}

.fr_welcome_field input:focus,
.fr_welcome_field select:focus {
  border-color: #5e72e4;
  background-color: #fff;
}

body.night-mode .fr_welcome_field input,
body.night-mode .fr_welcome_field select {
  border-color: #444a4c;
  background-color: #444a4c;
  color: #fff;
}

body.night-mode .fr_welcome_field input:focus,
body.night-mode .fr_welcome_field select:focus {
  border-color: #5e72e4;
  background-color: #0f1112;
}

.fr_welcome_field svg {
  top: 0;
  margin: 16px;
  opacity: 0.5;
  pointer-events: none;
  transition: color .15s ease-in-out, opacity .15s ease-in-out;
  width: 24px;
  height: 24px;
}

.fr_welcome_field input:focus+svg,
.fr_welcome_field select:focus+svg {
  opacity: 1;
  color: #5e72e4;
}

.fr_welcome_btn {
  border-radius: 14px;
  font-size: 17px;
  font-weight: 500;
  padding: 15px 18px;
  border: 0;
}

.fr_welcome_switch {
  font-weight: 500;
}

.fr_welcome_switch a {
  text-decoration: underline;
  text-underline-offset: 6px;
}

/* Right Side */
.fr_welcome_bg {
  position: relative;
}

.fr_welcome_bg_img {
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 0 70px 70px 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 1;
}

.fr_welcome_img {
  position: relative;
  overflow: hidden;
  border-radius: 0 70px 70px 0;
  min-height: 700px;
  box-shadow: 0 0 30px 0 rgb(0 0 0 / 6%);
}

.fr_welcome_img:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: #5e72e4;
  opacity: 0.2;
  border-radius: 0 70px 70px 0;
  opacity: 0;
}

.fr_welcome_img>.svg_blur {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  opacity: 0.15;
  width: 100%;
  pointer-events: none;
  user-select: none;
}

.fr_welcome_img>.svg_lines {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  opacity: 0.2;
  width: 100%;
  pointer-events: none;
  user-select: none;
  color: #fff;
  height: auto;
}

.fr_welcome_img_innr {
  background: linear-gradient(transparent, rgb(0 0 0 / 80%));
  padding: 150px 60px 60px;
  color: #fff;
}

.fr_welcome_img_innr h2 {
  line-height: 1.5;
  font-weight: 600;
}

.mx-n2 {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

/* Footer */
.fr_welcome_bottom .container {
  max-width: none;
  width: 100%;
}

.fr_welcome_bottom .footer {
  margin: 0;
  border: 0;
  padding: 0;
}

@media (max-width: 992px) {

  .fr_welcome_img,
  .fr_welcome_bg_img {
    border-radius: 0 40px 40px 0;
  }

  .fr_welcome_img,
  .fr_welcome_bg_img {
    min-height: 560px;
  }

  .fr_welcome_img_innr {
    padding: 90px 30px 30px;
  }
}

@media (max-width: 900px) {
  .fr_welcome_mid .row .col-md-6 {
    width: 100%;
  }

  .fr_welcome_sign {
    position: relative;
    z-index: 1;
    max-width: none;
    padding: 0 !important;
  }

  .fr_welcome_sign_head {
    padding: 20px;
  }

  .fr_welcome_sign_head h5 {
    display: block;
    margin: 20px 0 16px;
    font-size: 1.5rem;
  }

  .fr_welcome_bg {
    position: static;
  }

  .fr_welcome_bg_img,
  .fr_welcome_img>.svg_blur,
  .fr_welcome_img_innr h5,
  .fr_welcome_img_innr h2,
  .fr_welcome_img_innr p {
    display: none;
  }

  .fr_welcome_img {
    min-height: auto;
    border-radius: 0;
    position: static;
    box-shadow: none;
  }

  .fr_welcome_img:before {
    opacity: 0.2;
    border-radius: 0;
    margin-top: -1.5rem;
    bottom: auto;
    height: 180px;
  }

  .fr_welcome_img>.svg_lines {
    bottom: auto;
    top: 0;
    color: #5e72e4;
    margin-top: -1.5rem;
    height: 180px;
    width: auto;
    opacity: 0.3;
  }

  .fr_welcome_img_innr {
    padding: 20px;
    background: transparent;
    color: inherit;
  }

  .fr_welcome_apps {
    text-align: center;
    scale: 0.85;
    margin: 0 !important;
  }
}<?php }
}
