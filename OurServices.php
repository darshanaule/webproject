<?php include('include/header.php');?>
<div class="laptop" id ="laptop">
<section class="our_services">
    <div class="services_inner" id="section1">
        <!-- SVG path for the semicircular motion -->
       <!-- <svg class="projectile-path" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  Adjust the path to start from the bottom-left corner and increase the diameter of the semicircle 
       <path d="M0,100 Q34,15 260,4" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5,5" opacity="0.7"/>
       </svg>-->



        <!-- Image with semicircular motion animation -->
        <div class="character character1">
            <img src="assets/images/jet.png" class="projectile-image">
        </div>
<div class=" plans_container" >
<div class="plans_card">
      <!-- Card content here -->
      <img src="assets/images/icons/1.png" class="plan_img"alt="icon">
      <!-- Card content here -->
      <p>Aspire Pro Plan<br>Apply to a wide Range of World Class Schools!</p>
     
      <div class="more-info">
        <!-- Additional information here -->
        <p>
            <ul>
                <li>Customized Dashboard</li>
                <li>Profile Consultation</li>
                <li>Profile Building</li>
                <li>University Shortlisting </li>
                <li>Document drafting assistance </li>
                <li>University Application Assistance</li>
                <li>Loan Services</li>
                <li>Accommodation </li>
                <li>Forex</li>
                <li>VISA Assistance</li>
                <li>Flight Booking Assistance</li>
          </ul>
    </p>
</div>
<button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>

</div>

    </div>
</section>
</div>















<div class="mobile" id ="mobile">
<section class="our_services">
    <div class="services_inner" id="section1">
        <!-- SVG path for the semicircular motion -->
       <!-- <svg class="projectile-path" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  Adjust the path to start from the bottom-left corner and increase the diameter of the semicircle 
       <path d="M0,100 Q34,15 260,4" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5,5" opacity="0.7"/>
       </svg>-->



        <!-- Image with semicircular motion animation -->
        <div class="character character1">
            <img src="assets/images/jet.png" class="projectile-image">
        </div>
<div class=" plans_container four-item-carousel owl-carousel owl-theme owl-nav-none" >
<div class="plans_card">
<img src="assets/images/icons/1.png" alt="icon">
      <!-- Card content here -->
      <p>Aspire Pro Plan<br>Apply to a wide Range of World Class Schools!</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>
            <ul>
                <li>Customized Dashboard</li>
                <li>Profile Consultation</li>
                <li>Profile Building</li>
                <li>University Shortlisting </li>
                <li>Document drafting assistance </li>
                <li>University Application Assistance</li>
                <li>Loan Services</li>
                <li>Accommodation </li>
                <li>Forex</li>
                <li>VISA Assistance</li>
                <li>Flight Booking Assistance</li>
          </ul>
    </p>
      </div>
      <button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>
<div class="plans_card">
      <!-- Card content here -->
      <p>Card 1 content</p>
      <div class="more-info">
        <!-- Additional information here -->
        <p>More info about card 1</p>
      </div>
      <button class="show-more">Show more</button>
</div>

</div>

    </div>
</section>
</div>




<?php include('include/footer.php');?>
<script>
    $(document).ready(function(){
  setTimeout(function() {
    $('#enquiry').modal('show');
 }, 4000);
});
</script>
<script>
 $(document).ready(function(){
        // Start the semicircular animation
        setTimeout(function() {
            $('.projectile-image').addClass('projectile-animation');
        }, 1000); // Adjust the delay as needed
    });
</script>
<script>
   $(document).ready(function() {
  // Toggle the more info section when "Show more" button is clicked
  $('.show-more').click(function() {
    $(this).siblings('.more-info').slideToggle();
  });
});

