<!-- <!doctype html>
<html lang="en">

<head>
     Required meta tags -->
<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="{{url('stud.css')}}">
<title>Student Registration</title>
</head> -->

<!-- <body style="background: cadetblue;"> -->
@extends('headfoot') @section('content')
<h3>Student Regstration</h3>
<hr style="width: 50%;text-align: center;background: chocolate;">

<form method="POST" style="margin-left: 200px;" onsubmit="return validateform()" name="form1">
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Name:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="text" class="form-control" style="display: block;width: 50%;" name="fname">
            <!-- <label for=""><small><b>Maximum 50 characters</b></small></label> -->
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Date of Birth:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="date" class="form-control" style="display: block;width: 50%;" required>

        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Adress:</label>
        </div>
        <div class="col-lg-8 ">
            <textarea name="" id="" cols="40" rows="5" style="display: block;width: 50%;" required></textarea>

        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Qualification:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="checkbox" required>10 th level
            <br>
            <input type="checkbox" name="" id="" required>12 th level
            <br>
            <input type="checkbox" name="" id="">Graduation
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Phone Number:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="number" name="fnum" id="" class="form-control" style="display: block;width: 50%;">
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Email id:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="text" name="mail" id="" class="form-control" style="display: block;width: 50%;">
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">User Name:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="text" name="uname" id="" class="form-control" style="display: block;width: 50%;">
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Password:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="password" name="pass" id="" class="form-control" style="display: block;width: 50%;">
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for=""> Confirm Password:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="password" name="cpass" id="" class="form-control" style="display: block;width: 50%;">
        </div>
    </div>
    <br>
    <div class="form-inline row">
        <div class="col-lg-3 ">
            <label for="">Upload photo:</label>
        </div>
        <div class="col-lg-8 ">
            <input type="file" name="" id="" class="form-control" style="display: block;width: 50%;" required>
        </div>
    </div>
    <br>
    <div>
        <input type="checkbox" required> I genuinely declare that all the facts mentioned above are true to my faith, and I am answerable for its accuracy.

    </div>
    <div class="form-inline row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-8">
            <button type="submit">Submit</button>
        </div>
    </div>


</form>

<script>
    function validateform() {
        rt = true;
        fname = document.forms["form1"]["fname"].value
        fnum = document.forms["form1"]["fnum"].value
        fmail = document.forms["form1"]["mail"].value
        epat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        matchArray = fmail.match(epat);
        uname = document.forms["form1"]["uname"].value
        cpass = document.forms["form1"]["cpass"].value
        if (fname == "") {
            alert("enter name")
            document.forms["form1"]["fname"].focus();
            rt = false
        } else if (/[^a-z]/gi.test(document.forms["form1"]["fname"].value)) {
            alert("alphabets only")
            document.forms["form1"]["fname"].focus();
            rt = false;
        } else if (fnum == "") {
            alert("enter phone number")
            document.forms["form1"]["fnum"].focus();
            rt = false;

        } else if ((fnum.length < 10) || (fnum.length > 10)) {
            alert("phone number contain 10 digits")
            document.forms["form1"]["fnum"].focus();
            rt = false;
        } else if (fmail == "") {
            alert("enter mail id");
            document.forms["form1"]["mail"].focus();
            rt = false;
        } else if (matchArray == null) {
            alert("enter valid email id");
            document.forms["form1"]["mail"].focus();
            rt = false;

        } else if (uname == "") {
            alert("enter username");
            document.forms["form1"]["uname"].focus();
            rt = false;
        } else if (uname.length < 6) {
            alert("username must contain 6 or more characters");
            document.forms["form1"]["uname"].focus();
            rt = false;

        } else if (document.forms["form1"]["pass"].value.length == "") {
            alert("enter password");
            document.forms["form1"]["pass"].focus();
            rt = false;

        } else if (document.forms["form1"]["pass"].value.length < 6) {
            alert('password must contain 6 or more characters');
            document.forms["form1"]["pass"].focus();
            rt = false;
        } else if (cpass == "") {
            alert(" Enter confirm password");
            document.forms["form1"]["cpass"].focus();
            rt = false;
        } else if (cpass != document.forms["form1"]["pass"].value) {

            alert("cofirm password");
            document.forms["form1"]["cpass"].focus();
            rt = false;
        }



        return rt;
    }
</script>
<div class="row" style="height: 300px;"></div>
@endsection
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>

</html> -->