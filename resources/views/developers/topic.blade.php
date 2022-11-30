@extends('layouts.developer')
@section('content')
<style>
     /* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: #fff;
box-shadow: 0px 0px 7px #b5b5b5;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
} 
</style>
<div class="mainTopic clearfix">
     <div class="left">
          <div class="item clearfix">
              <div style='floaT:left;'>
                  <h3 class="title"> Java Stdin and Stdout I</h3>
                  <p><span class='difficulty'>Easy</span><span>Java(basic)</span> </p>
              </div>
             <a href="" class='link'>Solve Challange</a>
          </div>
          <div class="item clearfix">
              <div style='floaT:left;'>
                  <h3 class="title"> Java If-Else</h3>
                  <p><span class='difficulty'>Easy</span><span>Java(basic)</span> </p>
              </div>
             <a href="" class='link'>Solve Challange</a>
          </div>
          <div class="item clearfix">
              <div style='floaT:left;'>
                  <h3 class="title"> Java Stdin and Stdout I</h3>
                  <p><span class='difficulty'>Easy</span><span>Java(basic)</span> </p>
              </div>
             <a href="" class='link'>Solve Challange</a>
          </div>
          <div class="item clearfix">
              <div style='floaT:left;'>
                  <h3 class="title"> Java Stdin and Stdout I</h3>
                  <p><span class='difficulty'>Easy</span><span>Java(basic)</span> </p>
              </div>
             <a href="" class='link'>Solve Challange</a>
          </div>
          <div class="item clearfix">
              <div style='floaT:left;'>
                  <h3 class="title"> Java Stdin and Stdout I</h3>
                  <p><span class='difficulty'>Easy</span><span>Java(basic)</span> </p>
              </div>
             <a href="" class='link'>Solve Challange</a>
          </div>
         
     </div>
     <div class="right">
           <div class="skills">
               <p class="title">Skills</p>
                <label class="container1">Java (Basic)
                    <input name="basic" type="checkbox" check ed="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Java (Intermediate)
                    <input name="intermediate" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Java (Advanced)
                    <input  name="advanced" type="checkbox">
                    <span class="checkmark"></span>
                </label>
           </div>
           <div class="difficulty">
               <p class="title">difficulty</p>
                <label class="container1">Easy
                    <input name="basic" type="checkbox" check ed="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Medium
                    <input name="intermediate" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Hard
                    <input  name="advanced" type="checkbox">
                    <span class="checkmark"></span>
                </label>
           </div>
     </div>
</div>
@endsection