</script>
<script>
 document.addEventListener("DOMContentLoaded", function() {
  const showMoreButtons = document.querySelectorAll('.show-more');

  showMoreButtons.forEach(button => {
    button.addEventListener('click', function() {
      const plansCard = button.closest('.plans_card');
      const plansContainer = button.closest('.plans_container');
      const servicesInner = button.closest('.services_inner');
      const ourServices = button.closest('.our_services');

      // Toggle class to expand/collapse
      plansCard.classList.toggle('expanded');

      // Check if the plans card is expanded or collapsed
      const isExpanded = plansCard.classList.contains('expanded');

      // Calculate the height of the additional information
      const additionalInfoHeight = plansCard.querySelector('.more-info').length;
             // Update button text
      button.textContent = isExpanded ? 'Show less' : 'Show more';
      // Set the height of the plans card to accommodate the additional information
      plansCard.style.height = isExpanded ? 'auto' : '';

      // Set the additional height only to the bottom
      plansCard.style.paddingBottom = isExpanded ? `${additionalInfoHeight}px` : '';

      // Set the height of the plans container to accommodate the expanded plans card
      plansContainer.style.height = isExpanded ? 'auto' : '';

      // Set the height of the services inner container to accommodate the expanded plans container
      servicesInner.style.height = isExpanded ? 'auto' : '';

      // Set the height of the our services section to accommodate the expanded services inner container
      ourServices.style.height = isExpanded ? 'auto' : '';

      
    });
  });
});

</script>
<style>

.plans_container {
    display: flex;
    flex-direction:row;
    align-items: center;
    justify-content: space-evenly;
    width: 96%;
    margin-top: 9%;
    margin-left: -11%;
    animation: slideUpContainer 2s forwards;
}

.plans_card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    background-image: linear-gradient(-135deg, #0a5b77, #139255, #2b6a94);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    opacity: 0;
    height: 360px;
    width: 327px /* Adjust the width of each card */;
}

.plan_img{
    height:70px;
    width:70px;
}
.plans_card p {
  text-align:left;
  color:white;
  margin-bottom: 10px;
}

