<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    font-size: 10px;
    font-family:'montserrat' ,sans-serif;
}
a{
    text-decoration: none;
}
.container{
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
p{
    color: black;
    font-size:1.4rem;
    font-weight:300;
    line-height:2.5rem;
    letter-spacing:.05rem;
    margin-top:5px ;
}
#header{
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100vw;
    height: auto;
}
#header .header{
    min-height: 8vh;
    background-color: rgba(31, 30,30, .24);
}
#header .nav-bar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    max-width: 1300px;
    padding: 0 10px;
}
#header .nav-list ul{
    list-style: none;
    position: absolute;
    background-color: rgb(31, 30,30);
    width: 100vw;
    height: 100vh;
    left: 100%;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 1;
    overflow-x: hidden;
    transition: .5s ease left;

}
#header .nav-list ul.active{
    left:0;
}
#header .nav-list ul a{
    font-size: 2.5rem;
    font-weight: 500;
    letter-spacing: .2rem;
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    padding: 20px;
    display: block;
}
#header .nav-list ul a::after{
    content:attr(data-after);
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%) scale(0);
    color: rgba(240,248,255,0.022);
    font-size: 13rem;
    letter-spacing: 50px;
    z-index: -1;
    transition: .3s ease letter-spacing;

}
#header .nav-list ul li:hover a::after{
    transform: translate(-50%,-50%) scale(1);
    letter-spacing: initial;
}
#header .nav-list ul li:hover a{
    color: crimson;
}
#header .hamburger{
    height: 60px;
    width: 60px;
    display: inline-block;
    border: 3px solid white;
    border-radius: 50%;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 100;
    cursor: pointer;
    transform: scale(.8);
    margin-right: 20px;
}
#header .hamburger::after{
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    border-radius: 50%;
    border: 30px solid white;
    animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar{
   height: 2px;
   width: 30px;
   position: relative;
   background-color: white;
   z-index: -1;
}
#header .hamburger .bar::after,#header .hamburger .bar::before{
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    background-color: white;
    transition: .3s ease;
    transition-property: top,bottom;
}
#header .hamburger .bar::after{
    top: 8px;
}
#header .hamburger .bar::before{
    bottom: 8px;
}
#header .hamburger.active .bar::after{
    top: 0;
}
#header .hamburger.active .bar::before{
 bottom: 0;
}
.brand h1{
    color: white;
    text-transform: uppercase;
    font-size: 3rem;
}
.brand span{
    color: crimson;
}
@keyframes hamburger_puls{
    0%{
        opacity: 1;
        transform: scale(1);
    }
    100%{
        opacity: 0;
        transform: scale(1.5);
    }
}
@media only screen and (min-width:1200px){
 
 #header .hamburger{
     display: none;
 }
 #header .nav-list ul{
     position: initial;
     display: block;
     height: auto;
     width: fit-content;
     background-color: transparent;
 }
 #header .nav-list ul li{
     display: inline-block;
 }
 #header .nav-list ul li a{
     font-size: 1.8rem;
 }
 #header .nav-list ul a::after{
     display: none;
      
 }
}

</style>
</head>
<body style="background-color:black">
  <section id="header">
    <div class="header container">
        <div class="nav-bar">
            <div class="brand">
                <a href="#"><h1><span>X</span>YZ <span>B</span>US</h1></a>
            </div>
            <div class="nav-list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="index.php" data-after="home">home</a></li>
                    <li><a href="service.php" data-after="service">service</a></li>
                    <li><a href="rec.php" data-after="project">Recognition</a></li>
                    <li><a href="about.php" data-after="about">about</a></li>
                    <li><a href="contact.php" data-after="contact">contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
     const hamburger=document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu=document.querySelector('.header .nav-bar .nav-list ul');
const header=document.querySelector('.header .container');

hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
});

</script>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>service</title>
</head>
<body><br><br><br><br><br><br><br><br><br>
<img src="web/images/temp.png" width="100%">
</body>
</html>