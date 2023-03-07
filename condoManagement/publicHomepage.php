<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="caro.css">
    <title>wew</title>
</head>
<body>

    <style>

*{
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    box-sizing: border-box;
    transition: 0.5s;
}

html{
    scroll-behavior: smooth;
}

body{
    height: 100vh;
    width: 100%;
    position: relative;
}

header{
    position: fixed;
    top: 0;
    left: 0;
    height: 80px;
    width: 100%;
    padding: 0 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 12;
    background-color: #f2f2f2;
}

.header-logo{
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
}

.menu-container{
    display: flex;
    justify-content: center;
    align-items: center;
    list-style-type: none;
}

.menu-item{
    font-weight: bold;
    color: black;
    font-size: 18px;
    margin-left: 5rem;
    cursor: pointer;
    text-decoration: none;
}

.menu-item:hover{
    color: #f79ae7;
    text-decoration: underline;
    transition: 0.6s;
    
}

.section{
    height: 100vh;
    position: relative;
}

.button-cont{
    font-size: 18px;
    width: 200px;
    height: 50px;
    border-radius: 10px;
    margin-top: 20px;
    border: none;
    background-color: #f79ae7;
    cursor: pointer;
    font-weight: bold;
}

.button-cont:hover{
    background-color: #fcc1f2;
}

