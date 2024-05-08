<form method="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">FirstName</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="FirstName" placeholder="FirstName">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">LastName</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="LastName" placeholder="LastName">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput3">PersonID</label>
        <input type="text" class="form-control" id="formGroupExampleInput3" name="PersonID" placeholder="PersonID">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput4">Address</label>
        <input type="text" class="form-control" id="formGroupExampleInput4" name="Address" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput5">City</label>
        <input type="text" class="form-control" id="formGroupExampleInput5" name="City" placeholder="City">
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
</form>
<?php
include_once "../App/Controllers/Add_Database.php";
?>