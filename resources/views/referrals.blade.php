@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2 class="text-center">Daftar Kode Referral</h2>
            <br/>
            <p>
                Berikut adalah beberapa kode referral saya, yang jika digunakan saat registrasi bisa mendapatkan bonus. Sebelum digunakan, mohon perhatikan syarat ketentuan dan periode promo pada masing-masing platform atau lihat di beberapa artikel yang telah saya tulis.
            </p>
            <ul>
            @forelse ($referrals as $ref)
                <li> <a target="_blank" href="{{$ref->link}}">{{$ref->name}}</a> : {{$ref->referral_code}}</li>
            @empty
                <span>Belum ada data</span>
            @endforelse
            </ul>
            <p></p>
        </div>
        <div class="col">
        </div>
    </div>
</div>
@include('layout.footer')
