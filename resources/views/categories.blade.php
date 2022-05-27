@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2 class="text-center">Kategori</h2>
            <br/>
            <div class="row">
            @forelse ($categories as $category)
                <div class="col-3 text-center"> <a href="#"> {{$category->name}}</a></div>
            @empty
                <span>Belum ada data</span>
            @endforelse
            </div>
            <p></p>
        </div>
        <div class="col">
        </div>
    </div>
</div>
@include('layout.footer')
