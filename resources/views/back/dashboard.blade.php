@extends("back.layouts.app")
@section("content")

    <div class="page-heading">
        <h3>Page Admin </h3>
    </div>
    <div class="page-content">
        <h1> page admin</h1>
        <div class="bg-light">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->nom }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class='mt-5'>
            @if(Auth::user()->role_id == 4)
                <h1>My courses</h1>
                <ul>
                    @foreach($usercour as $cour)
                    <li>{{ $cour->titre }}</li>
                @endforeach
                </ul>
                
                
            @endif
            </div>
            

            
        </div>
    </div>

@endsection
