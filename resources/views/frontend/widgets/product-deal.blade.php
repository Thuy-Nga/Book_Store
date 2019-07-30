<section class="ftco-section ftco-deal bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/photos/' . $deal_of[0]->sp_hinh) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="heading-section heading-section-white">
                    <span class="subheading">Deal of the month</span>
                    <h2 class="mb-3">Deal of the month</h2>
                </div>
                <div id="timer" class="d-flex mb-4">
                    <div class="time" id="days"></div>
                    <div class="time pl-4" id="hours"></div>
                    <div class="time pl-4" id="minutes"></div>
                    <div class="time pl-4" id="seconds"></div>
                </div>
                <div class="text-deal">
                    <h2><a href="#">{{ $deal_of[0]->sp_ten }}</a></h2>
                    <p class="price"><span class="mr-2 price-dc">{{ $deal_of[0]->sp_gia }}</span><span class="price-sale">{{ ( $deal_of[0]->sp_gia - $deal_of[0]->sp_giamgia) }}</span></p>
                    <ul class="thumb-deal d-flex mt-4">
                        @foreach($dssp as $sp)
                        @if($loop->index < 3)
                        <li class="img" style="background-image: url({{asset('storage/photos/' . $sp->sp_hinh)}});"></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>