@include('inc.head')
@include('inc.navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col-12 mb-5 text-left">
            <span class="d-inline-block bg-info py-3 px-5 text-white"> Ati trimis firmei noastre mesajul: </span>
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-3 text-center">
            <strong> Nume: </strong>
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->nume }}
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-3 text-center">
            <strong> Email: </strong>
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->email }}
        </div>
    </div>
    @if($mesaj->firma)
        <div class="row">
            <div class="col-5 p-3 text-center">
                <strong> Firma: </strong>
            </div>
            <div class="col-7 p-3 mesaj_salvat border-bottom-1">
                {{ $mesaj->firma }}
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-5 p-3 text-center">
            <strong> Telefon: </strong> 
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->telefon }} (o sa va contactam)
        </div>
    </div>
    <div class="row">
        <div class="col-5 p-3 text-center">
            <strong> Mesaj: </strong> 
        </div>
        <div class="col-7 p-3 mesaj_salvat border-bottom-1">
            {{ $mesaj->mesaj }}
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 mb-5 text-left">
            <span class="d-inline-block bg-info py-3 px-5 text-white"> Va Multumim </span>
        </div>
    </div>
</div>



