class UI {

    constructor() {
        this.finalData
    }
    static select(element) {
        return document.querySelector(element);
    }

    static candidate(name, identifier, position) {




        return `<div class="col-lg-4 col-sm-12 col-md-6 text-center mx-auto" id="${identifier}">
        <div class="img border-light rounded-circle border border-light mx-auto">
            <div class="overlay rounded-circle text-center" id="overlay${identifier}">
            <i class="far fa-check-circle fa-3x" style="display:none" id="fa${identifier}"></i>
            </div>

        </div>
        <h3 class="text-light" id="name">${name}</h3>

    </div>`;

    }
    static votingCompleted() {
        return `
    <div class="card">
       <div class="card-body">
          <h1 class="display-2 text-capitalize">Thank you for voting</h1>
       </div>
   </div>`;
    }

};



let status = ['president', 'vice-president', 'secretary'];
let count = 0;

let idItemFinal;

let idItem = [];

function init(post) {

    return fetch('backend.php?item=' + post)
        .then(response => response.json())
        .then(data => {

        
            data.forEach(candidates => {
                let fullname = candidates['fullname'];
                let position = candidates['position'];

                let identifier = fullname[0] + fullname[fullname.length - 1] + candidates['id'];

                idItem.push(identifier);
                console.log(candidates['fullname']);
                UI.select('.candidate').innerHTML += UI.candidate(candidates['fullname'], identifier, position);
                UI.select('#title').textContent = position;


            });

        });
}


let votedCandidate = [];
UI.select('#candidate').addEventListener('click', (e) => {
    // console.log(e.keyCode);


    idItem.forEach(elem => {
        UI.select('#overlay' + elem).style.backgroundColor = "";
        UI.select('#fa' + elem).style.display = "none"
        if (e.target.id == 'overlay' + elem) {
            votedCandidate = elem;
            UI.select('#overlay' + elem).style.backgroundColor = "rgba(92, 148, 20, 0.8)";
            UI.select('#fa' + elem).style.display = "inline-block";
            console.log(votedCandidate);

        }

    });

    if (e.target.matches('button') && e.target.id == 'vote') {


        votedCandidate = votedCandidate[votedCandidate.length - 1];

        fetch('insert.php?vote=' + votedCandidate)
            .then(response => response)
            .then(data => {

                // console.log(status.length);
                if (data.status == 200) {
                    count++;
                    if (count > status.length - 1) {
                        UI.select('.candidate').innerHTML = UI.votingCompleted();
                        console.log('no more candidates');
                        return;

                    }
                    console.log(count);
                    UI.select('.candidate').innerHTML = "";
                    idItem = []
                    init(status[count]);
                }

            })
    }


});

window.onload = init('president');