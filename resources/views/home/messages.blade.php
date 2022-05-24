@extends('layouts.apphome')

@section('content')

    <h3>Messages</h3>

    <div class="row">
                <div class="col-md-8">
                    <p><i class="glyphicon glyphicon-envelope"></i><strong> E-mail: </strong><a href=""> </a></p>
                    <p><i class="glyphicon glyphicon-earphone"></i><strong> Teléfono: </strong> </p>
                    <p><i class="glyphicon glyphicon-phone"></i><strong> Móvil: </strong> </p>
                    <p><i class="glyphicon glyphicon-briefcase"></i><strong> Nº seguridad social: </strong>  </p>
                </div>

                <div class="col-md-4">
                    <p><i class="glyphicon glyphicon-map-marker"></i><strong> Dirección</strong></p>
                    <hr>
                    <address>
                        Kalea<br>
                        20100, Errenteria, Gipuzkoa<br>
                    </address>
                </div>

            </div> <!-- row -->
@endsection
