<div class="card mt-3">
    <div class="card-header">
        <p class="font-weight-light font-weight-bold p-2">
            {{ __('sidebar.fortress.title') }}
        </p>
    </div>
    <div class="card-body">
        <ul class="list-group list-unstyled small py-1 pl-1">
            @forelse($SiegeFortressProvider as $fortress)
                <li class="pb-1">
                    <span class="pull-left">
                        <img src="/image/sro/etc/{{ $fortress->FortressImage }}" class="img-fluid img-rounded"
                             loading="lazy" style="max-width: 20px"/>
                    </span>
                    {{ $fortress->FortressName }}
                    <span class="float-right small pt-1 pr-2">
                        @if($fortress->getGuildName)
                            {{ $fortress->getGuildName->Name }}
                        @else
                            {{ __('sidebar.fortress.unknown') }}
                        @endif
                    </span>
                </li>
            @empty
                {{ __('sidebar.fortress.empty') }}
            @endforelse
        </ul>
    </div>
    
</div>