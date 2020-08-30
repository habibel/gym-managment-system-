{{-- <html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  .sidebar1 {
    background: #F17153;
    /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(#F17153, #F58D63, #f1ab53);
    /* Standard syntax */
    padding: 0px;
    height: 100%;
}
.logo {
    max-height: 130px;
}
.logo>img {
    margin-top: 30px;
    padding: 3px;
    border: 3px solid white;
    border-radius: 100%;
}
.list {
    color: #fff;
    list-style: none;
    padding-left: 0px;
}
.list::first-line {
    color: rgba(255, 255, 255, 0.5);
}
.list> li, h5 {
    padding: 5px 0px 5px 40px;
}
.list>li:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-left: 5px solid white;
    color: white;
    font-weight: bolder;
    padding-left: 35px;
}.main-content{
text-align:center;
}
.row{height: 100%;}

</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-4 sidebar1 "  >
            <div class="logo"><a class="m-5 mt-5" href="{{url('home')}}">
                    <img src="http://lorempixel.com/output/people-q-g-64-64-1.jpg" class="img-responsive center-block" alt="Logo">
               </a> </div> <br>
                <div class="left-navigation">
                    <ul class="list">
                        <h5><strong>choises</strong></h5>
                        <li><a class="text-light mt-5"  href="{{url('home')}}"> Home </a></li>
                        <li><a class="text-light mt-5" href="{{url('atlete')}}"> atlete </a></li>
                        <li><a class="text-light mt-5" href="{{url('employee')}}"> emlpoyee </a></li>
                        <li><a class="text-light mt-5" href="{{url('payment')}}"> payment </a></li>
                        <li><a class="text-light mt-5" href="{{url('settings')}}"> setting </a></li>
                     </ul> <br> </div></div>
            <div class="col-md-10 col-sm-8 main-content">
            <!--Main content code to be written here --> 
            @yield('nav')
             </div>
    </div>
</body>    
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Menu with sub-menu | CodingNepal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.btnn{
  position: absolute;
  top: 15px;
  left: 45px;
  height: 45px;
  width: 45px;
  text-align: center;
  background: #1b1b1b;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn.click{
  left: 260px;
}
.btn span{
  color: white;
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: cyan;
  background: #1e1e1e;
  border-left-color: cyan;
}
nav ul li a:hover{
  background: #1e1e1e;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;}
.content p{
  font-size: 30px;
  font-weight: 500;
}

</style>  
</head>
  <body> <div class="row">
        <div class="col-lg-3">
   
   
    <nav class="fixed-left fixed">
      
      <ul>
        <li class="active"><a href="#">Dashboard</a></li>
        <li>
          <a href="#" class="feat-btn">Features
           
          </a>
        </li>
        <li>
          <a href="#" class="serv-btn">Services
          </a>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Overview</a></li>
        <li><a href="#">Shortcuts</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
</div>
<div class="col-lg-9">
    <div>
      @yield('nav')
    </div>
 </div></div>
  

  </body>
</html> --}}
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
html {

	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
body {
	margin: 0;
}

html, body {
	width: 100%;
	height: 100%
}
article, aside, details, figcaption, figure, footer, header, main, menu, nav, section, summary {
	display: block;
}
audio, canvas, progress, video {
	display: inline-block;
	vertical-align: baseline;
}
audio:not([controls]) {
	display: none;
	height: 0;
}

a {
	background-color: transparent;
	text-decoration: none;
}
a:active, a:hover {
	outline: 0;
}

h1,h2,h3,h4,h5,h6,p,ul,ol{ margin:0px; padding:0px;}


/***********************  TOP Bar ********************/
.sidebar{ width:220px; height: 100%; background-color:#222; transition: all 0.5s  ease-in-out; }
.bg-defoult{background-color:#222;}
.bg{background-color:#222; width:220px;}
.sidebar ul{ list-style:none; margin:0px; padding:0px; }
.sidebar li a,.sidebar li a.collapsed.active{ display:block; padding:8px 12px; color:#fff;border-left:0px solid #dedede;  text-decoration:none}
.sidebar li a.active{background-color:#000;border-left:5px solid #dedede; transition: all 0.5s  ease-in-out}
.sidebar li a:hover{background-color:#000 !important;}
.sidebar li a i{ padding-right:5px;}

    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}

.sub-menu{ border-left:5px solid #dedede;}
	.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}
	

	.sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
	.sidebar.fliph {
    width: 42px;transition: all 0.5s  ease-in-out;
   
}
	
.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: absolute;
    left: 39px;
    top: 0;
    background-color: #222;
    width: 150px;
    z-index: 100;
}
	
</style>
</head>
<body>
    
<div class="row">
    <div class="col-lg-3">

    
<button class="bg text-light"> <i class="fa fa fa-th-large" >X</i></button>
  
<div class="sidebar left ">
  <ul class="list-sidebar bg-defoult ">
  
    <li class="p-2  pt-5"> <a href="{{url('home')}}"><i class="fa fa-home"></i> <span class="nav-label">HOME</span></a> </li>
    <li class="p-2 pt-5"> <a href="{{url('atlete')}}"><i class="fa fa-table"></i> <span class="nav-label">ATHLETE</span></a> </li>
    <li class="p-2 pt-5"> <a href="{{url('employee')}}"><i class="fa fa-male"></i> <span class="nav-label">EMPLOYEES</span></a> </li>
    <li class="p-2 pt-5"> <a href="{{url('payment')}}"><i class="fa fa-diamond"></i><span class="nav-label">PAYMENT</span></a> </li>
    <li class="p-2 pt-5"> <a href="{{url('settings')}}"><i class="fa fa-cog"></i> <span class="nav-label">SETTINGS</span></a> </li>
  </ul>
</div>
    </div>
    <div class="col-lg-9">
<div>
    @yield('nav')
</div></div></div>
<script>
    $(document).ready(function(){
   $('button').click(function(){
       $('.sidebar').toggleClass('fliph');
   });
  
  
   
});
</script>
</body>
</html>