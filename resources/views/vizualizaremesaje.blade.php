@include('inc.head')

<form method="GET" action="{{ url('/filtrareMesaje') }}" class="form-group container">
    {{ csrf_field() }}
    <input type="text" name="filtru" class="form-control my-4">
    <button type="submit" class="form-control btn-warning"> Cauta </button>
</form>

@foreach ($mesaje as $mesaj)

<div class="container">
    <div class="row mt-5">
        <div class="col-12 mb-5 text-left">
            <span class="d-block bg-info py-2 px-5 text-center text-white"> Mesaj {{ $mesaj->created_at->format('d M Y') }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-2 text-center">
            <strong> Nume: </strong>
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->nume }}
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-2 text-center">
            <strong> Email: </strong>
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->email }}
        </div>
    </div>
    @if($mesaj->firma)
        <div class="row">
            <div class="col-5 p-2 text-center">
                <strong> Firma: </strong>
            </div>
            <div class="col-7 p-2 mesaj_salvat border-bottom-1">
                {{ $mesaj->firma }}
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-5 p-2 text-center">
            <strong> Telefon: </strong> 
        </div>
        <div class="col-7 p-2 mesaj_salvat border-bottom-1">
            {{ $mesaj->telefon }} (o sa va contactam)
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-2 text-center">
            <strong> Mesaj: </strong> 
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->mesaj }}
        </div>
    </div>
</div>

@endforeach