.plans_card button {
    margin-left:-1%;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.plans_card button:hover {
    background-color: #0056b3;
    cursor:pointer;
}
.character{
    z-index:4;
}
.character img{
    z-index:3;
}

.more-info {
    display: none;
    margin-top: 10px;
}
.more-info p{
    color:white;
    text-align:left;
}

@keyframes slideUpContainer {
    0% {
        opacity: 0; /* Start with opacity 0 */
        transform: translateY(100%);
    }
    100% {
        opacity: 1; /* End with opacity 1 */
        transform: translateY(0);
    }
}
@keyframes slideUp {
    0% {
        opacity: 0; /* Start with opacity 0 */
        transform: translateY(100%);
    }
    100% {
        opacity: 1; /* End with opacity 1 */
        transform: translateY(0);
    }
}
.plans_card:nth-child(1) {
    animation: slideUp 0.5s ease forwards 1s;
}

.plans_card:nth-child(2) {
    animation: slideUp 0.5s ease forwards 1.5s;
}

.plans_card:nth-child(3) {
    animation: slideUp 0.5s ease forwards 2s;
}

.plans_card:nth-child(4) {
    animation: slideUp 0.5s ease forwards 2.5s;
}

.our_services {
    width: 100%;
    height: fit-content;
    background-color: cadetblue;
}
.laptop_2{
    margin-top:5%;
}

.services_inner {
    position: relative;
    height: 600px;
    overflow: hidden;
    display: flex;
    align-items: center;
    background-image: url("assets/images/plan.png");
}

.projectile-path {
    position: absolute;
    top: 60px;
    left: -32%;
    width: 99%;
    height: 100%;
}

.projectile-image {
    height: 200px;
    width: 200px;
    transition: all 10s ease-in-out; /* Adjust the duration as needed */
}

.projectile-animation {
    animation: semicircularMotion 7s linear forwards; /* Adjust the duration as needed */
}

@keyframes semicircularMotion {
    0% {
        transform: translate(0, 0);
    }
    50% {
        transform: translate(170vw, -50vh) translateY(15vh);
    }

    100% {
        transform: translate(200vw, -70vh); /* Adjust the endpoint of the animation */
    }
}


@media only screen and (min-width:298px) and (max-width:399px){

.owl-theme .owl-dots .owl-dot {
    display: none;
    }

.mobile{
    margin-top: 40%;
}

.character{
    position: absolute;
    top: 290px; 
    left: -198px; 
    z-index: 4;
}
.character img{
    z-index:3;
}
.plans_container {
    position:relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 5%;
    width: 100%;
    margin-left:-1%;
    margin-bottom: 20px; /* Add margin to separate the cards */
    animation: slideUpContainer 2s forwards; /* Slide up animation */
}

.plans_card {
    position:relative;
    border: 1px solid #ccc;
    margin-left: 9%;   
    border-radius: 5px;
    padding: 20px;
    background-image: linear-gradient(-135deg, #0a5b77, #139255, #2b6a94);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Adding a subtle box shadow */
    opacity: 0;
    height:360px;
    width:255px /* Adjust the width of each card */
}
.plan_img{
    height:70px;
    width:70px;
}

.plans_card p {
  text-align: left;
  color: white;
  margin-bottom: 10px;
}

.plans_card button {
    margin-left:5%;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.plans_card button:hover {
    background-color: #0056b3;
}

.more-info {
    display: none;
    margin-top: 10px;
}
.more-info p{
    text-align: left;
  color: white;
}
@keyframes slideUpContainer {
    0% {
        opacity: 0; /* Start with opacity 0 */
        transform: translateY(100%);
    }
    100% {
        opacity: 1; /* End with opacity 1 */
        transform: translateY(0);
    }
}
@keyframes slideUp {
    0% {
        opacity: 0; /* Start with opacity 0 */
        transform: translateY(100%);
    }
    100% {
        opacity: 1; /* End with opacity 1 */
        transform: translateY(0);
    }
}
.plans_card:nth-child(1) {
    animation: slideUp 0.5s ease forwards 1s;
}

.plans_card:nth-child(2) {
    animation: slideUp 0.5s ease forwards 1.5s;
}

.plans_card:nth-child(3) {
    animation: slideUp 0.5s ease forwards 2s;
}

.plans_card:nth-child(4) {
    animation: slideUp 0.5s ease forwards 2.5s;
}

.our_services {
    width: 100%;
    height: fit-content;
    background-color: cadetblue;
}

.services_inner {
    position: relative;
    height: max-content;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    background-image: url(assets/images/plan.png);
}

.projectile-path {
    position: absolute;
    top: 60px;
    left: -32%;
    width: 99%;
    height: 100%;
}

.projectile-image {
    top:10%;
    height: 200px;
    width: 200px;
    transition: all 10s ease-in-out; /* Adjust the duration as needed */
}

.projectile-animation {
   /*  animation: semicircularMotion 5s linear forwards; Adjust the duration as needed */
    animation: semicircularMotion 5s linear forwards, smokeAnimation 7s ease-out  infinite 2s forwards;
}

@keyframes semicircularMotion {
    0% {
        transform: translate(0, 0);
    }

    50% {
        transform: translate(150vw, -50vh) translateY(8vh);
    }

    100% {
        transform: translate(170vw, -55vh); /* Adjust the endpoint of the animation */
    }
}
@keyframes smokeAnimation {
    0% {
       
        transform: translateY(10px);
    }

    50% {
        opacity: 1;
        transform: translateY(15px); /* Adjust the upward motion of the smoke */
        color: rgba(169, 169, 169, 0.8);
    }

    100% {
        opacity: 0;
        transform: translateY(-20px); /* Adjust the endpoint and downward motion of the smoke */
        color: rgba(169, 169, 169, 0.8);
    }
}
}





</style>
<script>
  // JavaScript to manipulate HTML based on screen size
  window.addEventListener('DOMContentLoaded', function () {
    // Check screen width
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // Modify HTML based on screen width
    if (screenWidth <= 400) {
      // Hide laptop content
      document.querySelector('#laptop').style.display = 'none';
    } else {
      // Hide mobile content
      document.querySelector('#mobile').style.display = 'none';
    }
  });
</script>