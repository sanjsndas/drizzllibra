<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drizzliibra : Request accepted!</title>
    <meta property="og:title" content="Drizzliibra : Request accepted!" />
    <meta property="og:image" content="icon.svg" />
    
    <meta property="og:description" content="Drizzliibra : Request accepted!" />
    <meta name="description" content="Drizzliibra : Request accepted!" />
    <meta name="twitter:title" content="Drizzliibra : Request accepted!">
    <meta name="twitter:image:src" content="icon.svg"/>
    <link rel="stylesheet" href="components/styles/slick.css" />
    <link rel="stylesheet" href="components/styles/slick-theme.css" />
    <link rel="stylesheet" href="components/styles/bootstrap.css" />
    <link rel="stylesheet" href="components/styles/icons.css" />

    

    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />

    <script src="components/code/jquery.min.js"></script>
    <script src="components/code/bootstrap.min.js"></script>
    <script src="components/code/lightbox.js"></script>
    <script defer type="text/javascript" src="components/code/slick.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet" />
    


    <style>
       body{
           direction: ltr;
           font-family: 'Sora', sans-serif;
           font-size: 16px;
           margin: 0;
           padding: 0px;
       }



*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
img, video{
    max-width: 100%;
}
ul, nav{

    list-style: none;
}
a
{  text-decoration: none;
    cursor: pointer;
    opacity: 0.9;
 }

h1{
    color: #ED6363;
    text-align: center;
    padding-bottom: 16px;
}
h3 {
    color: #ED6363;
    text-align: center;
    font-size: 30px;
    font-weight:700;
}
.features h3 {
    color: #fff;
}
.contact h3 {
    color: #fff;
}
.paddingStyle {
padding-top: 61px;
padding-bottom: 61px;
}

div p ul {
	padding: 0 16px;
}
.navig a {
    font-size: 16px;
}
ul.grid{
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}

.stats--wrapper__item{
      margin: 16px 0px;
      display: flex;
      gap: 5px;
      flex-direction: column;
  }
  .stats--wrapper__item > div:first-child{
      font-weight: 400;
      font-size: 16px;
  }
  .progress{
      height: 16px;
  }
  .progress-inform{
      display: flex;
      gap: 16px;
      justify-content: space-between;
      align-items: center;
  }
  .progress-inform > div:last-child{
      font-size: 32px;
      font-weight: 400;
  }


