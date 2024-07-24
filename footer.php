<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family: 'Montserrat', sans-serif;
}

.main-footer {
  padding: 50px 0;
  display: flex;
  justify-content: space-evenly;
  background-color: #19302E;
}

.main-footer ul {
  list-style: none;
}

.main-footer h1 {
  font-size: 22px;
  line-height: 40%;
  color: #ffffff;
  margin-bottom: 10px;
  font-weight: 500;
}

.main-footer h2 {
  color: #ffffff;
  font-weight: 500;
}

.main-footer ul li a {
  color: #ffffffcc;
  text-decoration:none;
}

footer {
  background-color: #19302E;
  border-top: 1px solid #6EB981;
  font-size: 17px;
  padding: 15px 5px;
  color: #ffffff;
  text-align: center;
}

footer a {
  text-decoration: none;
  color: #ffffff;
}

.logoinfo p {
  color: #6EB981;
  font-size: 17px;
  margin-top: 5px;
}

.contact-details {
  margin-top: 20px;
}

.contact-details li {
  list-style: none;
  margin: 10px 0;
}

.contact-details li a {
  text-decoration:none;
  color: #f1f1f1;
}

.contact-details .fa {
  color: #f1f1f1;
  margin-right: 10px;
}

.sociallogos{
  padding:20px 0;
}

.sociallogos .logobox a{
  padding:0 10px;
  text-decoration:none;
  color:#ffffff;
  font-size:22px;
}

.com ul li{
  padding:5px 0;
}


@media only screen and (max-width: 749px) {
  .main-footer {
    padding:20px;
    display:grid;
    grid-template-columns: 1fr 1fr;
  }
    .info{
      padding:20px 0;
  }
}

@media (max-width: 480px) {
  .main-footer {
    grid-template-columns: 1fr;
  }
  .sociallogos{
    padding:20px 0;
  }
  .com{
    padding:20px 0;
  } 

}

</style>
<section id="footer">
  <div class="main-footer">
    <div class="logoinfo" data-aos="fade-up">
      <h2>Responsive Footer</h2>
      <p>By SANA</p>

      <div class="contact-details">
        <h1>Contact Us</h1>
        <li>
          <div class="fa fa-phone"></div><a href="tel:+919326048690">+91 1234567890</a></li>
        <li>
          <div class="fa fa-envelope"></div><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
        </li>
    </div>
  </div>
  <div class="com " data-aos="fade-up">
    <h1>About</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="info" data-aos="fade-up">
    <h1>Social Media</h1>
    <div class="sociallogos">
      <div class="logobox">
        <a href="www.instagram.com/@sanaanwar90" class="fa fa-instagram">@sanaanwar</a>
        <a href="www.linkedin.com/@sanaanwar" class="fa fa-linkedin">Sana Anwar</a>
        <a href="www.facebook.com/@sanaanwar" class="fa fa-facebook">SANA</a>
        <a href="www.youtube.com/@sana" class="fa fa-youtube-play">Sana Anwar</a>
       
      </div>
    </div>
  </div>
  </div>
<footer>© Your Copyright 2021 All Rights Reserved</footer>
</section>