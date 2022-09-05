<div>
  <div id="center_div">
  <?= session()->getFlashdata('error') ?>
  <?= service('validation')->listErrors()?>
  <? csrf_field() ?>

  <form action="" method="POST">
    <label for="F-name">First name</label>
    <input type="text" name="F-name" id="F-name" value="">
    <label for="L-name">Last name</label>
    <input type="text" name="L-name" id="L-name" value="">
    <label for="passwrd">Password</label>
    <input type="text" name="passwrd" id="passwrd" value="">
    <button type="submit">Register</button>
    <?php if(isset($validation)):?>
      <?= $validation->listErrors() ?>
    <?php endif; ?>
    </form>
  </div>
  <div id="users">
      <?php
      $db = \Config\Database::connect();
      $query = $db->query('SELECT * FROM users');
      $result = $query->getResult();

      if(count($result) > 0){
        foreach($result as $row){
          echo $row -> first_name . ", ";
          echo $row -> last_name . ", ";
          echo $row -> password;
          echo "<br>";
        }
      }else{
        echo "<p>No results found</p>";
      }
      ?>
  </div>
</div>