ul {
    margin: 0;
    padding: 0;
}
.hr-stil {
    width: 80%; 
    color:#ED6363; 
    margin: 0 10% 0 10%;
}
header {
    background: #ED6363;
    opacity: 1;
    padding: 20px;
}
.boxs {
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.linki  a {
    color: #c0b9b9;
}
.boxs p {
    color: inherit;
}
.boxs a {
    color: inherit;
}
.logtip-box {
    display: flex;
    justify-content: center;
}
.logtip-box img {
    height: 40px;
}
.logtip-box p {
    font-size: 19px;
    padding: 5px;
}
.navig {
    display: flex;
}
.navig a {
    padding: 5px;
}
.navig a:hover{
	opacity: 1;
    color: #c0b9b9;
    border-bottom: solid 2px #c0b9b9;
}

.slid img {
    height: 100vh;
    object-fit: cover;
    background-position: center;
}
.slid-p {
    background-color: background: rgba(255,255,255,0.5); color: #222;;
    border: 2px solid background: rgba(255,255,255,0.5); color: #222;;
    border-radius: 20px;
    opacity: 0.8;
}

.slid p {
    color: white;
    opacity: 1;
    padding: 5px;
    font-size: 30px;
}
.main {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}
.main-content {
    padding: 0px 44px;
}
.main-content  p{
    color: #333;
}
.main-content  li {
    color: #333;
}
.stats--boxing{
    padding-top: 44px;
}
.titlePadding{
    padding-bottom: 44px;
    margin-bottom: 0px;
}

.content-img1 {
    height: 246px;
    border-radius: 10px;
    float: left;
    margin: 0px 12px 12px 12px;
}

.forma {
    background: #ED6363;
    opacity: 0.8;
    border-radius:  16px;
    padding: 44px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-height: 100%;
    height: 100%;
    margin-top:  26px;
}
.forma a {
    color: #000000;
}
.forma-icon {
    font-size: 200px;
    text-align: center;
    color: white;
    padding-bottom:  26px;
}
.form-text {
     text-align: center;
     font-size: 25px;
}
.mb-3 {
    color: inherit;
}
.coment {
    height: 105px;
}
.btn {
    background: #041C32;
    margin: 0 auto;
    display: block;
    width: 100%;
    border: solid 2px #041C32;
    color: #c0b9b9;
}
.btn:hover {
    background: #c0b9b9;
    border: solid 2px #c0b9b9;
    color: #041C32;
}
.icon i {
    font-size: 32px;
    color: #c0b9b9;
}
.icon {
    flex-direction: column;
    display: flex;
    align-items: center;
}
.icon a {
    word-break: break-all;
}
.icon .company-id {
    text-align: center;
    line-height: 1.5;
    margin-top: 8px;
    opacity: 0.85;
}
.our-work{
	background-color: #fff;
}
.our-work p{
	text-align: center;
    font-size: 25px;
    padding: 12px;
}
.reviewsp {
    text-align: center;
    padding-bottom: 23px;
}

.features{
	background: #ED6363;
    opacity: 1;
}
.features p {
    text-align: center;
    font-size: 25px;
}

.reviews {
	text-align: center;
	font-size: 22px;
    font-weight: 400;
    line-height: 1.6;
}

.contact{
	background: #ED6363;
    opacity: 1;
    padding: 12px;
}

.contact p{
    font-size: 25px;
}
.cont i {
    padding: 5px;
}
.cont {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 40%;
    gap: 12px;
}
.karta {
    width: 60%;
}

.conter {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    'job1 job2'
    'job3 job4';
    gap: 16px;
}
.job1 {
    grid-area: job1;
}
.job2 {
    grid-area: job2;
}
.job3 {
    grid-area: job3;
}
.job4 {
    grid-area: job4;
}
.conter img {
    height: 200px;
}
.linev {
    width: 40;
    padding: 2px;
    margin-top: 5px;
    background: #8BCCF4;
}
.vidgyk {
    display: flex;
    margin: 12px;
    box-shadow: 3px 0px 7px 0px rgb(0 0 0 / 19%);
    border-top: solid #ED6363;
    border-bottom: solid #ED6363;
    border-width: 2px;
    flex-direction: row;
    gap:12px;
    align-items: center;
}
.slider__wrapper{
    direction: ltr;
}
.name {
    font-size: 32px;
    color: black;
    text-align: start;
    font-weight: 400;
}
.textvidgyk {
    font-size: 19px;
    text-align: start;
    color: rgb(128,128,128);
}

.vidgyk img {
    height: 200px;
    width: 180px;
}

.cont {
    display: flex;
}
.mb-_form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.slider--box{
    position: relative;
}
.contentHead{
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translate(-10%, -50%);
    width: 50%;
    font-size: 25px;
    padding: 44px;
}
.input-group__panel--control{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.textarea-group__panel--control{
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    padding: 0.375rem 0.75rem;
}
.hr {
    height: 3px;
}
    .slider__items {
      counter-reset: slide;
      direction: ltr;
    }

    .slider__item {
      overflow: hidden;
      position: relative;
      counter-increment: slide;
      height: 320px;
    }

    .slider__item::after {
      content: counter(slide);
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-style: italic;
      font-size: 32px;
      font-weight: bold;
    }

    .slider img {
      display: inline-block;
      height: auto;
      max-width: 100%;
      border-radius: 0%;

    }

    .slider__item {
        background-color: white;

    }
    .slider__item_inner {
      position: absolute;
      left: 8%;
      right: 8%;
      top: 36px;
      bottom: 36px;
      overflow: hidden;
      color: #fff;
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 16px;
      align-items: center;
      direction: ltr;
    }

    .slider__item_img {
      flex: 0 0 100px;
      max-width: 100px;
    }

    .slider__item_testimonial {
      flex: 1 0 0;
      display: flex;
      flex-direction: column;
      text-align: center;

    }

   .slider__item_name {
        font-size: 18px;
        margin-bottom: 8px;
        color:  #000000;
        text-align: start;
        padding-top: 10px;
        font-weight: bold;
    }

    .slider__item_text {
      font-size: 16px;
      color: rgba(113, 113, 113);
      text-align: start;
    }


    #section-4 .container{
        gap: 44px;
    }
    .slick-dots li button:before {
    font-family: none;
    font-size: 50px;
    line-height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '-';
    text-align: center;
    opacity: .25;
    color:  white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before {
    opacity: .75;
    color: white;
}
.price--box{
    margin-top: 16px;
    font-size: 25px;
    font-weight: 400;
}
.contentHead a{
    display: flex;
    margin-top: 20px;
    padding: 23px;
    justify-content: center;
    text-align: center;
    align-items: center;
}
.linki {
    display: flex;
    justify-content: center;
    align-items: center;
}

.contentHead {
    background-color: #ED6363cc
}
.slid-p {
    background-color: #8d9aba80
}
.content-block {
        word-break: break-all;
        padding: 103px 0;
    }

    .content-block li {
      list-style: disc;
      margin: 0 16px;
      padding:  5px 0;
    }
    .content-block p {
      padding:  5px 0;
    }

     
       @media (max-width: 575px){ 
           button{
               width: 100%;
           }
           .contentHead {
            height: 100%;
            padding:  5px;
            font-size: 16px !important;
           }
           .boxs {
            gap:  5px;
           }
       }
       @media (max-width: 991px) {
        .boxs {
            flex-direction: column !important;
            gap: 30px;
        }

        .navig {
            flex-wrap: wrap;
            gap:  5px;
            justify-content: center;
        }

        .main {
            flex-direction: column !important;
        }

        .cont,
        .karta {
            width: 100%;
        }

        .content-img1 {
            float: none;
            margin: 0 auto 20px auto;
            display: flex;
        }

        .name {
            font-size: 22px;
        }

        .conter {
            flex-direction: column !important;
            display: flex;
        }

        .contentHead {
            font-size: 26px;
        }
    }

    @media(max-width: 767px) {
        .slider__item {
            height: 700px;
        }

        .name {
            font-size: 20px;
        }

        .contentHead {
            width: 100%;
        }

        .textvidgyk {
            font-size: 16px;
        }

        .vidgyk {
            flex-direction: column;
        }

        .cont {
            text-align: center;
            flex-direction: column;
        }

        .icon {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
    }
    .but,
    button {
    outline: none;
    border: none;
    background: inherit;
    padding: 10px;
    box-sizing: border-box !important;
    }

    .button-1 {
    text-decoration: none;
    padding: 12px 16px;
    font-size: 1em;
    position: relative;
    margin: 32px;
    border: none;
    background-color: #26caf8;
    font-weight: 600;
    overflow: hidden;
    color: #fff;
    border-radius: 30px;
    box-shadow: 0 0 0 0 rgba(143, 64, 248, 0.5), 0 0 0 0 rgba(39, 200, 255, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .button-1::after {
    content: "";
    width: 400px;
    height: 400px;
    position: absolute;
    top: -50px;
    left: -100px;
    background-color: #603cff;
    background-image: linear-gradient(225deg, #27d86c 0%, #26caf8 50%, #c625d0 100%);
    z-index: -1;
    transition: transform 0.5s ease;
    }

    .button-1:hover,
    .button-1:focus {
    transform: translate(0, -6px);
    box-shadow: 10px -10px 25px 0 rgba(143, 64, 248, 0.5), -10px 10px 25px 0 rgba(39, 200, 255, 0.5);
    }

    .button-1:hover::after {
    transform: rotate(150deg);
    }

    .button-2 {
    border: 1.5px solid black;
    padding: 12px;
    width: 100%;
    margin: 12px;
    color: #f5f0f0;
    background-color: #101014;
    box-shadow: 3px 3px 6px #101014;
    transition: transform 0.3s ease-in-out;
    }

    .button-2:hover {
    background-color: #f5f0f0;
    color: #101014;
    transform: scale(1.2);
    }


    .button-3 {
    width: fit-content;
    height: 45px;
    background: #ffffff0d;
    border-radius: 8px;
    border: 2px solid #334b79;
    font-size: 15px;
    font-weight: bold;
    color: #334b79;
    -webkit-transition: 0.5s all ease;
    transition: 0.5s all ease;
    position: relative;
    overflow: hidden;
    padding: 12px 16px;
    z-index: 1;
    }

    .button-3:before {
    width: 50%;
    height: 100%;
    content: "";
    margin: auto;
    position: absolute;
    top: 0%;
    left: -50%;
    background: #334b79;
    transition: all 0.5s ease;
    z-index: -1;
    }

    .button-3:after {
    width: 50%;
    height: 100%;
    content: "";
    margin: auto;
    position: absolute;
    top: 0%;
    left: 100%;
    background: #334b79;
    transition: all 0.5s ease;
    z-index: -1;
    }

    .button-3:hover {
    color: white;
    cursor: pointer;
    }

    .button-3:hover:before {
    top: 0;
    left: 0;
    }

    .button-3:hover:after {
    top: 0;
    left: 50%;
    }

    .button-4 {
    background-image: linear-gradient(45deg, #FF512F 0%, #F09819 51%, #FF512F 100%)
    }

    .button-4 {
    margin: 12px;
    padding: 12px 16px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
    border-radius: 10px;
    display: block;
    border: 0px;
    font-weight: 700;
    box-shadow: 0px 0px 14px -7px #f09819;
    }

    .button-4:hover {
    background-position: center;
    color: #fff;
    text-decoration: none;
    }

    .button-4:active {
    transform: scale(0.95);
    }

    .button-5 {
    font-size: 17px;
    color: white;
    background-color: transparent;
    height: 45px;
    width: 100%;
    border: 2.5px solid;
    transition: 0.3s all;
    background-image: linear-gradient(45deg, purple, red, orange, red, purple);
    background-size: 500% 200%;
    background-position: 25% 50%;
    font-family: inherit;
    font-weight: 500;
    }

    .button-5:hover {
    box-shadow: none;
    background-color: rgb(92, 92, 92);
    animation: rainbow 1s 1;
    transform: scale(1.13);
    border-radius: 30px;
    background-position: 70% 50%;
    }

    .button-5:active {
    transform: scale(1.2);
    }
    </style>
    
    
  </head>

  <body>

    

    <header class="header">
        <div class="boxs flex-row-reverse">
            <div class="logtip-box">
                <img src="icon.png" alt="logo" />
                <p>Drizzliibra</p>
            </div>
            <nav>
                <ul class="navig">
                    <li><a href="./#section-1">Home</a></li>
                    <li><a href="./#section-3">Reviews</a></li>
                    <li><a href="./#section-4">About us</a></li>
                      
                </ul>
            </nav>
        </div>
    </header>
    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-discountdv__modal{
		margin: 0px;
		padding: 0px;
		font-family: 'Signika Negative', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 341px 0px;
	}
	.bodyClass1-discountdv__modal{
		background: #faf3e0;
		color: #000000;
	}
	.bodyClass2-discountdv__modal{
		background: #f3f4ed;
		color: #fff;
	}
	.bodyClass3-discountdv__modal{
		background: #fff;
		color: #111;
	}
	.wrapage-block-discountdv__modal{
		background-size: 100%;
		width: 100%;
	}
	.box_main-discountdv__modal{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-discountdv__modal h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-discountdv__modal p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-discountdv__modal{
		text-align: start;
	}
	.mainBlock-discountdv__modal ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-discountdv__modal ul>li span{
		font-weight: bold;
	}
	.mainBlock-discountdv__modal{
		max-width: 891px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-discountdv__modal .cBlock-discountdv__modal{
		text-align: start;
	}

	.bodyClass3-discountdv__modal .mainBlock-discountdv__modal{
		background: none;
		border-top: 2px dashed #f3f4ed;
		border-bottom: 2px dashed #f3f4ed;
	}
	.bodyClass2-discountdv__modal .mainBlock-discountdv__modal{
		background: #0A043C;
		color: #fff !important;
		box-shadow: 0px 0px 10px #0A043C;
	}
	.bodyClass2-discountdv__modal .mainBlock-discountdv__modal p{
		color: #fff !important;
	}
	.bodyClass1-discountdv__modal .mainBlock-discountdv__modal{
		background: #8BCCF4;
		color: #000000;
		border-left: 0px solid #2F3032;
	}
	.bodyClass1-discountdv__modal .mainBlock-discountdv__modal p{
		color: #000000 !important;
	}
	.order-discountdv__modal{
		font-size: 20px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-discountdv__modal p{
			padding: 0px 15px;
		  }
		  .box_main-discountdv__modal h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-discountdv__modal{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-discountdv__modal{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-discountdv__modal" id="mainWrapp-discountdv__modal">


	<div class="wrapage-block-discountdv__modal">
		<div class="box_main-discountdv__modal">
			<div class="mainBlock-discountdv__modal">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-discountdv__modal">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



    <div id="section-5" class="contact paddingStyle">
        <div  class="container paddingStyle">
         
        </div>
        <div class="linki container">
            <a href="privacyPolicy.html" target="_blank">Privacy policy</a>
        </div>
        <div class="linki container">
            <a href="terms-of-service.html" target="_blank">Terms & Conditions</a>
        </div>
        <div class="linki container">
           <a href="legal-disclaimer.html" target="_blank">Disclaimer</a>
        </div>
    </div>


    
    

<script>

const sliderItemInner = document.querySelector('.slider__item_inner');
const sliderItems = document.querySelectorAll('.slider__item');
const main = document.querySelector('.main');
const cont = document.querySelector('.cont');
const karta = document.querySelector('.karta');
const icon = document.querySelector('.icon');
const vidgyk = document.querySelector('.vidgyk');
const nameText = document.querySelectorAll('.name, .textvidgyk');
const linev = document.querySelector('.linev');
const vidgykImg = document.querySelector('.vidgyk img');

if (sliderItemInner) {
    const sliderHeight = sliderItemInner.clientHeight;
    sliderItems.forEach(item => item.style.height = (sliderHeight + 100) + 'px');
}

if (main && (main.classList.contains('flex-column') || main.classList.contains('flex-column-reverse'))) {
    if (cont) cont.style.width = '100%';
    if (karta) karta.style.width = '100%';
    if (icon) {
        icon.style.flexDirection = 'column';
        icon.style.alignItems = 'center';
    }
}

if (vidgyk) {
    const vidgykStyle = window.getComputedStyle(vidgyk);
    if (vidgykStyle.flexDirection === 'row-reverse') {
        vidgyk.style.justifyContent = 'space-between';
    }
    if (vidgykStyle.flexDirection === 'column') {
        nameText.forEach(el => el.style.textAlign = 'center');
        if (linev) linev.style.margin = '10px auto';
        if (vidgykImg) {
            vidgykImg.style.objectFit = 'cover';
        }
    }
}





        const headBoxRow = document.querySelector('.headBox .row');
        const logtipBox = document.querySelector('.logtip--box');
        const headBoxH3 = document.querySelector('.headBox h3');

        if (headBoxRow && headBoxRow.classList.contains('flex-column')) {
            if (logtipBox) logtipBox.style.justifyContent = 'center';
            if (headBoxH3) headBoxH3.style.textAlign = 'center';
        }




        let sections = $('section'),
        nav = $('nav'),
        nav_height = nav.outerHeight();
        $(window).on('scroll', function () {
            $('nav a').removeClass('active');
            let cur_pos = $(this).scrollTop();
            sections.each(function() {
                let top = $(this).offset().top - nav_height - 180,
                bottom = top + $(this).outerHeight();
                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');
                    $(this).addClass('active');
                    nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
                }
            });
        });
        nav.find('a').on('click', function () {
            let $el = $(this),
            id = $el.attr('href');
            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 600);
            return false;
        });

        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header');
            const contentHead = document.querySelectorAll('.contentHead');
            const forma = document.querySelector('.forma');
            const formText = document.querySelectorAll('.form-text');
            const contact = document.querySelector('.contact');
            const footerLinks = document.querySelectorAll('.foote, a.foote');

            function changeTextColorBasedOnBgColor(element, textElements) {
                const bgColor = window.getComputedStyle(element).backgroundColor;
                if (tinycolor(bgColor).isLight()) {
                    element.style.color = '#222';
                    textElements.forEach(el => el.style.color = '#222');
                } else {
                    element.style.color = '#fff';
                    textElements.forEach(el => el.style.color = '#fff');
                }
            }

            if (header) changeTextColorBasedOnBgColor(header, [...contentHead]);
            if (forma) changeTextColorBasedOnBgColor(forma, [...formText]);
            if (contact) changeTextColorBasedOnBgColor(contact, [...footerLinks]);
        });



</script>

    

</body>
</html>
