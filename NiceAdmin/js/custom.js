


UI.select("#content-box").addEventListener('click', e => {
    e.preventDefault();
    // alert("Alhamdullilah")
    //    console.log();
       
    if (e.target.name == "post") {

        // let submit = UI.select("button[name=submit]").value
        let name = UI.select("input[name=name]").value
        let description = UI.select("input[name=description]").value
        let status = UI.select("select[name=status]").value
        let daTaList = { "errorName": name, "errorDescription": description, "errorStatus": status };
        let velidateResult = [];
        let finalValCheck = true;


        for (const key in daTaList) {
            UI.select(`#${key}`).textContent = '';
            if (UI.verlidate(daTaList[key]) !== true) {
                velidateResult.push(UI.verlidate(daTaList[key]));
                UI.selvelidateResult = UI.verlidate(daTaList[key]);
                UI.select(`#${key}`).textContent = UI.verlidate(daTaList[key]);

            }

        }

        velidateResult.forEach(validreturn => {
            if (validreturn != true) {
                finalValCheck = validreturn;
            }
        });




        if (finalValCheck === true) {
            fetch(`../insert.php?name=${name}&description=${description}&status=${status}&submit=post`).then(res => res.json()).then(data => {
           
              
                if (data.status) {
                 
                    // UI.select('#alert').style.display = "block";
                    UI.select('#alert-box').innerHTML = UI.alert(data.massage, 'success', 'block');
                    UI.select("input[name=name]").value = ''
                    UI.select("input[name=description]").value = ''
                    UI.select("select[name=status]").value = ''
               return

                }
                UI.select('#alert-box').innerHTML = UI.alert(data.massage, 'danger', 'block');

            })
        }

        return;
    }

    if (e.target.name == "submit") {
      

 
        // let submit = UI.select("button[name=submit]").value
        
        let name = toLowerCase(UI.select("input[name=name]").value)
        let grade = UI.select("input[name=grade]").value
        let className = UI.select("input[name=class]").value
        let post = UI.select("select[name=position]").value
        let daTaList = { "errorName": name, "errorGrade": grade, "errorClass": className, "errorPost": post };
        let velidateResult = [];
        let finalValCheck = true;
        

    //  verlidation of data 
        for (const key in daTaList) {
            UI.select(`#${key}`).textContent = '';
            if (UI.verlidate(daTaList[key]) !== true) {
                velidateResult.push(UI.verlidate(daTaList[key]));
                UI.selvelidateResult = UI.verlidate(daTaList[key]);
                UI.select(`#${key}`).textContent = UI.verlidate(daTaList[key]);

            }

        }

        velidateResult.forEach(validreturn => {
          

            if (validreturn != true) {
                finalValCheck = validreturn;
                
            }
        });


     
    
   
        if (finalValCheck === true) {
            fetch(`../insert.php?name=${name}&grade=${grade}&class=${className}&post=${post}&submit=candidates`).then(res => res.json() ).then(data => {
                console.log(data);
                
                if (data.status==true) {
                    UI.select('#alert-box').innerHTML = UI.alert(data.massage, 'success', 'block');
                    UI.select("input[name=name]").value = ''
                    UI.select("input[name=grade]").value = ''
                    UI.select("input[name=class]").value = ''
                   
                    return;
                }

                UI.select('#alert-box').innerHTML = UI.alert(data.massage, 'danger', 'block');

            })
        }

        return;
    }




});
// }



UI.select(".header").addEventListener('click', e => {
    if (e.target.name == 'newCandidate') {
        fetch(`../backend.php?item=posts`).then(res => res.json()).then(data => {
           
            data.forEach(element => {
               



                UI.select('#select-post').innerHTML += `<option class="form-control" value="${element.id}">${element.name}</option>`

            });

        })
        UI.select('#content-box').innerHTML = UI.NewCandidate();
        return;
    }
    if (e.target.name == 'newPost') {

        UI.select('#content-box').innerHTML = UI.NewPost();
    }
})




