
    <section id="photos">
        @foreach($songs as $p)
        <div class="photos-content">
            <img src="{{ $p -> url }}" alt="photo1" class="img-photo-content">
            <h2 class="title-img">{{ $p->title }}

            @auth 

                @if($p->user->id == auth::id())
                    <form action="/songs/{{$p->id}}" method="post">
                        <input class="btn btn-default" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                @endif
            @endauth
            </h2>
            <p class="user-img"><a href="/user/{{$p->user->id}}">{{ $p->user->name }}</a></p>

        </div>
        @endforeach

    </section>