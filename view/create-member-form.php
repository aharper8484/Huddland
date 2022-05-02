<div class="add-member">
  <form action="save-member.php" method="post" id="add-member">
    <fieldset>
      <legend>Create New Member</legend>
      <!--MP (name fields)-->

      <div>
        <legend><u>Member Details</u></legend>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Surname:</label>
        <input type="text" id="lastname" name="lastname">
        <br>
        <br>
        <label for="date_of_birth">Date of Birth:</label>
        
        <input type="date" id="date_of_birth" name="date_of_birth">
        <script type="text/javascript" src="model/DOB-function.js"></script>
                <p><em>* members must be 18+</em></p><!-- must be 18+ -->
      </div>
<br>
      <!--Party-->
      <div>
        <legend><u>Party</u></legend>
        <input type="radio" name="party" value="1">
        <label class="partyList" for="Putting People First">Putting People First</label>
        <br>
        <input type="radio" name="party" value="2">
        <label class="partyList" for="Democratic Alliance">Democratic Alliance</label>
        <br>
        <input type="radio" name="party" value="3">
        <label class="partyList" for="Traditionalists">Traditionalists</label>
        <br>
        <input type="radio" name="party" value="4">
        <label class="partyList" for="Environmentalists">Environmentalists</label>
        <br>
        <input type="radio" name="party" value="5">
        <label class="partyList" for="The Fairness Party">The Fairness Party</label>
        <br>
      </div>
<br>
      <div>
        <legend><u>Constituencies</u><br></legend>
        <p><em>* only constitiencies without representation from an MP are available for selection</em></p>
            <!--Constituency-->
            <select name="constituency" id="constituency">
            <option value="">please select a constituency</option>
                <?php
                //only list available $constituencies
                //return only constituency names where constituencyID does NOT equal member.constituency

                foreach ($constituencies as $constituency){
                      echo "<option value='{$constituency['id']}'>{$constituency['region']}</option>";
                }
                ?>
              </select>
      </div>
<br>
      <!--Interests-->
<br>
      <div>
        <legend><u>Interests</u></legend>
        <p><em>* please select at least one interest</em></p>
          <?php
          //loop over the interests
          foreach ($interests as $interest) {
          echo "<input type='checkbox' name='interests[]' value='{$interest['id']}'>";
          echo "<label class='interestList' for='{$interest['name']}'>{$interest['name']}</label><br>";
          }
          ?>

      </div>
<br>

      <div>
        <input type="submit" class="serchBtn" value="Create Member">
      </div>
    </fieldset>
  </form>
</div>
