<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .t-li::first-letter {
            color: pink;
            font-size: 55px;
            font-weight: 700;
        }

        th {
            color: #020202;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: 1px;
        }
        
        /*Styling links*/
navbar a{
    font-size: 16px;
    font-weight: 300;
    font-family: "Montserrat", sans-serif;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
    padding: 10px;
    -webkit-border-radius:2px;
    -moz-border-radius:2px;
    border-radius:2px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor:pointer;
    margin: 4px;
}

navbar a:hover, navbar a:active, navbar a{
    text-decoration: none;
    color: rgba(0,0,0,0.6);
}
navbar a:hover{
    background: rgba(0,0,0,0.06);
}
navbar a:active{
    color: rgba(0,0,0,0.9);
    background: rgba(0,0,0,0.1);
}
navbar a{
    color: red;
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 14px;
    float: right;
}

/*Shadow*/
navbar .paper-shadow-bottom-z-2 {
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2);
}

/*Setting Up Navbar Layouts*/
navbar .navbar-inverse{
    color: #000;
    background: #fff;
    border:none;
    min-height: 50px;
    max-height: 50px;
    height: 50px;
}
navbar .container-fluid{
    position: absolute;
    top:0; bottom: 0;
    right:0;
    left:0;
}
navbar .navbar-body{
    display: flex;
    display: -webkit-flex;
    flex-direction: row;
    align-items: center;
    -webkit-align-items: center;
    justify-content: space-between;
    height: 100%;
    position: relative;
}
navbar div.navbar-end{
    align-items: flex-start;
    -webkit-align-items: flex-start;
}
navbar div.navbar-start,
navbar div.navbar-end{
    flex: 1;
    -webkit-flex: 1;
    display: flex;
    display: -webkit-flex;
    flex-direction: row;
    align-items: center;
    -webkit-align-items: center;
    justify-content: space-around;
}
navbar div.navbar-start .logo{
    opacity: 0.6;
    width:30px;
}

/*Integrating Two Navbars Together*/
navbar .nav{
    z-index: 2;
}
navbar .tabs{
    z-index: 1;
    position: relative;
}
navbar .tabs .navbar-body{
    padding: 0;
    margin-bottom: 0;
}

/*Styling Tabs*/
navbar .tabs .navbar-body li.active a{
    color: #333;
}
navbar .tabs .navbar-body li{
    -webkit-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -moz-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -ms-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -o-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
}
navbar .tabs .navbar-body li:hover{
    background: rgba(0,0,0,0.02);
}
navbar .tabs .navbar-body li:active{
    background: rgba(0,0,0,0.05);
}
navbar .tabs .navbar-body li a:hover, .tabs .navbar-body li a:active{
    background: rgba(0,0,0,0);
    color: #5bc0de;
}

/*Styling Tab Highlighter*/
navbar .tab-highlighter{
    height:2px;
    width: 50px;
    margin-top: -2px;
    background: #000;
    position: absolute;
    -webkit-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -moz-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -ms-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -o-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
}

/*Keyframes*/
@keyframes SwiftSlide {
    100%{
        margin-right: 0;
        opacity: 1;
    }
}
@keyframes SwiftSlideToRight {
    100%{
        opacity:0;
        margin-right: -30px;
    }
}

.container {
  width: 90%;
  margin: auto;
}
* {
  box-sizing: border-box;
}
/*
    Titres et paragraphes
*/
.calliope-title-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
.calliope-title-section {
  background: white;
  background-size: 100%;
  padding-top: 1rem;
  padding-bottom: 1rem;
  background-repeat: no-repeat;
  background-position: center;
  border-bottom: 1px solid #ccc;
}
.calliope-title-section .home-title {
  position: relative;
  color: #888;
  border: 1px solid #aaa;
  padding: 1em;
  border-radius: 0.1em;
  margin: 0.3em 0;
  font-weight: 500;
}
.calliope-title-section .home-title:before {
  content: '';
  position: absolute;
  border-width: 20px;
  border-style: solid;
  border-color: transparent #aaa transparent transparent;
  top: 40px;
  left: -40px;
}
.calliope-title-section .home-title:after {
  content: '';
  position: absolute;
  border-width: 20px;
  border-style: solid;
  border-color: transparent white transparent transparent;
  top: 40px;
  left: -39px;
}
/*
  Chat
 */
