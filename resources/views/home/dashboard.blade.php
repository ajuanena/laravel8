@extends('layouts.apphome')

@section('content')

<!-- xs (teléfonos), sm (tabletas), md (computadoras de escritorio) y lg (computadoras de escritorio más grandes) -->
<!-- Padding y marging

Significados
m = margin
p = padding
t = top
b = bottom
l = left
r = right
x = left y right
y = top y bottom
 -->



<button id="btn-click" type="button" class="btn btn-primary">Click me!</button>

<div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div  class="card h-100">
                        <img class="card-img-top" src="img/projects/30.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title"><span class="badge badge-secondary badge-pill">EGUNA</span></h3>
                            <p class="card-text"><h4>Izena</h4></p>
                            <p class="card-text">Laburoena</p>          
                        </div>
                        <div class="card-footer">
                            <span class="float-left"><a class=" btn-light rounded-circle "><i class="fa fa-info-circle"></i>Info</a></span> 
                            <span class="float-right">
                                <a href="#" class=" btn-light rounded-circle" id="1"><i class="fa fa-user-plus"></i>Izena eman</a>
                            </span> <br> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/projects/30-h200.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title"><span class="badge badge-secondary badge-pill">EGUNA</span></h3>
                            <p class="card-text"><h4>Izena</h4></p>
                            <p class="card-text">Laburoena</p>          
                        </div>
                        <div class="card-footer">
                            <span class="float-left"><a class=" btn-light rounded-circle "><i class="fa fa-info-circle"></i>Info</a></span> 
                            <span class="float-right">
                                <a href="#" class=" btn-light rounded-circle"><i class="fa fa-user-plus"></i>@Lang('Izena eman')</a>
                            </span> <br> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/projects/30.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title"><span class="badge badge-secondary badge-pill">EGUNA</span></h3>
                            <p class="card-text"><h4>Izena</h4></p>
                            <p class="card-text">Laburoena</p>          
                        </div>
                        <div class="card-footer">
                            <span class="float-left"><a class=" btn-light rounded-circle "><i class="fa fa-info-circle"></i>Info</a></span> 
                            <span class="float-right">
                                <a href="#" class=" btn-light rounded-circle"><i class="fa fa-user-plus"></i>@Lang('Izena eman')</a>
                            </span> <br> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/projects/30.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title"><span class="badge badge-secondary badge-pill">EGUNA</span></h3>
                            <p class="card-text"><h4>Izena</h4></p>
                            <p class="card-text">Laburoena</p>          
                        </div>
                        <div class="card-footer">
                            <span class="float-left"><a class=" btn-light rounded-circle "><i class="fa fa-info-circle"></i>Info</a></span> 
                            <span class="float-right">
                                <a href="#" class=" btn-light rounded-circle"><i class="fa fa-user-plus"></i>@Lang('Izena eman')</a>
                            </span> <br> 
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>



@endsection

@push('scripts')
<script>
    $(function() {
        console.log( "ready!" );
        /*Cambiar el texto del botón de actualización y agregar un ajax loader image cuando se le da clic*/
        $('#btn-click-one').click(function() {
                $.post( "ajax/test.html", function( data ) {
                    $( ".result" ).html( data );
                });
                $('#btn-click').html(' Click! ');
                //$('#btn-click').attr("disabled", true).html(' Actualizando ... espere ...');
                // $(this).parents('form').submit();
            });

        //Post JQuery
        $("#btn-click").click(function(){
            
        });
    });

</script>
@endpush