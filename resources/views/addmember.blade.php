<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <h2>Stacked form</h2>
    <form action="create1" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Stdno:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="stud_name">
        </div>
        <div class="form-group">
            <label for="name">Stdname:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="stud_id">
        </div>
        <div class="form-group">
            <label for="name">Stdname:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="specialty">
        </div>
        <div class="form-group">
            <label for="name">Stdid:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="acadmic_id">
        </div>
        <div class="form-group">
            <label for="name">Stdspeeid:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="semester">
        </div>
        <div class="form-group">
            <label for="name">semester_year:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="semester_year">
        </div>
        <div class="form-group">
            <label for="name">Stntasid:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="fees_sem">
        </div>
        <div class="form-group">
            <label for="name">Addres:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="acc_fee">
        </div>

        <div class="form-group">
            <label for="address">Jawno:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="gender">
        </div>
        <div class="form-group">
            <label for="address">Telno:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="social_stud">
        </div>
        <div class="form-group">
            <label for="address">Genderid:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="adrress">
        </div>
        <div class="form-group">
            <label for="address">Calender:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="tel">
        </div>
        <div class="form-group">
            <label for="address">Addresstat:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="help">
        </div>

        <div class="form-group">
            <label for="address">Brounivcant:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="ware_help">
        </div>
        <div class="form-group">
            <label for="address">Addrescity:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="college_loan">
        </div>
        <div class="form-group">
            <label for="address">Addrescity:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="member_loan">
        </div>
        <div class="form-group">
            <label for="address">Addrescity:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="student_work">
        </div>
        <div class="form-group">
            <label for="address">Addrescity:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter password" name="student_salary">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



</body>
</html>
