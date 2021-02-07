<div>
    @if(session()->has('message'))
        <div class="alert-success">{{session('message')}}</div>
    @endif
    <div class="entity_comments">
        <div class="entity_inner__title header_black">
            <h2>Add a Comment</h2>
        </div>
        <!--Entity Title -->

        <div class="entity_comment_from">
            <form wire:submit.prevent="store">
                @csrf
                <div class="form-group">
                    <input wire:model="subject" type="text" class="form-control" placeholder="Subject">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group comment">
                    <textarea wire:model="review" class="form-control" id="inputComment" placeholder="Comment"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="entity_rating">
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                    <input type="radio" id="star5" wire:model="rate" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" wire:model="rate" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" wire:model="rate" value="5" /><label for="star3"></label>
                    <input type="radio" id="star2" wire:model="rate" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" wire:model="rate" value="1" /><label for="star1"></label>

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-full"></i>
                </div>
                @auth
                <button type="submit" class="btn btn-submit red">Submit</button>
                @else
                    <button href="/login" class="btn btn-submit red">Yorum yapmak iiçin oturum aç</button>
                @endauth
            </form>
        </div>
        <!--Entity Comments From -->

    </div>
</div>
