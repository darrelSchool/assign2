<?php
class forms{
  function sign_up_form($handler){?>
    <h1>Second date update</h1>
    <form
    action="<?= $handler ?>"
      method="post"
      style="
        padding: 24px;
        width: 40vw;
        row-gap: 10px;
        display: flex;
        flex-direction: column;
      "
    >
      <div class="mb-3">
        <label for="name" class="form-label">Name: </label
        ><input
          type="text"
          name="name"
          class="form-control"
          required
          pattern="[a-zA-Z]{4,20}"
          placeholder="Please enter your name"
        />
      </div>
      <div>
        <label for="email" class="form-label">Email: </label
        ><input
          class="form-control"
          type="text"
          name="email"
          required
          pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
          placeholder="example@example.com"
        />
      </div>
      <div>
        <label for="dates" class="form-label">Date's name: </label
        ><input
          class="form-control"
          type="text"
          name="dates"
          required
          pattern="[a-zA-Z]{4,20}"
          placeholder="Please enter their name"
        />
      </div>
      <div>
        <label for="p_no" class="form-label">Your phone number: </label
        ><input
          type="text"
          pattern="[0-9]{10}"
          required
          name="p_no"
          class="form-control"
          placeholder="0712345678"
        />
      </div>
      <div>
        <label for="dates_no" class="form-label">Your date's number: </label
        ><input
          type="text"
          required
          pattern="[0-9]{10}"
          class="form-control"
          name="dates_no"
          placeholder="0712345678"
        />
      </div>
      <div>
        <label for="desc" class="form-label">Description: </label
        ><textarea
          rows="4"
          name="desc"
          required
          class="form-control"
          cols="18"
          placeholder="Please write a description of your experience on your first date and why you are asking for a second."
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary my-4">Submit</button>
    </form>
    <?php
  }
    function verify_form($post, $verify){?>
    <form action="verify_email.php" method="post">
      <p>Check your email for the verification code</p>
      <p>Enter the 6-digit code in the field below</p>
      <input required type="text" name="verify_user" placeholder="123456" pattern="[0-9]{6}"/>
      <button type="submit" class="btn btn-primary my-4">Submit</button>
      <input hidden type="text" name="name" value="<?= $post['name']?>" />
      <input hidden type="text" name="verify" value="<?= $verify ?>" />
      <input hidden type="text" name="email" value="<?= $post['email']?>" />
      <input hidden type="text" name="dates" value="<?= $post['dates']?>" />
      <input hidden type="text" name="p_no" value="<?= $post['p_no']?>" />
      <input hidden type="text" name="dates_no" value="<?= $post['dates_no']?>" />
      <input hidden type="text" name="desc" value="<?= $post['desc']?>" />
      
    </form> 
    <?php }
}
?>
