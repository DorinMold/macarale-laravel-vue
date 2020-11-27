@extends('master')
@section('continut')
@php 
    $servicii = [ "Extractii miniere" , "Servicii mutari", "Rasucire militara", "Mmmmmmmmmmmm"];
    $servcount = count($servicii);
@endphp
<div class="row servicii">
    <div id="section-servicii" class="col-md-6 pt-md-5 pb-md-3">
        <section class="section-servicii">
            <div class="div-servicii">
                <h1 class="text-center py-4 pl-5 position-relative"> <span> Servicii </span> <i class="fa fa-arrow-right float-right d-none d-md-block"></i> </h1>
                <ul class="pt-4 mb-3 mb-md-0"> 
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Mutam orice fel de echipament </span></li>
                    <div> </div>
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Transportam orice fel de echipament</span></li>
                    <div> </div>
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Avem macarale care pot ridica 60t</span></li>
                    <div> </div>
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Mutam orice fel de echipament</span></li>
                    <div> </div>
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Transportam orice fel de echipament</span></li>
                    <div> </div>
                    <li class="py-4"><i class="fa fa-bullseye"></i><span>Avem macarale care pot ridica 60t</span></li>
                    <div> </div>
                    
                </ul>
                <div class="d-sm-block mt-5 mt-md-0 d-md-none text-center"> <i class="fa fa-arrow-down"> </i> </div>
                </div>
            @include('partials.servdetails',['servicii' => $servicii])
        </section>
    </div>
    <div class="col-md-6 p-md-5 div-servicii">
        <div class="mt-4">
            <h4 class="text-center mb-5"> Macarale cu care putem raspunde solicitarilor: </h4>
        </div>
        <div class="ml-5 mt-md-5 pt-md-5 servicii-lista">
        @foreach ($servicii as $serviciu) 
        <p><i class="fa fa-star-of-life"></i> &nbsp; {{ $serviciu }} &nbsp; <a href="#section-servicii" class="btn btn-sm btn-success">  Mai Mult </a> </p>
        @endforeach
        </div>
    </div>
</div>
<div class="row">

</div>
@endsection
