<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sameday|Autoshipping</title>
        
        {!! HTML::style('bootstrap/css/bootstrap.min.css')  !!}
        {!! HTML::style('font-awesome/css/font-awesome.min.css')  !!}
        {!! HTML::style('css/local.css')  !!}
    

  
      {!! HTML::script('js/jquery-1.10.2.min.js') !!}
      {!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
        @yield('head')
    </head>
    <body>
       
     <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="{{url('sameday/viewcar')}}"><i class="fa fa-bullseye"></i> View Cars</a></li>
                    <li><a href="{{url('sameday/addcar')}}"><i class="fa fa-tasks"></i> Add Car Details</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Same Day Autoshipping Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
        </nav>
         <div id="page-wrapper">
              @if(Session::has('message'))
             <div class="row">
                 <div class="col-lg-12">
                     <div class="alert alert-dismissable alert-warning">
                         <button data-dismiss="alert" class="close" type="button">&times;</button>
                       {{Session::get('message')}}
                         <br />
                     </div>
                 </div>
             </div>
              @endif
             <div class="row">
             @yield('main')
             
             </div>
             
         </div>
         
         

     </div>




        <footer>
            <div>
                <p><center>&copy; 2016 samedayautoshipping</center></p>
            </div>
        </footer>
    </body>
</html>
