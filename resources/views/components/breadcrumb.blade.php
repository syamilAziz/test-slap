<?php $url = Request::path();?>
<div class="col-md-12">
    <ol class="breadcrumb">
    @if ($url == 'admin/home')
        <li class="active">Dashboard</li>
    @elseif ($url == 'admin/kvdt')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kvdt</li>
    @elseif ($url == 'admin/lumut')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Lumut</li>        
    @elseif ($url == 'admin/prai')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Prai</li>  
    @elseif ($url == 'admin/langkawi')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Langkawi</li>  
    @elseif ($url == 'admin/kuantan')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kuantan</li>
    @elseif ($url == 'admin/kerteh')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kerteh</li>
    @elseif ($url == 'admin/melaka')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Melaka</li>    
    @elseif ($url == 'admin/pasirgudang')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Pasir Gudang</li>                
    @elseif ($url == 'admin/roadtanker')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Roadtanker</li>
    @elseif ($url == 'admin/create')
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.pages.roadtanker') }}">Roadtanker</a></li>
        <li class="active">Create Roadtanker</li>
    @elseif ($url == 'admin/upload')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.pages.roadtanker') }}">Roadtanker</a></li>
        <li class="active">Upload Roadtanker</li>
    @endif
    </ol>
</div>