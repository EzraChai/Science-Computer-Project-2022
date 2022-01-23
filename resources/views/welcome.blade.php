<x-public-page>
    <div class="main-page relative bg-base-100 min-h-[90vh] w-full flex items-center justify-center">
            <video muted loop autoplay preload="auto" class="w-full h-full absolute object-cover bg-zinc-800">
                <source src="/Monodivingolympicintro(1).webm" type="video/webm">
                    Your Browser does not support the video.
            </video>
            <div class="absolute z-30 text-white mb-24">
                <div class="bg-zinc-100 w-[0.3rem] h-[7.5rem] absolute left-[-28px] rounded-xs"></div>
                <div class="w-full h-full overflow-hidden">
                    <h1 class="text-8xl primary-title title-font font-bold">Pertandingan <span class="text-cyan-500">Terjun</span></h1>
                </div>
                <div class="w-full h-full overflow-hidden">
                    <h4 class="text-xl text-zinc-100 secondary-title title-font font-bold ml-2">Cepat & Tepat.</h4>
                </div>
            </div>
    </div>
    {{-- <div class="min-h-screen bg-base-200">
        <div class="text-center">
            <div class="w-full">
                <div class="cursor"></div>
                <div class="shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
                <div class="content">
                    <div class="texthere">
                        <h1 class=" text-9xl font-extrabold">Pertandingan Terjun</h1>
                        <h1 class=" illusion opacity-25 text-9xl font-extrabold">Pertandingan Terjun</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        <svg class="absolute wave-1 bottom-[15px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5f5f5" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,176C384,160,480,96,576,101.3C672,107,768,181,864,213.3C960,245,1056,235,1152,208C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div id="pertandingan" class="relative py-20">
        <h1 class="text-5xl text-font text-center mb-16 splitText text-font-2">Pertandingan</h1>
        <div class="relative max-w-7xl mx-auto lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            <div class="absolute -top-8 right-[24rem] w-[22rem] h-[22rem] rounded-full bg-cyan-100 mix-blend-multiply filter blur-2xl"></div>
            <div class="absolute -top-8 left-[24rem] w-[22rem] h-[22rem] rounded-full bg-purple-100 mix-blend-multiply filter blur-2xl"></div>
            @foreach ($competitions as $competition)
                <a href="/competitions/{{ $competition->id }}"
                    class="card shadow-xl hover:scale-105 lg:card-side bg-white text-primary-content transform transition competition" onmouseenter="handleHover(event)" onmouseleave="handleHoverOut(event)">
                    <div class="card-body">
                        <h1 class="text-font-2 text-xl">{{ $competition->name }}</h1>
                        <p class="text-base text-gray-500">{{ $competition->avenue }}</p>
                        <svg class="absolute -bottom-20 opacity-20 svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#05b2cf" fill-opacity="1" d="M0,320L48,293.3C96,267,192,213,288,213.3C384,213,480,267,576,272C672,277,768,235,864,197.3C960,160,1056,128,1152,117.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="flex py-2 justify-center">
            <a href="/competitions" class="link mt-14 z-10 font-bold underline decoration-[3px] decoration-purple-500 hover:decoration-purple-700 text-2xl">Pertandingan Lain &#8594;</a>
        </div>
        <div class="py-20"></div>
    </div>
    </div>
    </div>
    <script>
        gsap.from(".primary-title",{
            delay: .8,
            duration: .95,
            x: -950,
            ease: "power3.Out"
        })
        gsap.from(".secondary-title", {
            duration: 1,
            x: -200,
            ease: "power3.inOut"
        },"second")

        function handleHover(e){
            gsap.to(e.target.children[0].children[2],{
                y: -70,
                delay: .15,
                duration: .6,
                ease: "power3.out"
            })
        }

        function handleHoverOut(e){
            console.log(e)
            gsap.to(e.target.children[0].children[2],{
                y: 0,
                duration: .6,
                ease: "power3.in"
            })
        }
    </script>
</x-public-page>
