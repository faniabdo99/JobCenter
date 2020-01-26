@php

@endphp
<div class="blog_pagination_section jb_cover">
    <ul>
        @if($paginator->currentPage()!=1)
        <li><a href="{{$paginator->previousPageUrl()}}" class="prev"> <i class="flaticon-left-arrow"></i> </a></li>
        @endif
        <li class="third_pagger"><a href="#">{{$paginator->currentPage()}} / {{$paginator->lastPage()}}</a></li>
        @if($paginator->currentPage()!=$paginator->lastPage())
        <li><a href="{{$paginator->nextPageUrl()	}}" class="next"> <i class="flaticon-right-arrow"></i> </a></li>
      @endif
    </ul>
</div>