.chat-container {
  position: relative;
  font-size: 16px;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin: 20px 0;
}
.chat-module {
  display: flex;
  flex-direction: column-reverse;
  width: 100%;
  position: relative;
  height: 50vh;
  overflow-y: scroll;
  margin: auto;
  font-family: 'Open Sans';
  font-size: 16px;
  color: #222;
}
.thread {
  width: 100%;
}
.thread-item {
  display: flex;
  margin: 1em 0;
  width: 100%;
  min-height: 54px;
}
.thread-item.user-item .avatar-container {
  border-right: 2px solid hsl(30, 80%, 73%);
}
.thread-item.user-item .avatar-container:after,
.thread-item.user-item .avatar-container:before {
  display: none;
}
.avatar-container {
  position: relative;
  width: 64px;
  padding: 0 6px;
  border-right: 1px solid hsl(310, 70%, 80%);
}
.avatar-container:before {
  content: '';
  position: absolute;
  border-width: 10px;
  border-style: solid;
  border-color: transparent hsl(310, 70%, 80%) transparent transparent;
  top: 10px;
  right: -1px;
}
.avatar-container:after {
  content: '';
  position: absolute;
  border-width: 10px;
  border-style: solid;
  border-color: transparent white transparent transparent;
  top: 10px;
  right: -2px;
}
.response-container {
  width: 90%;
  padding: 5px 1em;
}
.scroll-overlay {
  pointer-events: none;
  position: absolute;
  top: 0;
  z-index: 10;
  width: 100%;
  height: 50vh;
  background: linear-gradient(white 5%, hsla(0, 0%, 0%, 0) 60%, hsla(0, 0%, 0%, 0));
  opacity: 1;
  transition: opacity 3s;
}
.scroll-overlay.overlay-hidden {
  opacity: 0;
}
.form-prompt {
  display: flex;
  width: 100%;
  margin-bottom: 20px;
}
.user-prompt-indicator {
  width: 64px;
  height: 60px;
  padding-top: 0;
  padding-right: 10px;
  color: hsl(30, 80%, 73%);
  text-align: right;
  font-size: 42px;
}
.user-prompt {
  width: 90%;
  height: 60px;
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 3px;
  color: #666;
}
.user-prompt:focus {
  outline: none;
}
.user-mic-toggle:after {
  font-family: 'FontAwesome';
  content: '\f130';
}
.response {
  min-height: 1em;
  margin: 0.5em 0;
}
.char {
  animation: charReveal 0.35s;
  display: inline-block;
}
@keyframes cursor {
  0% {
    background: hsl(310, 70%, 80%);
  }
  100% {
    background: #222;
  }
}
@keyframes charReveal {
  0% {
    color: white;
    transform: scale(2, 4);
    font-weight: bold;
  }
  25% {
    color: hsl(310, 70%, 80%);
  }
  50% {
    color: hsl(30, 80%, 73%);
  }
  75% {
    color: hsl(310, 70%, 80%);
  }
  100% {
    color: #222;
    transform: scale(1, 1);
  }
}
/*
 * Bot avatar
 */
