<?php $url = Request::path();?>
<div class="col-md-3">

    @if ($url == 'haulier/home')
    <div class="list-group">
        <a href="{{ route('haulier.home') }}" class="list-group-item active">Dashboard</a>
        <a href="{{ route('haulier.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('haulier.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('haulier.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('haulier.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('haulier.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('haulier.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('haulier.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('haulier.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('haulier.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @endif