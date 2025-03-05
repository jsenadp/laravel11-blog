<x-front.layout>  
        <x-slot name="pageHeader">
            {{ $data->title }}
        </x-slot>
        <x-slot name="pageSubheading">
            {{ $data->description }}
        </x-slot>
        <x-slot name="pageBackground">
            {{ asset(getenv('COSTUM__THUMBNAIL_LOCATION')."/".$data->thumbnail) }}
        </x-slot>
        <x-slot name="pageHeaderLink">
            {{ route('blog-detail',['slug'=>$data->slug]) }}
        </x-slot>
        <x-slot name="pageTitle">
            {{ $data->title }}
        </x-slot>
        <!-- Main Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
                       {!! $data->content !!}
                        <!-- Pager-->
                        
                    </div>
                </div>
            </div>
        </article>
</x-front.layout>
