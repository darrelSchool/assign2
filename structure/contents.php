<?php 
class contents{
  function show_user_content($requests){
    ?>
    <table class="table">
      <tr>
        <td>Name</td>
        <td>Description</td>
      </tr>
    <?php
    foreach($requests->fetchAll(PDO::FETCH_ASSOC) as $request){
      echo "<tr><td>" . $request['name'] . "</td><td>" . $request['description'] . "</td></tr>";
    }?>
    </table>
    <?php
  } 
}

?>
