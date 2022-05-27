@include('layout.header')
<div class="container-fluid" id='content'>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2 class="text-center">Selamat datang di Sarimukti!</h2>
            <br/>
            <br/>
            <h3>Tulisan Terbaru</h3>
            <ul>
            @forelse ($articles as $article)
                <li><a href="#">{{$article->title}}</a></li>
            @empty
            Belum ada tulisan
            @endforelse
            </ul>
            <br/>
            <br/>
            <h3>Punya saran?</h3>
            <div class="form">
            <form id="send_mail">
                <div class="row">
                    <div class="col-12">Nama</div>
                    <div class="col-12"><input required pattern="\S(.*\S)?" id="name" class="form-control input-sm" type="text" name="name"></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-12">Email</div>
                    <div class="col-12"><input required pattern="\S(.*\S)?" class="form-control input-sm" id="email" type="email" name="email"></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-12">Pesan</div>
                    <div class="col-12"><textarea required class="form-control input-sm" rows="4" cols="50" id="message" name="message"></textarea></div>
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


<script>
      $(".btn-success").on("click", function() {
        $.ajax({
            url: '/email',
            type : 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                name:$('#name').val(),
                message:$('#message').val(),
                email:$('#email').val(),
            },
            success: function(data) {
                console.log(data);
                alert(data.message);
            },
            error: function(data) {
                alert('Gagal mengirim pesan');
            }
        });
    });
</script>

@include('layout.footer')
