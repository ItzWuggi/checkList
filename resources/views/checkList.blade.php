<x-layout>
    <div class="container1">
        <div class="toDoApp">
            <h2 class="text-dark fs-4 mb-2">Lista di cose da fare 
                <img src="/storage/img/icons8-da-fare-50.png" class="image" alt="">
            </h2>
            <div class="row1">
                <input type="text" id="input-box" class="input1" placeholder="Inserisci il testo">
            <button class="button1" onclick="addTask()"> Aggiungi </button>
            </div>
            <ul id="list-container">
                {{-- <li class="checkMe checked1">Task 1</li>
                <li class="checkMe checked1">Task 2</li>
                <li class="checkMe checked1">Task 3</li> --}}
            </ul>
        </div>
    </div>
</x-layout>
