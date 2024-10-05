<?php
class forms{
  function sign_up_form(){?>
    <h1>Second date update</h1>
    <form
      action=""
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
          placeholder="Please enter your name"
        />
      </div>
      <div>
        <label for="dates" class="form-label">Date's name: </label
        ><input
          class="form-control"
          type="text"
          name="dates"
          placeholder="Please enter their name"
        />
      </div>
      <div>
        <label for="p_no" class="form-label">Your phone number: </label
        ><input
          type="text"
          pattern="[0-9]{10}"
          name="p_no"
          class="form-control"
          placeholder="0712345678"
        />
      </div>
      <div>
        <label for="dates_no" class="form-label">Your date's number: </label
        ><input
          type="text"
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
          class="form-control"
          cols="18"
          placeholder="Please write a description of your experience on your first date and why you are asking for a second."
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary my-4">Submit</button>
    <?php
  }
}
?>
