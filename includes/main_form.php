<!-- main -->

  <h3>Creador de formularis</h3>
  <p class='centre'>Step 1/3</p>

  <div class='ok' ></div>
  <!-- form -->

  <div id="form_form" class="container_form">
    <form  method='post' action='valida_form.php'>
      
      <div class="row">
          <label for="id">id: </label>
          <input type='text' name='id' placeholder="ID del form.." 
            value='<?php echo ( $_SESSION['form']['id'] )??'' ?>' >
      </div>
      <div class="row">
        <div class="error"><?php echo ($_SESSION['form_errors']['id'])??'' ?></div>
      </div>
      
      <div class="row">
          <label for="metode">method: </label>
          <!-- select -->
          <select name="metode" >
            <option selected>* Selecciona mètode *</option>
            <option value="post">Post</option>
            <option value="get">Get</option>
          </select>
      </div>
      <div class="row">
        <div class="error"><?php echo ($_SESSION['form_errors']['metode'])??'' ?></div>
      </div>

      <div class="row">
          <label for="action">action: </label>
          <input type='text' name='action' placeholder="*.php" 
            value='<?php echo ( $_SESSION['form']['action'] )??'' ?>' >
      </div>
      <div class="row">
        <div class="error"><?php echo ($_SESSION['form_errors']['action'])??'' ?></div>
      </div>

      <div class="row">
          <label for="q">camps: </label>
          <input type='number' name='q' placeholder="nombre de camps.." value='' >
      </div>
      <div class="row">
        <div class="error"><?php echo ($_SESSION['form_errors']['q'])??'' ?></div>
      </div>

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



