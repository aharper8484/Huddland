<div class="search-member">
  <fieldset>
  <legend>Search Members</legend>
  <form action="search-member-results.php" method="post">

  <!--MP (name fields)-->

      <div>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Surname:</label>
        <input type="text" id="lastname" name="lastname">
        <br>
      </div>
<br>


      <!--Party-->
      <div>
        <legend>Search by Party</legend>
        <div class="wrapper">
        <input type="radio" name="party" value="1">
        <label for="Putting People First">Putting People First</label>
        <input type="radio" name="party" value="2">
        <label for="Democratic Alliance">Democratic Alliance</label>
        <input type="radio" name="party" value="3">
        <label for="Traditionalists">Traditionalists</label>
        <input type="radio" name="party" value="4">
        <label for="Environmentalists">Environmentalists</label>
        <input type="radio" name="party" value="5">
        <label for="The Fairness Party">The Fairness Party</label>
        </div>
      </div>
<br>
      <div>
        <input type="submit" name="submit" value="Search Members">
      </div>
  </form>
  </fieldset>
</div>

