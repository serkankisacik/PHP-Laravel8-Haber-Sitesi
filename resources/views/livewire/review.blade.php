    @if(session()->has('message'))
        <div class="alert-success">{{session('message')}}</div>
    @endif
            <form wire:submit.prevent="store">
                @csrf
                <div class="form-group">
                    <input wire:model="subject" type="text" class="form-control" placeholder="Konu">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group comment">
                    <textarea wire:model="review" class="form-control" id="inputComment" placeholder="Yorum"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="entity_rating">
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                    <input type="radio" id="star5" wire:model="rate" value="5" /><i for="star5" class="fa fa-star"></i>
                    <input type="radio" id="star4" wire:model="rate" value="4" /><label for="star4"></label><i class="fa fa-star"></i>
                    <input type="radio" id="star3" wire:model="rate" value="5" /><label for="star3"></label><i class="fa fa-star"></i>
                    <input type="radio" id="star2" wire:model="rate" value="2" /><label for="star2"></label><i class="fa fa-star"></i>
                    <input type="radio" id="star1" wire:model="rate" value="1" /><label for="star1"></label><i class="fa fa-star-half-full"></i>

                </div>
                @auth
                <input type="submit" class="btn" value="Gönder">
                @else
                    <button disabled href="/login" class="btn btn-submit red">Yorum yapmak için oturum aç</button>
                @endauth
            </form>
