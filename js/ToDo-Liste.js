
const taskForm = document.querySelector(".taskhinzufügen"); // das Formular
const list = document.querySelector(".taskliste"); // die UL-Liste
let tasks = JSON.parse(localStorage.getItem("tasks")) || []; // gespeicherte Aufgaben laden

// Aufgabenliste anzeigen
function populateList(tasks = [], list) {
    list.innerHTML = tasks
        .map((Aufgabe, i) => {
            return `
          <li>
            <input type="checkbox" data-index="${i}" id="Aufgabe${i}"
            ${Aufgabe.done ? "checked" : ""}/>
            <label for="Aufgabe${i}">${Aufgabe.text}</label>
          </li>
          `;
        })
        .join("");
}

// Neue Aufgabe hinzufügen
function handleAddTask(event) {
    event.preventDefault(); // Seite nicht neu laden

    const text = this.querySelector("[name=Aufgabe]").value;
    const newAufgabe = {
        text,
        done: false,
    };
    tasks.push(newAufgabe);
    localStorage.setItem("tasks", JSON.stringify(tasks));
    populateList(tasks, list);
    this.reset();
}

// Aufgabe als erledigt markieren
function toggleDone(e) {
    if (!e.target.matches("input")) return; // nur Checkboxen

    const index = e.target.dataset.index;
    tasks[index].done = !tasks[index].done;
    localStorage.setItem("tasks", JSON.stringify(tasks));
    populateList(tasks, list);
}

taskForm.addEventListener("submit", handleAddTask);
list.addEventListener("click", toggleDone);
populateList(tasks, list); // Initiales Anzeigen