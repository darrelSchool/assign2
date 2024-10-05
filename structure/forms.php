<?php
class forms{
  function sign_up_form(){?>
    <h1>Second date update</h1>
    <form action="" method="post">
      <div>
        <label for="name">Name: </label
        ><input type="text" name="name" placeholder="Please enter your name" />
      </div>
      <div>
        <label for="dates">Date's name: </label
        ><input
          type="text"
          name="dates"
          placeholder="Please enter their name"
        />
      </div>
      <div>
        <label for="p_no">Your phone number: </label
        ><input type="number" name="p_no" />
      </div>
      <div>
        <label for="dates_no">Your date's number: </label
        ><input type="number" name="dates_no" />
      </div>
      <div>
        <label for="desc">Description: </label
        ><textarea
          rows="4"
          cols="18"
          placeholder="Please write a description of your experience on your first date and why you are asking for a second."
        ></textarea>
      </div>
      <button type="submit">Submit</button>
      
    </form>
    <?php
  }
}
?>
