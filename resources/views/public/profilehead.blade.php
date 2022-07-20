<div class="row mb-4">
    <div class="col-lg-6">
        <div class="profile-card">
                @if (substr( $user->avatar, 0, 4 ) === "http")
                <img class="profile-card-photo" src=" {{ $user->avatar }} ">
                @else
                <img class="profile-card-photo" src="{{ url('/images/' . $user->avatar) }}">
                @endif
        </div>
        <div class="profile-card pt-5">
            <h1 class="header-title">{{ $user->name }}</h1>
            <h6>
                {{ $user->username }}
                @isset($user->role)
                <i class="icon-patch-check-fill text-primary verficon" title="@lang('messages.new.verified')"></i>
                @endisset
                @isset($user->role)
                    <span class="text-warning ms-2">@lang($user->role)</span>
                @endisset
            </h6>
            <h6>
                <span class="ms-2">@lang('messages.new.totalposts') </span>
                <span class="badge bg-secondary">{{ shortNumber($user->posts()->count()) }}</span>
            </h6>
        </div>
    </div>
    <div class="col-lg-4 pt-lg-3">
        {{--  --}}
    </div>
    <div class="col-lg-2 pt-lg-5 mt-3">
    @if (auth()->check())
        @if (auth()->id() == $user->id)
        <div class="d-grid gap-1 col-6 col-lg-12 mx-auto">
            <a href="{{ url('/profile/' . $user->username . '/edit/') }}" role="button" class="btn btn-arrow border-one">@lang('messages.user.edit_profile')</a>
        </div>
        @else
            @if (auth()->user()->following($user))
            <div class="flwid d-grid gap-1 col-6 col-lg-12 mx-auto">
                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                <button type="button" class="btn btn-secondary border-one" onclick="follow(this)">@lang('messages.new.unfollow')</button>
            </div>
            @else
            <div class="flwid d-grid gap-1 col-6 col-lg-12 mx-auto">
                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                <button type="button" class="btn btn-arrow border-one" onclick="follow(this)">@lang('messages.new.follow')</button>
            </div>                        
            @endif
        @endif
    @endif      
    </div>
</div>