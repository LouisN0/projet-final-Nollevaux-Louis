@extends("back.layouts.app")
@section("content")

    <div class="page-heading">
        <h3>Page Admin </h3>
    </div>
    <div class="page-content">
        <h1> page admin</h1>
        <div class="bg-light">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            

            {{-- <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form class='btn btn-warning' method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </div>
                </form>
                <a href="{{ route("logout") }}">Log out</a>
            </div> --}}
        </div>
    </div>

@endsection
