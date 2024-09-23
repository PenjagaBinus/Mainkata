<x-app-layout>

    <style>
               body{
            background:#eee;
        }

        .card{
            border:none;
            position:relative;
            overflow:hidden;
            border-radius:8px;
            cursor:pointer;
        }


        .progress{
            margin: 10px;
        }


        .fonts{
            font-size:11px;
        }

        .social-list{
            display:flex;
            list-style:none;
            justify-content:center;
            padding:0;
        }

        .social-list li{
            padding:10px;
            color:#8E24AA;
            font-size:19px;
        }

        .buttons button:nth-child(1){
          border: 1px solid #8E24AA !important;
          color:#fff;
          height:40px;
        }

        .buttons button:nth-child(1):hover{
          border: 1px solid #8E24AA !important;
          color:#fff;
          height:40px;
          background-color: #8E24AA;
        }

        .buttons button:nth-child(2){
          border: 1px solid #8E24AA !important;
          color:#fff;
          background-color: #8E24AA;
          height: 40px;
        }

        .row{
          display:flex;
          justify-content: flex-start;
          padding: 10px;
        }

        .card-body{
          display: grid;
          row-gap: 10px;
        }

        #tom .container-md{
          height: 110px;
          margin-bottom: 25px;
          padding:10px;
          display:flex;
          justify-content: space-evenly;
        }

        #tom{
          height: 280px;
        }

        #tom p{
  font-size: 12px;
  text-align: center;
}

span svg{
  margin-bottom: 0;
  opacity: 100%;
}

svg{
  margin-bottom: 10px;
  opacity: 10%;
}

#chosen-one{
  opacity: 100%;
}

