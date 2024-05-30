let inputBox = document.getElementById("input-box");
let listContainer = document.getElementById("list-container");

function addTask() {
    if (inputBox.value === '') {
        alert("Per favore scrivi qualcosa");
    } else {
        let li = document.createElement("li");
        li.className = "checkMe";
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        inputBox.value = ''; 
    }
}

