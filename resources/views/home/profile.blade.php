@extends('layouts.apphome')

@section('content')


            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                    Perfil completado al 62%
                </div>
            </div>
            <br/>
            <div class="page-header">
                <h4><i class="glyphicon glyphicon-user"></i>
                    Arantxa Juanena Mariezkurrena (15972132N)                    </h4>
            </div>

            <div class="row">
                <div class="col-md-4">
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

                <div class="col-md-4">
                        <p><i class="glyphicon glyphicon-briefcase"></i><strong> Empresa</strong></p>
                        <hr>
                        C.I.F.P. DON BOSCO LHII ( S4833001C )<br>
                        943510450<br>
                                        </div>
            </div> <!-- row -->
            <br/>

            
            

            <div class="page-header">
                <h4><i class="glyphicon glyphicon-book"></i> Cursos terminados</h4>
            </div>
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre del curso</th>
                        <th>Fin</th>
                        <th>Estado</th>
                        <th>Opt</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td>EEL 19 16-17</td>
                        <td>
                            <a href="/curso/1164/info" target="_blank">
                               DISEÑO, ESCANEADO E IMPRESIÓN 3D. IKASLAB <b>()</b>                            </a>
                        </td>
                        <td>17/10/2016</td>
                        <td>
                            <span class="label label-info">Finalizado</span>&nbsp;<span class="label label-danger">No acreditable</span>                        </td>
                        <td>
                            <a class="btn btn-xs btn-default" href="/curso/1164/encuesta">Encuesta</a>                        </td>
                    </tr>
                                        <tr>
                        <td>ELEQ0005OV 18-19</td>
                        <td>
                            <a href="/curso/1463/info" target="_blank">
                               INICIACIÓN A RAPSBERRY PI                            </a>
                        </td>
                        <td>27/01/2020</td>
                        <td>
                            <span class="label label-info">Finalizado</span>&nbsp;<span class="label label-danger">No acreditable</span>                        </td>
                        <td>
                            <a class="btn btn-xs btn-default" href="/curso/1463/encuesta">Encuesta</a>                        </td>
                    </tr>
                                        <tr>
                        <td>ELEQ0006OV 18-19</td>
                        <td>
                            <a href="/curso/1464/info" target="_blank">
                               INICIACIÓN A ARDUINO                            </a>
                        </td>
                        <td>14/01/2019</td>
                        <td>
                            <span class="label label-info">Finalizado</span>&nbsp;<span class="label label-danger">No acreditable</span>                        </td>
                        <td>
                            <a class="btn btn-xs btn-default" href="/curso/1464/encuesta">Encuesta</a>                        </td>
                    </tr>
                                    </tbody>
            </table>
            




@endsection
