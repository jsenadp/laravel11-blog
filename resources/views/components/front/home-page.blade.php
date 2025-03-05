<x-front.layout>  
        <x-slot name="pageHeader">
            {{ $lastData->title }}
        </x-slot>
        <x-slot name="pageSubheading">
            {{ $lastData->description }}
        </x-slot>
        <x-slot name="pageBackground">
            {{ asset(getenv('COSTUM__THUMBNAIL_LOCATION')."/".$lastData->thumbnail) }}
        </x-slot>
        <x-slot name="pageHeaderLink">
            {{ route('blog-detail',['slug'=>$lastData->slug]) }}
        </x-slot>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach ($data as $key => $value)
                    <x-front.blog-list title='{{ $value->title }}' description='{{ $value->description }}' date="{{ $value->created_at->isoformat('dddd, D MMMM Y') }}" user='{{ $value->user->name }}' link="{{ route('blog-detail',['slug'=>$value->slug]) }}"/>
                    
                    @endforeach
                    <!-- Pager-->
                    <div class="d-flex justify-content-between mb-4">                      
                            <div>
                                @if (!$data->onFirstPage())
                                    <a class="btn btn-primary text-uppercase" href="{{ $data->previousPageUrl() }}">&larr;New Posts</a>
                                @endif
                            </div>
                            <div>
                                @if ($data->hasMorePages())
                                    <a class="btn btn-primary text-uppercase" href="{{ $data->nextPageUrl() }}">Older Posts&rarr;</a>   
                                @endif
                            </div>                       
                    </div>
                </div>
            </div>
        </div>
</x-front.layout>
