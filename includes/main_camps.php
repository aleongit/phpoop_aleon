<!-- main -->

  <h3>Completa els camps del formulari</h3>
  <p class='centre'>Step 2/3</p>

  <div class='ok' ></div>
  <!-- form -->

  <div id="form_camps" class="container_form">
    <form  method='post' action='valida_camps.php'>
    
    <!-- amb php generar camps, segons q -->
    <?php
    echo $_SESSION['form']['q'];
    $q = $_SESSION['form']['q'];
    

    for ( $i = 0; $i < $q; $i++ ) {

    echo "
    <!-- camp 1__________________________________________________________ -->
    <div class='camp'>
      <div class='ncamp'>* Camp ". $i+1 . "/$q *</div>
      
      <div class='row'>
            <label>Tipus: </label>
            <!-- select -->
            <select name='tipus". $i+1 ."' >
              <option selected>* Selecciona tipus *</option>
              <!--amb php genera opcions camp llista-->
    ";

    foreach(TIPUS as $codi => $nom) {
        if ( $codi == $_SESSION['camp']['tipus'][$i] ) {
          echo "<option value='$codi' selected>$nom</option>";
          } else {
          echo "<option value='$codi'>$nom</option>";
          }
        }
    
    echo "
            </select>
        </div>
        <div class='row'>
          <div class='error'>";
          echo ($_SESSION['camp_errors']['tipus'][$i])??'';
    
    echo "
          </div>
        </div>
        
        <div class='row'>
            <label>id: </label>
            <input type='text' name='id". $i+1 ."' placeholder='ID del camp..'
              value='";
              echo ( $_SESSION['camp']['id'][$i] )??''; 
        
    echo "' > 
        </div>
        <div class='row'>
          <div class='error'>";
            echo ($_SESSION['camp_errors']['id'][$i])??'';
    
    echo "</div>
        </div>

        <div class='row'>
            <label>name: </label>
            <input type='text' name='name". $i+1 ."' placeholder='NAME del camp..' 
              value='";
              echo ( $_SESSION['camp']['name'][$i] )??'';
    echo "' >
        </div>
        <div class='row'>
          <div class='error'>";
          echo ($_SESSION['camp_errors']['name'][$i])??'';
      
    echo "</div>
        </div>

        <div class='row'>
            <label>Valors/s: </label>
            <textarea name='value". $i+1 ."' 
            placeholder='1 valor o varis separats per , per select i checkbox'>";
            echo ( $_SESSION['camp']['value'][$i] )??'';
            echo "</textarea>
        </div>
        <div class='row'>
          <div class='error'>";
          echo ($_SESSION['camp_errors']['value'][$i])??'';
    
    echo "</div>
        </div>

      </div>
      <!-- fi camp 1__________________________________________________________ -->   
      ";

    }

    ?>

      <div class="row">
        <div class="col-48">
          <input type="submit" name='ko' value='Nah'>
        </div>
        <div class="col-48">
          <input type="submit" name='go' value='Go Go!'>
      </div>
      </div>

    </form>
  </div>

<!--fi main-->


