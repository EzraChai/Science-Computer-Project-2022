<x-guest-layout>
    <div class="">
        <div class="navbar navbar-settings left-0 top-4 shadow-xl fixed z-50 bg-neutral text-neutral-content rounded-box">
            <div class="px-2 mx-2 navbar-start">
                <div class="flex items-center">
                    <svg class=" fill-current mx-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">
                        <path d="M 16.5 3 A 2.5 2.5 0 0 0 16 3.0527344 C 12.718641 3.5621144 9.2004834 8.8687485 9.0175781 12.226562 A 2.5 2.5 0 0 0 9 12.5 A 2.5 2.5 0 0 0 11.404297 14.996094 A 1.0001 1.0001 0 0 0 11.5 15 L 17.832031 15 A 1.0001 1.0001 0 0 0 18.158203 15 L 21 15 A 1.0001 1.0001 0 1 0 21 13 L 19 13 L 19 6 L 19 5.5 A 2.5 2.5 0 0 0 18.996094 5.4003906 A 1.0001 1.0001 0 0 0 18.994141 5.3925781 A 2.5 2.5 0 0 0 16.5 3 z M 15.816406 9.8125 L 16.154297 13 L 13.982422 13 C 14.407679 11.839336 15.065609 10.773749 15.816406 9.8125 z M 9.5 16 A 2.5 2.5 0 0 0 7 18.5 A 2.5 2.5 0 0 0 9.5 21 A 2.5 2.5 0 0 0 12 18.5 A 2.5 2.5 0 0 0 9.5 16 z M 16.576172 17 L 17 21 A 1 1 0 0 0 18 22 A 1 1 0 0 0 19 21 L 19 17 L 16.576172 17 z M 2.9648438 23.994141 A 1.0001 1.0001 0 0 0 2.5527344 25.894531 C 2.5527344 25.894531 4.6666667 27 7 27 C 8.9465696 27 10.458804 26.333203 11 26.078125 C 11.541196 26.333203 13.05343 27 15 27 C 16.94657 27 18.458804 26.333203 19 26.078125 C 19.541196 26.333203 21.05343 27 23 27 C 25.333333 27 27.447266 25.894531 27.447266 25.894531 A 1.0001163 1.0001163 0 1 0 26.552734 24.105469 C 26.552734 24.105469 24.666667 25 23 25 C 21.333333 25 19.447266 24.105469 19.447266 24.105469 A 1.0001 1.0001 0 0 0 18.552734 24.105469 C 18.552734 24.105469 16.666667 25 15 25 C 13.333333 25 11.447266 24.105469 11.447266 24.105469 A 1.0001 1.0001 0 0 0 10.552734 24.105469 C 10.552734 24.105469 8.6666667 25 7 25 C 5.3333333 25 3.4472656 24.105469 3.4472656 24.105469 A 1.0001 1.0001 0 0 0 2.9648438 23.994141 z"></path></svg>
                    <div class="text-lg font-bold">
                        Terjun
                    </div>
                </div>
            </div> 
            <div class="hidden px-2 mx-2 navbar-center justify-center navbar-settings lg:flex">
                <div class="flex items-stretch">
                    <a href="/" class="btn btn-ghost btn-sm font-extrabold rounded-btn hover:text-cyan-400">
                        Utama
                    </a> 
                    <a href="/competitions" class="btn btn-ghost font-extrabold btn-sm rounded-btn hover:text-purple-400">
                        Pertandingan
                      </a> 
                    <a href="/dashboard" class="btn btn-ghost btn-sm font-extrabold rounded-btn hover:text-indigo-400">
                        Log Masuk
                      </a>
                </div>
            </div>
        </div>
        <div class="navbar-end">
        </div>
    </div>
<main class="">
    {{ $slot }}
