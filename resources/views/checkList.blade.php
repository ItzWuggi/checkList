<x-layout>
    <x-masthead/>
    <div class="container1">
        <div class="toDoApp">
            <h1 class="text-dark">Lista di cose da fare <img src="/storage/img/icons8-da-fare-50.png" alt=""></h1>
            <div class="row justify-content-space-between">
                <input type="text" id="input-box" class="form-control" placeholder="Inserisci il testo">
                <button class="button1 btn">Aggiungi</button>
            </div>
            <ul class="checkMe" id="list-container">
                <li class="checkMe">Task 1</li>
                <li class="checkMe">Task 2</li>
                <li class="checkMe">Task 3</li>
            </ul>
        </div>
    </div>
</x-layout>