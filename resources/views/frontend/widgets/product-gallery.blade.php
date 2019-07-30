<section class="ftco-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                <h2 class="mb-4">Follow Us On Facebook</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            @foreach($dssp as $sp)
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="{{asset('storage/photos/'. $sp->sp_hinh)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('storage/photos/'. $sp->sp_hinh)}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>