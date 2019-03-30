<?php
include 'header.php';
 ?>

    <section class="CVforma">


        <div class= "naslovCV">

            <h2> Send us your CV </h2>

        </div>

        <div class="unosCV">
          <?php
          if (!isset($_GET['sendCV'])) {

          }
          else {
            $tekst = $_GET['sendCV'];
            if($tekst == "emailError") {
              echo "<p class='error'>Please enter your valid email.</p>";
            }
            else if($tekst == "fileError") {
              echo "<p class='error'>Sorry, there was an error uploading your file.</p>";
            }
            else if($tekst == "fileTypeError") {
              echo "<p class='error'>Sorry, only PDF and DOC files are allowed to upload.</p>";
            }
            else if($tekst == "success") {
              echo "<p class='ok'>Your CV is successfully sent.</p>";
            }
            else if($tekst == "empty") {
              echo "<p class='error'>Please fill all the fields.";
            }
            else {
              echo "<p class='error'>Your send request submission failed, please try again.";
            }

          }

           ?>
          <form class="unosCV" action="php/sendCV.php" method="POST" enctype="multipart/form-data">



            <input type="text" placeholder="Your name here" name="ime" id="imeKorisnika">
            <br><br>

            <input type="text" placeholder="Your email here" name="email" id="prezimeKorisnika">
            <br><br>
            <label for="posaoCV"><b>For which job you apply?</b></label>

            <select name="posaoCV">
              <optgroup label="Chose one...">
                <option value="Dizajner">Web designer</option>
                <option value="Programer">Developer</option>
                <option value="SofIng">Software Engineer</option>
              </optgroup>
            </select>
            <textarea name="message" rows="5" placeholder="Your letter here"></textarea>
            <br><br>
            <label for="uploadCV"><b>Upload your CV file:</b></label>
            <input type="file" class="inputfile" name="attachment" accept=".doc,.docx,.pdf" value="CV" id="unosFile">
            <br><br><br>
            <div>
              <!-- onclick="klikCV()"-->
                <button name="submit">S E N D &nbsp; C V</button>
            </div>

            <img src="slike/CV.png">
          </form>
         </div>
       </section>

   <?php
   include 'footer.php';
    ?>
