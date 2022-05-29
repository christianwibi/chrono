@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            @if($article)
            <div class="container">
                <div class="col-12 text-center">
                    @if($article->image)
                        <img src="{{env('PUBLIC_FOLDER')}}/{{env('ARTICLE_FOLDER')}}/{{$article->image}}"  class="img-fluid" alt="{{$article->title}}">
                    @endif
                </div>
                <div class="col-12">
                    <h3>{{$article->title}}</h3>
                </div>
                <div class="col-12 text-right">
                    <span>diunggah tanggal {{date('d F Y',strtotime($article->created_at))}} oleh {{$article->user->name}}</span>
                </div>
                <div class="col-12">
                    <br/>
                    <br/>
                    <p>
                        {{ $article->content }}
                    </p>
                </div>
                {{-- <div class="col-12">
                    <br/>
                    <br/>
                    Yuk bantu penulis mengembangkan website ini dengan cara donasi atau memakai kode referral <a href="{{route('referrals')}}">di sini</a>
                </div> --}}
            </div>
            <br/>
            @endif
        </div>
        <div class="col">
        </div>
    </div>
</div>
@include('layout.footer')