main{
  margin-top: 10px;
  margin: 0 auto;
  padding: 45px;
  border-radius: 5px;
}
    </style>
    <main>
    <div class="card p-3 py-4">
                        <div class="text-center" style="margin: auto;">
                        <x-profpic width="100" class="rounded-circle"/>
                        </div>
                        <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">{{Auth::user()->name}}</span>
                        <div class="row text-center">
                            <div class="col-md-3"></div>
                            <div class="progress col-md-6" role="progressbar" aria-label="Basic example" >
                            <div class="progress-bar" style="width: {{$progress}}%"></div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <span id="level-text">Level {{$level}} : {{$points}} / {{$max_point}}</span>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Lencana Ibu Baidarawuhi
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-0-square-fill" 
                                            @if ($level > 3)
                                                    fill="gold"
                                                    id="chosen-one"
                                                    @else
                                                    fill="currentColor"
                                                    @endif  viewBox="0 0 16 16">    
                                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z"/>
                                            </svg>
                                            <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Dapati level lebih tinggi dari Nyi Badarawuhi">Nyi Badarawuhi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header"><i>Lencana Prof Sabdo Palon</i></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-1-circle-fill" 
                                            @if ($level > 6)
                                            fill="gold"
                                            id="chosen-one"
                                            @else
                                            fill="currentColor"
                                            @endif  viewBox="0 0 16 16">    
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                                            </svg>
                                            <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Dapati level lebih tinggi dari Sabdo Palon">Sabdo Palon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
        <div class="card">
            <div class="card-header"><i>Lencana Dr. Roro Kidul</i></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-pencil-fill" 
                                    @if ($level > 9)
                                    fill="gold"
                                    id="chosen-one"
                                    @else
                                    fill="currentColor"
                                    @endif  viewBox="0 0 16 16">    
                                    <path d="M.036 12.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65m0 2a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65M2.662 8.08c-.456 1.063-.994 2.098-1.842 2.804a.5.5 0 0 1-.64-.768c.652-.544 1.114-1.384 1.564-2.43.14-.328.281-.68.427-1.044.302-.754.624-1.559 1.01-2.308C3.763 3.2 4.528 2.105 5.7 1.299 6.877.49 8.418 0 10.5 0c1.463 0 2.511.4 3.179 1.058.67.66.893 1.518.819 2.302-.074.771-.441 1.516-1.02 1.965a1.88 1.88 0 0 1-1.904.27c-.65.642-.907 1.679-.71 2.614C11.076 9.215 11.784 10 13 10h2.5a.5.5 0 0 1 0 1H13c-1.784 0-2.826-1.215-3.114-2.585-.232-1.1.005-2.373.758-3.284L10.5 5.06l-.777.388a.5.5 0 0 1-.447 0l-1-.5a.5.5 0 0 1 .447-.894l.777.388.776-.388a.5.5 0 0 1 .447 0l1 .5.034.018c.44.264.81.195 1.108-.036.328-.255.586-.729.637-1.27.05-.529-.1-1.076-.525-1.495s-1.19-.77-2.477-.77c-1.918 0-3.252.448-4.232 1.123C5.283 2.8 4.61 3.738 4.07 4.79c-.365.71-.655 1.433-.945 2.16-.15.376-.301.753-.463 1.13"/>
                                    </svg>
                                    <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Dapati level lebih tinggi dari Ratu Kidul">Ratu Kidul</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-12" id="shazam">
                        <div class="card mb-8">
                            <div class="card-header">Lencana</div>
                            <div class="card-body">
                                <div class="row align-items-start" id="tom">
                                    <div class="col" id="tom">
                                        <div class="container-md">
                                            <div class="gambar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-0-square-fill" 
                                                @if($level > 0)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif viewBox= "0 0 16 16">
                                                  <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895"/>
                                                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99"/>
                                                </svg>
                                                <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 1">Pemula</button>
                                            </div>
                                            <div class="gambar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"  
                                            @if($level >= 2)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-1-circle-fill" viewBox= "0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312z"/>
                                            </svg>
                                            <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 2">Mulai Belajar</button>
                                            </div>            
                                             <div class="gambar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-0-square-fill" 
                                                @if($level >= 4)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-pencil-fill" viewBox= "0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                                </svg>
                                                <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 4">Pintar</button>
                                            </div>
                                            <div class="gambar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" 
                                                @if($level >= 6)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-pencil-square" viewBox= "0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 6">Cerdas</button>
                                </div>
                                </div>
                                <div class="container-md">
                                        <div class="gambar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" 
                                                @if($level >= 8)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-laptop" viewBox= "0 0 16 16">
                                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                                                    </svg>
                                                    <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 8">Arif</button>
                                                </div>
                                            <div class="gambar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-0-square-fill" 
                                                @if($level >= 10)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-alphabet-uppercase" viewBox= "0 0 16 16">
                                                <path d="M1.226 10.88H0l2.056-6.26h1.42l2.047 6.26h-1.29l-.48-1.61H1.707l-.48 1.61ZM2.76 5.818h-.054l-.75 2.532H3.51zm3.217 5.062V4.62h2.56c1.09 0 1.808.582 1.808 1.54 0 .762-.444 1.22-1.05 1.372v.055c.736.074 1.365.587 1.365 1.528 0 1.119-.89 1.766-2.133 1.766zM7.18 5.55v1.675h.8c.812 0 1.171-.308 1.171-.853 0-.51-.328-.822-.898-.822zm0 2.537V9.95h.903c.951 0 1.342-.312 1.342-.909 0-.591-.382-.954-1.095-.954zm5.089-.711v.775c0 1.156.49 1.803 1.347 1.803.705 0 1.163-.454 1.212-1.096H16v.12C15.942 10.173 14.95 11 13.607 11c-1.648 0-2.573-1.073-2.573-2.849v-.78c0-1.775.934-2.871 2.573-2.871 1.347 0 2.34.849 2.393 2.087v.115h-1.172c-.05-.665-.516-1.156-1.212-1.156-.849 0-1.347.67-1.347 1.83"/>    
                                            </svg>
                                                <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 10">Bestari</button>
                                            </div>
                                            <div class="gambar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" 
                                            @if($level >= 12)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-trophy" viewBox= "0 0 16 16">
                                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                                            </svg>
                                            <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 12">Cendekia</button>
                                            </div>
                                            <div class="gambar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" 
                                                @if($level >= 14)
                                                fill = "gold"
                                                id="chosen-one"
                                                @else
                                                fill="currentColor"
                                                @endif class="bi bi-trophy-fill" viewBox= "0 0 16 16">
                                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
                                                </svg>
                                                <button id="popoverButton" class="btn btn-primary" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Buat anda yang mencapai level 14">Jenius</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            let poppovers = document.querySelectorAll('#popoverButton');
            // console.log(poppovers);
            poppovers.forEach(element => {
                // console.log(element);
                new bootstrap.Popover(element);
            });


        });
    </script>
</x-app-layout>
