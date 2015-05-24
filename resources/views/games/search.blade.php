 @extends('main')

 @section('search')
     <section class="content">
         @include('partials.endsearch')
         <!-- search-combox end -->
         <!-- List begin -->
         <h2 class="title">Search results</h2>
         <div class="list-wrap">
            <ul class="list">
             @include('partials.list', ['games' => $games])
            </ul>
         </div>
         <!-- List end -->
     </section>
     {!! with(new \App\Pagination\AcmesPresenter($games))->render() !!}
 @stop