.calliope {
  position: relative;
  width: 54px;
  height: 54px;
  will-change: transform;
  transform-origin: 50% 85%;
}
.calliope .head {
  position: absolute;
  z-index: 20;
  left: 14.85px;
  background: hsl(310, 70%, 80%);
  width: 24.3px;
  height: 24.3px;
  border-radius: 24.3px;
  border: 2.16px solid white;
  transform-origin: 50% 65%;
}
.calliope .head:after {
  position: relative;
  background: hsl(310, 70%, 80%);
  display: block;
  left: -1.701px;
  top: 6.075px;
  content: '';
  width: 24.354px;
  height: 9.72px;
  border-radius: 1.944px;
}
.calliope .head .eye-left,
.calliope .head .eye-right {
  background: white;
  position: absolute;
  z-index: 1;
  top: 7.29px;
  width: 4.32px;
  height: 4.32px;
  border-radius: 4.32px;
}
.calliope .head .eye-left {
  left: 3.645px;
}
.calliope .head .eye-right {
  left: 12.636px;
}
.calliope .torso {
  position: absolute;
  left: 16.2px;
  top: 21.06px;
  z-index: 1;
  background: hsl(310, 70%, 80%);
  width: 21.6px;
  height: 21.6px;
  border-radius: 5px;
  border: 2.16px solid white;
}
.calliope .torso .arm-left,
.calliope .torso .arm-right {
  background: hsl(310, 70%, 80%);
  position: absolute;
  z-index: 1;
  top: -1.08px;
  width: 9.72px;
  height: 21.6px;
  border: 2.16px solid white;
}
.calliope .torso .arm-left {
  left: -1.08px;
  border-radius: 21.6px 2.16px;
  transform-origin: 100% 0%;
  transform: rotate(20deg);
}
.calliope .torso .arm-right {
  left: 8.64px;
  border-radius: 2.16px 21.6px;
  transform-origin: 0% 0%;
  transform: rotate(-20deg);
}
.calliope .feet {
  position: absolute;
  top: 39.96px;
  left: 18.36px;
  background: hsl(310, 70%, 80%);
  width: 17.28px;
  height: 10.8px;
  border-radius: 10.8px 10.8px 0 0;
  border: 2.16px solid white;
}
.calliope.big {
  margin-top: 35px;
  width: 200px;
  height: 200px;
  will-change: transform;
  transform-origin: 50% 85%;
}
.calliope.big .head {
  position: absolute;
  z-index: 20;
  left: 55px;
  background: hsl(310, 70%, 80%);
  width: 90px;
  height: 90px;
  border-radius: 90px;
  border: 8px solid white;
  transform-origin: 50% 65%;
}
.calliope.big .head:after {
  position: relative;
  background: hsl(310, 70%, 80%);
  display: block;
  left: -6.3px;
  top: 22.5px;
  content: '';
  width: 90.2px;
  height: 36px;
  border-radius: 7.2px;
}
.calliope.big .head .eye-left,
.calliope.big .head .eye-right {
  background: white;
  position: absolute;
  z-index: 1;
  top: 27px;
  width: 16px;
  height: 16px;
  border-radius: 16px;
}
.calliope.big .head .eye-left {
  left: 13.5px;
}
.calliope.big .head .eye-right {
  left: 46.8px;
}
.calliope.big .torso {
  position: absolute;
  left: 60px;
  top: 78px;
  z-index: 1;
  background: hsl(89, 50%, 65%);
  width: 80px;
  height: 80px;
  border-radius: 500px 500px 5px 5px;
  border: 8px solid white;
}
.calliope.big .torso .arm-left,
.calliope.big .torso .arm-right {
  background: hsl(30, 80%, 73%);
  position: absolute;
  z-index: 1;
  top: -4px;
  width: 36px;
  height: 80px;
  border: 8px solid white;
}
.calliope.big .torso .arm-left {
  left: -4px;
  border-radius: 80px 8px;
  transform-origin: 100% 0%;
  transform: rotate(20deg);
}
.calliope.big .torso .arm-right {
  left: 32px;
  border-radius: 8px 80px;
  transform-origin: 0% 0%;
  transform: rotate(-20deg);
}
.calliope.big .feet {
  position: absolute;
  top: 148px;
  left: 68px;
  background: hsl(30, 80%, 73%);
  width: 64px;
  height: 40px;
  border-radius: 40px 40px 0 0;
  border: 8px solid white;
}
.calliope.inactive {
  opacity: 0.4;
}
.calliope.idle {
  animation: idleCalliope 38s ease-in-out infinite;
}
.calliope.idle .head {
  animation: idleHead 24s infinite;
}
.calliope.idle .head .eye-left,
.calliope.idle .head .eye-right {
  animation: idleEyes 18s ease-in-out infinite;
}
.calliope.idle .torso {
  animation: idleTorso 8s ease-in-out infinite;
}
.calliope.idle .torso .arm-left {
  animation: idleLeftArm 7s ease-in-out infinite;
}
.calliope.idle .torso .arm-right {
  animation: idleRightArm 7s ease-in-out infinite;
}
.calliope.big.idle .arm-left {
  z-index: 10;
  animation: idleAndSaluteLeftArm 20s ease-in-out infinite;
}
.calliope.appearing {
  animation: fallIn 0.25s ease-out;
}
.calliope.appearing .head {
  animation: fallInHead 0.6s ease-out 0.3s, colorFlash 1s;
}
.calliope.appearing .head:after {
  animation: colorFlash 1s;
}
.calliope.appearing .torso {
  animation: fallInTorso 0.6s ease-out 0.25s, colorFlash 1s;
}
.calliope.appearing .torso .arm-left {
  animation: fallInLeftArm 0.5s ease-out 0.15s, colorFlash 1s;
}
.calliope.appearing .torso .arm-right {
  animation: fallInRightArm 0.7s ease-out 0.1s, colorFlash 1s;
}
.calliope.appearing .feet {
  animation: colorFlash 1s;
}
@keyframes colorFlash {
  0%,
  20% {
    background: hsl(310, 90%, 72%);
  }
  100% {
    background: hsl(310, 70%, 80%);
  }
}
@keyframes fallIn {
  0% {
    opacity: 0;
    top: -27px;
  }
  100% {
    opacity: 1;
    top: 0;
  }
}
@keyframes fallInHead {
  0%,
  100% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(0, 32%);
  }
}
@keyframes fallInTorso {
  0%,
  100% {
    transform: translate(0, 0) scale(1, 1);
  }
  50% {
    transform: translate(0, 15%) scale(1.1, 0.9);
  }
}
@keyframes fallInLeftArm {
  0%,
  100% {
    transform: rotate(20deg);
  }
  50% {
    transform: rotate(40deg);
  }
}
@keyframes fallInRightArm {
  0%,
  100% {
    transform: rotate(-20deg);
  }
  50% {
    transform: rotate(-40deg);
  }
}
@keyframes idleCalliope {
  0%,
  35%,
  50%,
  65%,
  100% {
    transform: translate(0%, 0);
  }
  40%,
  45% {
    transform: translate(5%, 0);
  }
  55%,
  60% {
    transform: translate(-5%, 0);
  }
}
@keyframes idleCalliopeForward {
  0%,
  40%,
  60%,
  100% {
    transform: scale(1, 1) translate(0, 0);
  }
  45%,
  55% {
    transform: scale(1.2, 1.2) translate(0, 10%);
  }
}
@keyframes idleHead {
  0%,
  45%,
  60%,
  100% {
    transform: rotate(0deg);
  }
  50%,
  55% {
    transform: rotate(25deg);
  }
}
@keyframes idleEyes {
  0%,
  25%,
  50%,
  54%,
  57%,
  70%,
  85%,
  100% {
    transform: translate(0%, 0%) scale(1, 1);
  }
  30%,
  40% {
    transform: translate(40%, 0%) scale(1, 1);
  }
  55%,
  56% {
    transform: translate(0%, 0%) scale(1.2, 0.1);
  }
  75%,
  80% {
    transform: translate(0%, 45%) scale(1, 1);
  }
}
@keyframes idleTorso {
  0%,
  100% {
    transform: scale(1, 1);
  }
  30%,
  60% {
    transform: scale(0.9, 1.1);
  }
}
@keyframes idleLeftArm {
  0%,
  25%,
  80%,
  100% {
    transform: rotate(20deg) scale(1);
  }
  50%,
  55% {
    transform: rotate(25deg) scale(1.1);
  }
}
@keyframes idleAndSaluteLeftArm {
  0%,
  5%,
  68%,
  80%,
  100% {
    transform: rotate(20deg) scale(1) translate(0, 0);
  }
  30%,
  35% {
    transform: rotate(25deg) scale(1.1) translate(0, 0);
  }
  70%,
  74%,
  78% {
    transform: rotate(120deg) scale(1) translate(100%, 30%);
  }
  72%,
  76% {
    transform: rotate(105deg) scale(1) translate(100%, 30%);
  }
}
@keyframes idleRightArm {
  0%,
  25%,
  80%,
  100% {
    transform: rotate(-20deg) scale(1);
  }
  50%,
  55% {
    transform: rotate(-25deg) scale(1.1);
  }
}
/*
 * Scrollbars
 */
