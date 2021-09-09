<style>
    h2 {
        font-size: 35px;
        font-family: monospace;
        text-align: center;
        font-style: italic;
        margin-top: 20px;
        color: darkred;
        padding-top: 30px;
    }
    
    #a1 {
        color: white;
        font-size: large;
        text-transform: uppercase;
        font-family: cursive;
    }
    
    table {
        border: solid thin black;
    }
</style>
@extends('headfoot') @section('content')


<h2>
    Admin Dashboard
</h2>
<hr style="width: 50%; height: 2px; background-color: darkred;">
<table>
    <div class="row" style="padding-left: 100px;padding-top: 50px; display: none;">
        <div style="width: 150px;height: 100px;background-color: darkgreen;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> Staff</a>
        </div>
        <br>
        <div style="width: 150px;height: 100px;background-color: brown;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> Student</a>
        </div>
        <br>
        <div style="width: 150px;height: 100px;background-color: darkgoldenrod;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> Courses</a>
        </div>
        <br>
        <div style="width: 150px;height: 100px;background-color: darkmagenta;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> News</a>

        </div>
        <br>
        <div style="width: 150px;height: 100px;background-color: darkslateblue;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> Events</a>

        </div>
        <br>
        <div style="width: 150px;height: 100px;background-color:firebrick;margin-left: 20px;text-align: center;">
            <a href="" id="a1"><br> Fees</a>
        </div>
    </div>
</table>


<script>
    $(document).ready(function() {
        $('.row').slideDown(2000);

    })
</script>
<div class="row" style="height: 600px;"></div>
@endsection