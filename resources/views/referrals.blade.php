@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9 content">
            <h2 class="text-center">Bantu Penulis</h2>
            {{-- <br/>
            <p>Yuk bantu penulis mengembangkan website ini dengan cara donasi atau memakai kode referral di bawah ini :</p> --}}
            <h3>Daftar Kode Referral</h3>
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
