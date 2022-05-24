<!DOCTYPE html>
<html lang="es">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>


        @include('layouts.partials.navbar')		

        <div class="mainhome">
            <div class="row">
                <div class="col-md-2">                	
                    @include ('layouts.partials.navbar_home')
                </div>
                <div class="col-md-10">
                    @yield('content') 
                </div>
            </div>
        </div>

        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>