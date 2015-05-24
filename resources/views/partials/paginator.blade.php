<div class="pages">
    @if ($games->currentPage > 1)
    <a href="{{ url('android-apps-', ($game->currentPage - 1)) }}" class="prev j-press">Prev</a>
    @endif
    <div class="num">{{ $games->currentPage  }}/{{$games->total}}</div>
     @if ($games->currentPage < $games->total)
    <a href="{{ url('android-apps-', ($game->currentPage + 1)) }}" class="next j-press">Next</a>
    @endif
</div>