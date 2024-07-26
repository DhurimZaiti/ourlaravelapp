<x-profile :sharedData="$sharedData">
  <div class="list-group">
    @foreach($followers as $follow)
      <a href="/profile/{{$follow->userDoingTheFollowing->username}}" class="list-group-item list-group-item-action">
          <img class="avatar-tiny" src="{{$follow->userDoingTheFollowing->avatar ?? '/path/to/default/avatar.png'}}" alt="User avatar" />
        {{ $follow->userDoingTheFollowing->username }}
      </a>
    @endforeach
  </div>
</x-profile>
