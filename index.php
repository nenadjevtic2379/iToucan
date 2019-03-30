
  <?php
  include 'header.php';
  ?>


     <main>

       <div id="tekstOKompaniji" class="tekstOKompaniji">
         <h2>About our company...</h2>
         <p> iToucan is a global cloud platform and cognitive solutions company, which has continually evolved over the past century to remain at the forefront of technological innovation. Our capabilities in data and analytics, cloud, mobile, social and security have helped USA evolve to become one of the world’s most digitally advanced nations.
         <br><br>
         iToucan’s greatest invention is the iToucaners. We believe that progress is made through progressive thinking, progressive leadership, progressive policy and progressive action. For that reason, we manage the brand to be highly esteemed and valued by forward-thinking clients, employees, communities, investors and the general public worldwide.
         </p>
      </div>
      <section id="proizvodi" class="proizvodi">
       <h2> Our products so far... </h2>
       <ul>
         <li><p>Development</p><a href="#"><div class="proizvod1"></div></a></li>
         <li><p>Design</p><a href="#"><div class="proizvod2"></div></a></li>
         <li><p>Site creation</p><a href="#"><div class="proizvod3"></div></a></li>
         <li><p>Mobile applications</p><a href="#"><div class="proizvod4"></div></a></li>
         <li><p>Security</p><a href="#"><div class="proizvod5"></div></a></li>
       </ul>
     </section>
     <section id="zaposleniUKompaniji" class="zaposleniUKompaniji">
       <div class= "naslovZaposleni">
           <h2> Some of our crew... </h2>
       </div>

       <div class = "zaposleni">
         <ul class = "linijaZaposlenih">
             <a href="#a"><li><div id="covek1" class=Covek1></div></li></a>
             <a href="#b"><li><div id="zena1" class=Zena></div></li></a>
             <a href="#c"><li><div id="zena2" class=Zena2></div></li></a>
         </ul>
       </div>

       <div class="tekstZaPrikazivanje" id="a">
          <span class="imeZaposlenog">Wolf P. Gajich - CEO</span>
             <p>A CEO, or chief executive officer, is a company’s highest ranking executive. While the chief executive officer duties may vary by industry or between companies, the CEO is generally responsible for making decisions that impact the entire company. Add your CEO roles and responsibilities to our CEO job description sample to create a custom job advertisement for your organization.</p>
       </div>

       <div class="tekstZaPrikazivanje" id="b">
         <span class="imeZaposlenog">Amanda R. Collins - PR</span>
             <p>A hard-working employee stays focused on the tasks before her and spends little time chatting with other employees. Her work is consistently of acceptable to excellent quality, and she looks for more work if everything assigned to her is done. You will not catch a hard-working employee browsing the Internet for shoe sales or downloading the latest and greatest hits from her favorite musicians. She is at work to do exactly that — work.</p>
       </div>

       <div class="tekstZaPrikazivanje" id="c">
         <span class="imeZaposlenog">Anna M. Abramovich - DEVELOPER</span>
             <p>This employee is motivated to the best job she can. She shows up to work on time and takes her breaks on time. She eagerly looks forward to any training that might help her do better, and she is the first to volunteer for new projects. She is reliable and consistently meets deadlines and production goals. Her employer depends on her optimal efforts to help him succeed and is seldom disappointed.</p>
       </div>

     </section>

     <section id="karijera" class="stranaKarijera">
       <div class= "naslovKarijere">
        <h2> Currently we are looking for...</h2>
        <h3> *click on images for more informations* </h3>
       </div>

      <div class = "rukovanje">
           <div id=rukovanjeKarijere></div>
           <a href="formaCV.php" style="text-decoration: none"><p>Send us your CV here...</p></a>
       </div>

       <div class = "posao">
         <ul class = "listaPoslova">
             <a href="#1"><li><div class="Posao1"></div></li></a>
             <a href="#2"><li><div class="Posao2"></div></li></a>
             <a href="#3"><li><div class="Posao3"></div></li></a>
         </ul>
       </div>


       <div class="tekstZaPrikazivanjeKarijere" id="1">
        <span class="imePosla">WEB DESIGNER</span>

           <p>We are looking for a talented Web Designer to create amazing user experiences.  The ideal candidate should have an eye for clean and artful web design. They should also have superior user interface design skills.
           <br>
           The successful candidate will be able to translate high-level requirements into interaction flows and artifacts. They will be able to transform them into beautiful, intuitive, and functional designs.</p>
       </div>

       <div class="tekstZaPrikazivanjeKarijere" id="2">
       <span class="imePosla">DEVELOPER</span>

         <p>We are looking for a Software Developer to build and implement functional programs. You will work with other Developers and Product Managers throughout the software development life cycle.
          <br>
          In this role, you should be a team player with a keen eye for detail and problem-solving skills. If you also have experience in Agile frameworks and popular coding languages, we’d like to meet you.
          <br>
          Your goal will be to build efficient programs and systems that serve user needs.</p>
       </div>

       <div class="tekstZaPrikazivanjeKarijere" id="3">
         <span class="imePosla">SOFTWARE ENGINEER</span>

          <p>We are looking for a passionate Software Engineer to design, develop and install software solutions.
          <br>
          Software Engineer responsibilities include gathering user requirements, defining system functionality and writing code in various languages, like Java, Ruby on Rails or .NET programming languages. Our ideal candidates are familiar with the software development life cycle from preliminary system analysis to tests and deployment.
          <br>
          Ultimately, the role of the Software Engineer is to build high-quality, innovative and fully performing software that complies with coding standards and technical design.</p>
       </div>
     </section>

     <section id="contct" class="contactUs">
       <div class= "naslovKontakt">

           <h2>...or contact us...</h2>

       </div>

       <div class="unosPoruke">

         <?php
            if (!isset($_GET['contact'])) {

            }

            else {
              $tekst = $_GET['contact'];

              if($tekst == "successSend") {
                echo "<p class='ok'>Your message is successfully sent!</p>";
              }
              else if($tekst == "emailError"){
                echo "<p class='error'>Please enter your valid email.</p>";
              }
              else if($tekst == "numberError") {
                echo "<p class='error'>Sorry, only numbers are allowed to phone number field.</p>";
              }
              else if($tekst == "empty") {
                echo "<p class='error'>Please fill all the fields.";
              }
              else {
                echo "<p class='error'>Your contact request submission failed, please try again.";
              }
            }

         ?>

         <form action="php/sendMessage.php" method="POST">

           <label for="ime"><b>First name:</b></label>
           <input type="text" placeholder="Your first name here" name="ime" id="imeKorisnika">

           <label for="prezime"><b>Last name:</b></label>
           <input type="text" placeholder="Your last name here" name="prezime" id="prezimeKorisnika">

           <label for="email"><b>e-mail:</b></label>
           <input type="email" placeholder="Your e-mail here" name="email" id="emailKorisnika">

           <label for="brtel"><b>Phone:</b></label>
           <input type="text" placeholder="Your phone number here" name="brtel" id="telKorisnika">

           <label for="naslov"><b>Message subject:</b></label>
           <input type="text" placeholder="Your subject here" id="subject" name="naslov" > <br>

           <label for="poruka"><b>Message text:</b></label>
           <textarea placeholder="Enter your message here..." name="poruka" id="porukaKorisnika" rows="5"></textarea>
           <br><br>
           <label for="tporuke" class="sel"><b>Choose message type:</b></label>
           <select name="tporuke">
             <optgroup label="Chose one...">
               <option value="Pitanje">question</option>
               <option value="Zahtev">request</option>
               <option value="Predlog">suggestion</option>
               <option value="Saradnja">cooperation</option>
             </optgroup>
           </select>
           <br><br>


           <div>
             <!--onclick="klikKontakt()"-->
               <button name="submit" >S E N D &nbsp; M E S S A G E</button>
           </div>


          </form>

       </div>

       <div class = "lokacija">
           <h2> We are located at: </h2>

           <p>
              <iframe src="https://maps.google.com/maps?q=pretoria%20union%20b&t=&z=13&ie=UTF8&iwloc=&output=embed" width="80%" height="350" allowfullscreen></iframe>
           </p>
       </div>
     </section>

     <section id="blog" class="blogSekcija">
       <div class= "naslovBlog">
           <h2> OUR BLOG </h2>
           <h3> *click on images for more informations* </h3>
       </div>

       <div class="blogNaslov">
          <h2>19.01.2019. - Singapore delegate in visit</h2>
           <a href="vest3.php"><img src="slike/singapore.jpg"></a>
          <p>The delegation from Singapore visited our company and was very pleased with what they saw. An agreement on future cooperation on international news has been reached. In the most recent time, a visit by a delegation of our company to the companies of our friends from Singapore is expected.</p>
       </div>

       <div class="blogNaslov">
          <h2>17.12.2018 - Receiving young experts to our company</h2>
           <a href="vest2.php"><img src="slike/primanjemladih.jpg"></a>
          <p>In the middle of the year, our company announced a competition for admission of young experts. The best among them went into narrower outlook, and the best among the best are currently employed in our company in the areas they were applying for. Our company will continue the tradition of employment of young experts next year, see you soon!</p>
       </div>

       <div class="blogNaslov">
          <h2>01.11.2018 - 20th ANNIVERSARY!!</h2>
           <a href="vest1.php"><img src="slike/20rodj.png"></a>
          <p>It’s a matter of great pride to see our company growing, embracing good value system and achieving more than what we have ever thought of. There is a set of people whom we would want to thank on this auspicious day from the bottom of my heart. First of all, our present and ex-employees who have worked to help this organization to the zenith of success.</p>
       </div>
     </section>
     </main>

     <?php
      include 'footer.php';
      ?>