.chat-module::-webkit-scrollbar {
  width: 8px;
}
.chat-module::-webkit-scrollbar-track {
  background: transparent;
}
.chat-module::-webkit-scrollbar-thumb {
  background: hsl(310, 70%, 88%);
  border-radius: 5px;
}

    </style>
</head>

<body>
   <navbar>
  <div class="navbar navbar-fixed-top navbar-inverse tabs paper-shadow-bottom-z-2">
    <div class="container-fluid">
      <ul class="navbar-body list-inline">
        <li ><a href="index.php" >Statewise</a></li>
        <li><a  href="world.php">Worldwise</a></li>
        <li><a  href="day.php">Day-Wise</a></li>
        <li class="active"><a  class="active"  href="chatbot.php">Chatbot</a></li>
      </ul>
      <div class="tab-highlighter" style="bottom:0"></div>
    </div>
  </div>
  <!--2 navbar for pushing 1 above after scrolling (Not Implemented yet.)-->
</navbar>
<div class="container-fluid" style="text-align:center;padding:10px;margin-top:20px">
    <h5>Creating a Chatbot System for my Ecommerce Website</h5>
</div>
<div class="container">
  <div class="chat-container">
    <div class="chat-module" onscroll="manageChatOverlay()">
      <div class="thread">
        <div class="thread-item">
          <div class="avatar-container">
            <div class="calliope appearing">
              <div class="head">
                <div class="eye-left"></div>
                <div class="eye-right"></div>
              </div>
              <div class="torso">
                <div class="arm-left"></div>
                <div class="arm-right"></div>
              </div>
              <div class="feet"></div>
            </div>
          </div>
          <div class="response-container">
            <div class="reponse">
              Hello !
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scroll-overlay overlay-hidden"></div>
    <form class="form-prompt" onsubmit="event.preventDefault();sendInput();return false;">
      <div class="user-prompt-indicator">
        >
      </div>
      <input autofocus="1" class="user-prompt" data-role="user-input" type="text" />
      <div class="user-mic-toggle"></div>
    </form>
  </div>
