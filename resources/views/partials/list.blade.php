        @foreach($games as $game)
            <li class="item">
                <a class="inner j-press" href="{{url('android-'.$game->type.'/'. $game->slug)}}">
                    <div class="pic">
                        <img class="" src="{{ url('images/avatars', $game->icon) }}" alt="icon">
                    </div>
                    <div class="info">
                        <p class="name">{{ $game->title }}</p>

                        <div class="mid">
                            <span class="star-small s9"></span>
                            <span>(2916)</span>
                        </div>
                        <p class="other">
                            <span class="type">{{ $game->category->name }}</span>
                            <span class="sp">|</span>
                            <span class="size">{{ $game->total }}</span>
                        </p>
                    </div>
                </a>
                <a class="btn-download j-press"  href="{{ url('download-free', $game->slug) }}">Download</a>
            </li>
        @endforeach


