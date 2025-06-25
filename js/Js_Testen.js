'use strict';

/*einfacher Button mit Ausgabe + zurücksetzen*/
document.addEventListener('DOMContentLoaded', function(){

    let anzahl=0,
        text ='';

    document.getElementById('interaktiv')
        .addEventListener('click', klickverarbeitung);
    document.getElementById('reset')
        .addEventListener('click', zuruecksetzen);

    function klickverarbeitung(){
        anzahl = anzahl+1;
        if(anzahl<10){
            text='Sie haben den Button jetzt ' + anzahl + ' mal gedrückt.';
        }else if(anzahl<15){
            text='Sie haben den Button jetzt ' + anzahl + ' mal gedrückt.\n' +
                'Wollen Sie sich nicht langsam eine Kaffee holen?';
        }else{
            text='Sie haben den Button jetzt ' + anzahl + ' mal gedrückt.\n' +
                'Reicht es nicht langsam???';
        }
        document.querySelector('output')
            .innerText=text;
    }
    function zuruecksetzen(){
        anzahl = 0;
        text='Sie haben den Button jetzt 0 mal gedrückt.';
        document.getElementById('Zählerausgabe')
            .innerText=text;
    }
})

// Tastatur mit Ausgabe und Löschen
document.addEventListener('DOMContentLoaded', function() {
  const output = document.getElementById('Tastaturausgabe');
  document.getElementById('keyboard').addEventListener('click', event => {
    if (event.target.nodeName !== 'BUTTON') return;
    const { id } = event.target;
    // Nur Tastatur-Buttons verarbeiten: keine id oder id 'delete' oder 'space'
    if (id && id !== 'delete' && id !== 'space') return;
    if (id === 'delete') {
      output.innerText = '';
    } else {
      output.innerText += event.target.textContent;
    }
  });
});

//To-Do Liste
document.addEventListener('DOMContentLoaded', function () {
    const tasklist = document.querySelector('#tasklist');
    const newtaskInput= document.querySelector('#newtask');
    const addButton = document.querySelector('#add');
    let taskIdCounter = 0;
    addButton.addEventListener('click', function (){
        const task = newtaskInput.value.trim();
        if(task === ''){
            alert('Bitte gib eine Aufgabe ein!');
            return;
        }
        // Create a unique ID for the task
        const taskId = `todo-${taskIdCounter++}`;
        tasklist.insertAdjacentHTML('beforeend',
            `
      <li>
        <input type="checkbox" id="${taskId}">
        <label for="${taskId}">
          <span class="text">${task}</span>
        </label>
        <button aria-label="Delete task: ${task}" class="delete-button">Löschen</button>
      </li>
    `
        );
        newtaskInput.value = '';
    });
    tasklist.addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-button')) {
            const taskItem = event.target.closest('li');
            taskItem.remove();
        }
    });
});