</div>
<script>
    /*Textbox Events*/
$(document).on('focusin', 'navbar input.search-textbox', function(){
    if($(this).val() <= 0){
        var parent = $(this).closest('div.search');
        parent.addClass('focused');
    }
});
$(document).on('focusout', 'navbar input.search-textbox', function(){
    if($(this).val() <= 0){
        var parent = $(this).closest('div.search');
        parent.removeClass('focused');
    }
});
$(document).on('click', 'navbar .search', function(){
    $(this).children('input.search-textbox').focus();
});

/*Text Key Events for Animating Icons i.e. .ico-btn*/
$(document).on('keyup', 'navbar input.search-textbox', function(){
    var parent = $(this).closest('div.search');
    var phrase = $(this).val(),
        phrase_length = phrase.length;

    if(phrase_length >= 2){
        parent.addClass('multi-char');
        if(!parent.hasClass('not-null')){
            parent.addClass('not-null');
        }

    }
    else if(phrase_length == 1){
        parent.addClass('not-null');
        parent.removeClass('multi-char');
    }
    else if(phrase_length <= 0){
        parent.removeClass('not-null');
        parent.removeClass('multi-char');
    }
});

/*Tab Highlighter Functionality*/
$(document).on('click', 'navbar .tabs ul.navbar-body li a', function(){
    var $this = $(this);
    TabHighlighter.set($this);
    $this.closest('li').siblings('.active').removeClass('active');
    $this.closest('li').addClass('active');
});
var TabHighlighter = {
    set: function($this){
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    },
    refresh: function(){
        var $this = $('.tabs ul.navbar-body li.active a');
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    }
};
$(window).resize(function(){
    TabHighlighter.refresh();
});
$(document).ready(function(){
	TabHighlighter.refresh();
});
</script>
<script>
    var speechOn = false;

function scrollModuleToBottom() {
  var chatModule = document.querySelector('.chat-module');
  chatModule.scrollTop = chatModule.scrollHeight;
}

function sendInput() {
    var inputElt = document.querySelector('[data-role="user-input"]');
    if(inputElt.value == '')
      return;
    toggleInput(false);
    var thread = document.querySelector('.thread');
    var newThreadItem = createThreadItem(false);
    var responseItem = newThreadItem.querySelector('.response');
    responseItem.innerText = inputElt.value;
    thread.appendChild(newThreadItem);
    inputElt.value = '';
    scrollModuleToBottom();
    setTimeout(function() {
      showResponse('Ok. Let\'s pretend this answer is relevant to your input');
    }, 200);
}


