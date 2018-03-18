<?php $route = Request::path();?>
<div class="col-md-3">

     @if (Auth::guard('admin')->check())
    @if ($route == 'admin/home')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item active">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge"></span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/kvdt')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item active">KVDT<span class="badge">{{ $kvdt }}</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai <span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/lumut')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item active">Lumut<span class="badge">{{ $lumut }}</span></a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/prai')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item active">Prai <span class="badge">{{ $prai }}</span></a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/langkawi')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item active">Langkawi<span class="badge">{{ $langkawi }}</span></a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/kuantan')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item active">Kuantan<span class="badge">{{ $kuantan }}</span></a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/kerteh')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item active">Kerteh<span class="badge">{{ $kerteh }}</span></a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/melaka')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item active">Melaka<span class="badge">{{ $melaka }}</span></a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/pasirgudang')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item active">Pasir Gudang<span class="badge">{{ $pasirgudang }}</span></a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'admin/roadtanker')
    <div class="list-group">
        <a href="{{ route('admin.home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('admin.terminal.kvdt') }}" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="{{ route('admin.terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('admin.terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="{{ route('admin.terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('admin.terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('admin.terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('admin.terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('admin.terminal.pasirgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('admin.pages.roadtanker') }}" class="list-group-item active">Roadtanker</a>
    </div>
    @endif
@endif
</div>