</main>
    <footer data-theme="dark" class="p-10 footer bg-base-300 text-primary-content footer-center">
        <div>
            <svg class=" fill-current w-9 h-9 mt-2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">
                <path d="M 16.5 3 A 2.5 2.5 0 0 0 16 3.0527344 C 12.718641 3.5621144 9.2004834 8.8687485 9.0175781 12.226562 A 2.5 2.5 0 0 0 9 12.5 A 2.5 2.5 0 0 0 11.404297 14.996094 A 1.0001 1.0001 0 0 0 11.5 15 L 17.832031 15 A 1.0001 1.0001 0 0 0 18.158203 15 L 21 15 A 1.0001 1.0001 0 1 0 21 13 L 19 13 L 19 6 L 19 5.5 A 2.5 2.5 0 0 0 18.996094 5.4003906 A 1.0001 1.0001 0 0 0 18.994141 5.3925781 A 2.5 2.5 0 0 0 16.5 3 z M 15.816406 9.8125 L 16.154297 13 L 13.982422 13 C 14.407679 11.839336 15.065609 10.773749 15.816406 9.8125 z M 9.5 16 A 2.5 2.5 0 0 0 7 18.5 A 2.5 2.5 0 0 0 9.5 21 A 2.5 2.5 0 0 0 12 18.5 A 2.5 2.5 0 0 0 9.5 16 z M 16.576172 17 L 17 21 A 1 1 0 0 0 18 22 A 1 1 0 0 0 19 21 L 19 17 L 16.576172 17 z M 2.9648438 23.994141 A 1.0001 1.0001 0 0 0 2.5527344 25.894531 C 2.5527344 25.894531 4.6666667 27 7 27 C 8.9465696 27 10.458804 26.333203 11 26.078125 C 11.541196 26.333203 13.05343 27 15 27 C 16.94657 27 18.458804 26.333203 19 26.078125 C 19.541196 26.333203 21.05343 27 23 27 C 25.333333 27 27.447266 25.894531 27.447266 25.894531 A 1.0001163 1.0001163 0 1 0 26.552734 24.105469 C 26.552734 24.105469 24.666667 25 23 25 C 21.333333 25 19.447266 24.105469 19.447266 24.105469 A 1.0001 1.0001 0 0 0 18.552734 24.105469 C 18.552734 24.105469 16.666667 25 15 25 C 13.333333 25 11.447266 24.105469 11.447266 24.105469 A 1.0001 1.0001 0 0 0 10.552734 24.105469 C 10.552734 24.105469 8.6666667 25 7 25 C 5.3333333 25 3.4472656 24.105469 3.4472656 24.105469 A 1.0001 1.0001 0 0 0 2.9648438 23.994141 z"></path></svg>
            <p class="font-bold text-lg">Sistem Pertandingan Terjun </p>
                <p class=" font-semibold text-md"> Direka oleh Chai Juan Zhe <span class="text-red-700">&hearts;</span> </o>
            <p>Hakcipta © 2022 - Semua Hak Terpelihara</p>
        </div> 
        <div>
            <div class="grid grid-flow-col gap-4">
            <a target="blank" title="Instagram" href="https://www.instagram.com/juanzhx_/">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32" class="fill-current upBit">
                    <path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z"></path>
                </svg>
            </a> 
            <a target="blank" title="Youtube" href="https://www.youtube.com/channel/UC062UX4caywvYdfneHAw14w">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
            </a> 
            <a target="blank" title="Linkedin" href="https://www.linkedin.com/in/ezra-chai-juan-zhe-9b8b3a209">
                <svg xmlns="http://www.w3.org/2000/svg"  width="28" height="28"  viewBox="0 0 24 24" class="fill-current upABit">
                    <path d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M7.738,17L7.738,17 c-0.697,0-1.262-0.565-1.262-1.262v-4.477C6.477,10.565,7.042,10,7.738,10h0C8.435,10,9,10.565,9,11.262v4.477 C9,16.435,8.435,17,7.738,17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2 S8.551,8.717,7.694,8.717z M16.779,17L16.779,17c-0.674,0-1.221-0.547-1.221-1.221v-2.605c0-1.058-0.651-1.174-0.895-1.174 s-1.058,0.035-1.058,1.174v2.605c0,0.674-0.547,1.221-1.221,1.221h-0.081c-0.674,0-1.221-0.547-1.221-1.221v-4.517 c0-0.697,0.565-1.262,1.262-1.262h0c0.697,0,1.262,0.565,1.262,1.262c0,0,0.282-1.262,2.198-1.262C17.023,10,18,10.977,18,13.174 v2.605C18,16.453,17.453,17,16.779,17z"></path>
                </svg>
            </a>
            </div>
        </div>
        </footer>
</x-guest-layout>