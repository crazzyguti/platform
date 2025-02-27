@forelse($results as $group)

    @empty(!$group['label'])
        <div class="hidden-folded padder m-t-xs m-b-xs text-muted text-xs">{{$group['label']}}</div>
    @endempty

    @foreach($group['result'] as $item)
        <a href="{{$item->searchUrl()}}" class="block wrapper-sm dropdown-item" style="font-size: 0.82857rem;">

            @empty(!$item->searchAvatar())
                <span class="pull-left thumb-xs avatar m-r-sm">
                  <img src="{{$item->searchAvatar()}}" alt="{{$item->searchTitle()}}">
                  {{-- <i class="on b-white bottom"></i> --}}
                </span>
            @endempty

            <span class="clear">
                <span class="text-ellipsis">{{$item->searchTitle()}}</span>
                <small class="text-muted clear text-ellipsis">
                    {{$item->searchSubTitle()}}
                </small>
            </span>
        </a>
    @endforeach

    @empty

        <p class="ml-3 mr-3 mb-0 text-center">
            {{ __('There are no records in this view.') }}
        </p>

@endforelse


@if($total >= 5)

    <a href="{{ route('platform.search', $query) }}" class="block wrapper-sm dropdown-item b-t pb-1">
        <span class="small pl-1">
            {{ __('See more results.') }}
            <span class="text-muted">({{ $total }})</span>
        </span>
    </a>

@endif