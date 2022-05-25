@include('layout.header')
<div class="container-fluid" id='content'>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2>Selamat datang di Sarimukti!</h2>
            <br/>
            <p>Halo! Selamat menjelajah!</p>
            <br/>
            <br/>
            <h3 class="text-center">Tulisan Terbaru</h3>
            <ul>
            @forelse ($articles as $article)
                <li><a href="#">{{$article->title}}</a></li>
            @empty
            <p>Belum ada data</p>
            @endforelse
            </ul>
            <br/>
            <br/>
            <h3 class="text-center">Punya saran?</h3>
            <div class="form">
            <form action="{{url('/email')}}" method="post">
                @csrf <!-- {{ csrf_field() }} -->
                <br/>
                <div class="row">
                    <div class="col-12">Nama</div>
                    <div class="col-12"><input required pattern="\S(.*\S)?" class="form-control input-sm" type="text" name="name"></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-12">Email</div>
                    <div class="col-12"><input required pattern="\S(.*\S)?" class="form-control input-sm" type="email" name="email"></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-12">Pesan</div>
                    <div class="col-12"><textarea required class="form-control input-sm" rows="4" cols="50" name="message"></textarea></div>
                </div>
                <br/>
                <button class="btn btn-success" type="submit">Kirim</button>
            </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>
@include('layout.footer')