.image-bg{
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 50%;
    background: linear-gradient(45deg, #121212b7, #121212b7), url(./pictures/apartment.png);
    background-position: center;
    background-size: cover;
}

.content{
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
    z-index: 2;
}

.title{
    font-size: 80px;
    font-weight: bold;
}

.desc{
    font-size: 20px;
}

.button{
    font-size: 18px;
    text-decoration: none;
    padding: 10px 20px;
    background-color: #f79ae7;
    border-radius: 25px;
    color: #f2f2f2;
    margin-left: 5rem;
    font-weight: bold; 
    cursor: pointer;
}

.button:hover{
    background-color: #f7e2f3
}

.link{
    text-decoration: none;
    color: black;
}

.section-2{
    height: 100vh;
    position: relative;
}

.content-2{
    position: absolute;
    top: 20%;
    left: 45%;
    transform: translateY(-50%);
    display: flex;
}

.title-pool{
    position: absolute;
    font-size: 40px;
    top: 40%;
    right: 50%;
}

.desc-pool{
    position: absolute;
    font-size: 20px;
    top: 50%;
    right: 5%;
}

.image-pool{
    position: absolute;
    top: 30%;
    left: 5%;
    height: 50%;
    width: 35%;
    border-radius: 15px 50px 30px;
    background:url(./pictures/pool.jpg);
    background-position: center;
    background-size: cover;
}

.title-gym{
    position: absolute;
    font-size: 40px;
    top: 40%;
    left: 40%;
}

.desc-gym{
    position: absolute;
    font-size: 20px;
    text-align: end;
    top: 50%;
    left: 5%;
}

.image-gym{
    position: absolute;
    top: 30%;
    right: 5%;
    height: 50%;
    width: 35%;
    border-radius: 15px 50px 30px;
    background:url(./pictures/gym.jpg);
    background-position: center;
    background-size: cover;
}

.title-sec{
    position: absolute;
    font-size: 40px;
    top: 40%;
    right: 45%;
}

.desc-sec{
    position: absolute;
    font-size: 20px;
    top: 50%;
    right: 5%;
}

.image-sec{
    position: absolute;
    top: 30%;
    left: 5%;
    height: 50%;
    width: 35%;
    border-radius: 15px 50px 30px;
    background:url(./pictures/sec.jpg);
    background-position: center;
    background-size: cover;
}

.section-3{
    height: 100vh;
    position: relative;
}

.content-3{
    position: absolute;
    top: 20%;
    left: 45%;
    transform: translateY(-50%);
    display: flex;
}


.section-4{
    height: 100vh;
    position: relative;
}

.content-4{
    position: absolute;
    top: 20%;
    left: 45%;
    transform: translateY(-50%);
    display: flex;
}


.section-5{
    height: 100vh;
    position: relative;
}

.title-3{
    position: absolute;
    font-size: 40px;
    top: 20%;
    left: 45%;
}

.section-6{
    height: 100vh;
    position: relative;
}

.title-4{
    position: absolute;
    font-size: 40px;
    top: 20%;
    left: 45%;
}

.title-gallery{
    position: absolute;
    font-size: 20px;
    text-align: end;
    top: 65%;
    right: 31.5%;
}

.desc-gallery{
    position: absolute;
    font-size: 20px;
    text-align: end;
    top: 70%;
    right: 30%;
}

.gmap{
    position: absolute;
    top: 30%;
    left: 5%;
    height: 50%;
    width: 35%;
}

.desc-gmap{
    position: absolute;
    font-size: 20px;
    top: 50%;
    right: 30%;
}

footer {
    background: #1A1E25;
    color: #868c96;
}

footer p {
    padding: 50px 0;
    text-align: center;
}


    </style>

    <header>
        <h1><a href = "#home"  class="header-logo">LOGO</a></h1>
        <ul class="menu-container">
            <li><a href = "#service" class="menu-item">Service</a></li>
            <li><a href = "#gallery" class="menu-item">Gallery</a></li>
            <li><a href = "#contact" class="menu-item">Contact</a></li>
            <li><a href = "./publicEnquiry.php" class="menu-item">Enquiry</a></li>
            <li class="button"><a class="link" href="./residentLogin.php">Log In</a></li>
        </ul>
    </header>

    <div class="section" id="home">
        <div class="content">
            <h1 class="title">Welcome!</h1>
            <p class="desc">A condominium is a type of housing where individuals 
                <br>own individual units within a larger building or complex,
                <br>while common areas are owned and managed collectively by the 
                <br>residents through an homeowners association.
                <br>Condominiums often include amenities such as a pool, gym, and security. 
                <br>They offer a blend of private living space and shared community features.
            </p>
            <div><a href="#contact"><button class="button-cont">Join Our Community</button></a></div>
        </div>
        </div>
        <div class="image-bg"></div>

        <div class="section-2" id="service">
            <div class="content-2">
            <h1 class="title-2">SERVICE</h1>           
        </div>

            <div><h2 class="title-pool">Pool</h2></div>
            <div><p class="desc-pool">A condominium pool is a shared swimming pool located within a
                    <br>condominium complex. It is typically maintained by the
                    <br>homeowner's association and is available for use by residents of the condominium.
                    <br>The size, features, and amenities of the pool can vary depending on the specific condominium and location.                
            </p></div>
                <div class="image-pool"></div>
                </div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->

            <div class="section-3">
            <div class="content-3">         
            </div>


            <div><h2 class="title-gym">Gym</h2></div>
            <div><p class="desc-gym">A condominium gym is a shared fitness center located within a condominium complex.
                <br>It is typically equipped with various types of exercise equipment and is maintained by the
                <br>homeowner's association for the use of residents. The size, types of equipment,
                <br>and amenities of the gym can vary depending on the specific condominium and location.
            </p></div>
            <div class="image-gym"></div>
            </div>
            
<!---------------------------------------------------------------------------------------------------------------------------------------------->

            <div class="section-4">
            <div class="content-4">         
            </div>

            <div><h2 class="title-sec">Security</h2></div>
            <div><p class="desc-sec">Condominium security refers to measures taken to ensure the safety and protection of residents, guests, 
                <br>and property within a condominium complex. This may include security personnel, surveillance systems,
                <br>access control systems, fire safety systems, and emergency response plans. The goal of
                <br>condominium security is to provide a secure and peaceful environment for residents to live and thrive in.
            </p></div>
            <div class="image-sec"></div>
            </div>

<!---------------------------------------------------------------------------------------------------------------------------------------------->


<div class="section-5" id="gallery">
    <div class="content-5">         
    </div>

    <div><h1 class="title-3">Gallery</h1></div>

    <div><h1 class="title-gallery">Condominium Plan We Provide</h1></div>
    <div><p class="desc-gallery">
        Plan A : 2 Bedroom and 2 Bathroom
        <br> Plan B : 2 Bedroom and 1 Bathroom
        <br> Plan C : 1 Bedroom and 1 Bathroom
    </p></div>
    
    <div id="imgages-carousel">
        <div class="img-carousel-container">
               <div class="img-carousel">
                   <div>
                   <img src="./pictures/condo-floorplan1.jpeg">
                       <p>1/3</p>
                   </div>
                   <div>
                   <img src="./pictures/condo-floorplan2.jpeg"> 
                       <p>2/3</p>
                   </div>
                   <div>
                   <img src="./pictures/condo-floorplan3.jpeg"> 
                       <p>3/3</p>
                   </div>
               </div>
               <button id="prev"><i class="fas fa-chevron-left fa-2x"></i></button> 
               <button id="next"><i class="fas fa-chevron-right fa-2x"></i></button> 
           </div>        
        </div> 
        </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="section-6" id="contact">
        <div class="content-6">         
        </div>

        <div><h1 class="title-4">Contact Us</h1></div>

        <p class="desc-gmap">E-mail : ilhamhakimikamarzaman@gmail.com
            <br>Number Phone : (+60)18 - 372 1968
            <br>Working Hour : 10 . 00 a.m. - 5 . 00 p.m.
        </p>

        <p>
            <iframe class= "gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13361.7217679273!2d100.2102430686651!3d5.345973698466821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304aebccbf6b6627%3A0x1e8332b602fb15ba!2sKolej%20Vokasional%20Balik%20Pulau!5e0!3m2!1sen!2smy!4v1676335275950!5m2!1sen!2smy" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>

        </div>

        <footer>
            <p>Copyright &copy; 2023 All Rights Reserved.</p>
        </footer>


    <!---------------------------------------------------------------------------------------------------------------------------------------------->
   <script>
const carousel = document.querySelector('.img-carousel');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
let carsouselImages = document.querySelectorAll('.img-carousel div');

//Next Carousel
const nextCarousel = () => {
    if(carsouselImages[carsouselImages.length - 1]) {
      carousel.scrollTo(0, 0); 
    } 
      carousel.scrollBy(300, 0);
};

nextBtn.addEventListener('click', e => {
  nextCarousel(); 
});

//Prev Carousel
const prevCarousel = () => {
   if(carsouselImages[0]) {
    carousel.scrollTo(4800,0);
   }
    carousel.scrollBy(-300, 0); 
};

prevBtn.addEventListener('click', e => {
   prevCarousel(); 
});


// Auto carousel
const auto = true; // Auto scroll
const intervalTime = 5000;
let sliderInterval;


if (auto) {
  sliderInterval = setInterval(nextCarousel, intervalTime);
};

carousel.addEventListener('mouseover', (stopInterval) => {
  clearInterval(sliderInterval);
});

carousel.addEventListener('mouseleave', (startInterval) => {
  if (auto) {
    sliderInterval = setInterval(nextCarousel, intervalTime);
  }
}); 
   </script>

    
</div>
</body>
</html>