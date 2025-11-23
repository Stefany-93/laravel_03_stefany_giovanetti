    <x-layout>
        
        <div class="container-fluid bg-body-secondary bg-white-background">
            <div class="row h-75 justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="text-center display-4 shadow text-brown">{{$article['description']}}</h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{$article['img']}}" alt="" class="img-cappy">
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-brown"> {{$article['articolo']}}</p>
                </div>
            </div>
        </div>

    </x-layout>