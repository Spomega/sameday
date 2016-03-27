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

        @yield('head')
    </head>
    <body>
        @if(Session::has('message'))
        <div class="container">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success!</strong> {{Session::get('message')}}
            </div>
        </div>
        @endif

        <div class="container">    
            @yield('main')

        </div>




        <footer>
            <div>
                <p><center>&copy; 2016 samedayautoshipping</center></p>
            </div>
        </footer>
    </body>
</html>
