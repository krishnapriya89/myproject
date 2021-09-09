@extends('headfoot') @section('content')
<style>
    #a1 {
        font-size: 15px;
        font-family: cursive;
        font-style: italic;
        color: darkgreen;
    }
</style>
<div class="card-group" style="padding: 30px;">
    <div class="card">
        <img src="{{url('college images/icon1.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">B C A</h5>
            <a href="" id="a1">Students List</a><br>
            <a href="" id="a1">Attendance</a><br>
            <a href="" id="a1">Academic Performance</a>
        </div>
    </div>
    <div class="card">
        <img src="{{url('college images/img1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">B.Sc Computer Science</h5>
            <a href="" id="a1">Students List</a><br>
            <a href="" id="a1">Attendance</a><br>
            <a href="" id="a1">Academic Performance</a>
        </div>
    </div>
    <div class="card">
        <img src="{{url('college images/hat.png')}}" class="card-img-top" alt="..." style="height: 210px;">
        <div class="card-body">
            <h5 class="card-title">B B A</h5>
            <a href="" id="a1">Students List</a><br>
            <a href="" id="a1">Attendance</a><br>
            <a href="" id="a1">Academic Performance</a>
        </div>
    </div>
    <div class="card">
        <img src="{{url('college images/img3.jpg')}}" class="card-img-top" alt="..." style="height: 210px;">
        <div class="card-body">
            <h5 class="card-title">BA.English</h5>
            <a href="" id="a1">Students List</a><br>
            <a href="" id="a1">Attendance</a><br>
            <a href="" id="a1">Academic Performance</a>
        </div>
    </div>
</div>
@endsection