<title>Maintaince__</title>
<link href="./assets/images/fav_icon_media.png" rel="icon">

<a href="https://media.inti.asia">
    <img src="./assets/images/logo_inti2024_light.png" alt="Logo INTIMEDIA" style="width:250px !important;padding-top:25px">
</a>
<section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		    
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
		    
			<h3 class="h2">
		Under Construction 
		</h3>
		
		</div>
		
		<div class="contant_box_404">
		
		<section class="error-container">
  <span><span>4</span></span>
  <span>0</span>
  <span><span>4</span></span>
</section>
		<p>We are currently performing some maintaince</p>
    <p>We will be back shortly.</p>
		
		<a href="" class="link_404">Reload</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>

<style>
*{
    text-align:center;
}
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
@import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');
.error-container {
  text-align: center;
  font-size: 180px;
  font-family: 'Catamaran', sans-serif;
  font-weight: 800;
}
.error-container > span {
  display: inline-block;
  line-height: 0.7;
  position: relative;
  color: #2c3e50;
}
.error-container > span > span {
  display: inline-block;
  position: relative;
}
.error-container > span:nth-of-type(1) {
  perspective: 1000px;
  perspective-origin: 500% 50%;
  color: #2980b9;
}
.error-container > span:nth-of-type(1) > span {
  transform-origin: 50% 100% 0px;
  transform: rotateX(0);
  animation: easyoutelastic 8s infinite;
}

.error-container > span:nth-of-type(3) {
  perspective: none;
  perspective-origin: 50% 50%;
  color: #D15C95;
}
.error-container > span:nth-of-type(3) > span {
  transform-origin: 100% 100% 0px;
  transform: rotate(0deg);
  animation: rotatedrop 8s infinite;
}
@keyframes easyoutelastic {
  0% {
    transform: rotateX(0);
  }
  9% {
    transform: rotateX(210deg);
  }
  13% {
    transform: rotateX(150deg);
  }
  16% {
    transform: rotateX(200deg);
  }
  18% {
    transform: rotateX(170deg);
  }
  20% {
    transform: rotateX(180deg);
  }
  60% {
    transform: rotateX(180deg);
  }
  80% {
    transform: rotateX(0);
  }
  100% {
    transform: rotateX(0);
  }
}

@keyframes rotatedrop {
  0% {
    transform: rotate(0);
  }
  10% {
    transform: rotate(30deg);
  }
  15% {
    transform: rotate(90deg);
  }
  70% {
    transform: rotate(90deg);
  }
  80% {
    transform: rotate(0);
  }
  100% {
    transform: rotateX(0);
  }
}
    
/*======================
    404 page
=======================*/


.page_404{
    padding:0px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
    background-repeat:no-repeat;
 }
.four_zero_four_bg h1{
    font-size:80px;
}
 
.four_zero_four_bg h3{
    font-size:80px;
    margin-top:20px;
}
			 
.link_404{			 
    color: #fff!important;
    padding: 10px 20px;
    background: #2980b9;
    margin: 20px 0;
    display: inline-block;
    text-decoration:none;
 }
.contant_box_404{
    margin-top:-50px;
}
</style>