function createThreadItem(isBot) {
    var thread = document.querySelector('.thread');
    var threadItem = document.createElement('div');
    var avatarItem = document.createElement('div');
    var responseContainerItem = document.createElement('div');
    var responseItem = document.createElement('div');
    threadItem.classList.add('thread-item');
    avatarItem.classList.add('avatar-container');
    responseContainerItem.classList.add('response-container');
    responseItem.classList.add('response');
    responseContainerItem.appendChild(responseItem);
    threadItem.appendChild(avatarItem);
    threadItem.appendChild(responseContainerItem);
    thread.appendChild(threadItem);
    if (isBot) {
        avatarItem.appendChild(createBotAvatar());
    } else {
        threadItem.classList.add('user-item');
    }
    return threadItem;
}

function createBotAvatar() {
    // make previous avatar inactive
    var previousAvatar = document.querySelector('.calliope.idle:not(.big), .calliope.appearing:not(.big)');
    if (previousAvatar) {
        previousAvatar.classList.remove('idle');
        previousAvatar.classList.remove('appearing');
        previousAvatar.classList.add('inactive');
    }
    var calliopeItem = document.createElement('div');
    var headItem = document.createElement('div');
    var eyeLeftItem = document.createElement('div');
    var eyeRightItem = document.createElement('div');
    var torsoItem = document.createElement('div');
    var armLeftItem = document.createElement('div');
    var armRightItem = document.createElement('div');
    var feetItem = document.createElement('div');
    calliopeItem.classList.add('calliope');
    calliopeItem.classList.add('appearing');
    headItem.classList.add('head');
    eyeLeftItem.classList.add('eye-left');
    eyeRightItem.classList.add('eye-right');
    torsoItem.classList.add('torso');
    armLeftItem.classList.add('arm-left');
    armRightItem.classList.add('arm-right');
    feetItem.classList.add('feet');
    headItem.appendChild(eyeLeftItem);
    headItem.appendChild(eyeRightItem);
    torsoItem.appendChild(armLeftItem);
    torsoItem.appendChild(armRightItem);
    calliopeItem.appendChild(headItem);
    calliopeItem.appendChild(torsoItem);
    calliopeItem.appendChild(feetItem);
    return calliopeItem;
}

function showResponse(response) {
    var newThreadItem = createThreadItem(true);
    var responseItem = newThreadItem.querySelector('.response');
    var charsCompleted = 0;
    scrollModuleToBottom();

    setTimeout(function () {
      // should I speak ?
      if(speechOn && 'speechSynthesis' in window){
          var speech = new SpeechSynthesisUtterance(response);
          window.speechSynthesis.speak(speech);
      }
        var intervalID = setInterval(function () {
            if (charsCompleted == response.length) {
                toggleInput(true);
                manageChatOverlay();
                clearInterval(intervalID);

                setTimeout(function () {
                    responseItem.innerHTML = response;
                    var calliope = newThreadItem.querySelector('.calliope.appearing');
                    calliope.classList.remove('appearing');
                    calliope.classList.add('idle');
                }, 1000);
            }
            else {
                var char = document.createElement('span');
                char.classList.add('char');
                char.innerHTML = response.charAt(charsCompleted++);
                if (char.innerHTML == ' ') {
                    char.innerHTML = '&nbsp;';
                }
                responseItem.appendChild(char);
            }
        }, 5);
    }, 300);
}

function manageChatOverlay() {
    var overlay = document.querySelector('.scroll-overlay');
    var chatModule = document.querySelector('.chat-module');
    if (chatModule.scrollTop > 0) {
        overlay.classList.remove('overlay-hidden');
    } else {
        overlay.classList.add('overlay-hidden');
    }
}

function toggleInput(enabled) {
    var inputElement = document.querySelector('[data-role="user-input"]');
    inputElement.disabled = !enabled;
    if (enabled) {
        inputElement.focus();
    }
}


//showResponse('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum asperiores sint repellendus debitis tenetur numquam, laboriosam quod perspiciatis, officiis alias officia. Deleniti sed error, necessitatibus et reprehenderit praesentium explicabo.');
</script>
</body>
</html>
   