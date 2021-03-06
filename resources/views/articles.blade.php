@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2 class="text-center">Daftar Tulisan</h2>
            <br/>
            <div class="container">
            @forelse ($articles as $article)
            <div class="row" style="border: 1px solid black; border-radius: 5px; padding: 5px">
                    <div class="col-6">
                        <a href="{{url('/article')}}/{{\Crypt::encryptString($article->id)}}">
                            @if($article->image)
                                <img src="{{$article->image}}"  class="img-fluid" style="min-width: 80px" alt="{{$article->title}}">
                            @else
                                <img src="{{env('PUBLIC_FOLDER')}}/sarimukti_logo.png"  class="img-fluid" style="min-width: 80px" alt="Sarimukti">
                            @endif
                        </a>
                        <span>diunggah tanggal {{date('d F Y',strtotime($article->created_at))}} </span>
                    </div>
                    <div class="col-6">
                        <h3>{{$article->title}}</h3>
                        <p>
                            {{ strlen($article->content) > 200 ? substr($article->content,0,200)."..." : $article->content; }}</a>
                        </p>
                        <a href="{{url('/article')}}/{{\Crypt::encryptString($article->id)}}"> Selengkapnya</a>
                    </div>
            </div>
            <br/>
            @empty
                <span>Tulisan tidak ditemukan</span>
            @endforelse
            {{ $articles->links() }}
            </div>
            <p></p>
        </div>
        <div class="col">
        </div>
    </div>
</div>
@include('layout.footer')
