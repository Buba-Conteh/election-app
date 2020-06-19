class UI {

  constructor() {
    this.finalData
  }
  static select(element) {
    return document.querySelector(element);
  }

  static candidate(name, identifier, position) {




    return `<div class="col-4 text-center mx-auto" id="${identifier}">
        <div class="img border-light rounded-circle border border-light mx-auto">
            <div class="overlay rounded-circle text-center" id="overlay${identifier}">
            <i class="far fa-check-circle fa-3x my-5 py-5" style=" display:none" id="fa${identifier}"></i>
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

  static verlidate(data) {
    if (data == '') {
      return "This field cannot be empty";
    }
    // if ((dataType)==String) {

    //     if(!data.match(['[a-z]'])){
    //         return "This field only requires leters";
    //     }
    // }
    return true;
  }
  static alert(massage, color, display = 'block') {
    return `
      <div class="alert alert-${color} alert-dismissible mb-2" id="alert" role="alert" style="display:${display};">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
        ${massage}
        </div>
        `
  }

  static NewPost() {
    return `
        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
        <div class="col-12 mb-2" id="alert-box">
        </div>
        <div class="card shadow border-secondary text-light" style="background-color: rgb(57,74,89);">
          <div class="card-header">
            <h4 class="text-uppercase">CREATE A NEW EXECUTIVE POST</h4>
          </div>
          <div class="card-body">
            <form method="get" action="">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="errorName" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="errorDescription" class="text-danger"></small>
              </div>

               <div class="form-group">
                  <label for="my-select">Text</label>
                  <select id="my-select" class="custom-select" name="status">
                          <option>Active</option>
                          <option>Ianctive</option>
                 </select>
                 <small id="errorStatus" class="text-danger"></small>
                </div>

                
              

              <div class="d-flex">
                <button name="post" class="btn btn-primary form-control">ADD POST</button>
              </div>

            </form>
          </div>
        </div>
      </div>`;

  }
  static NewCandidate() {
    return `
        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
        <div class="col-12 mb-2" id="alert-box">
        </div>
        <div class="card shadow border-secondary text-light" style="background-color: rgb(57,74,89);">
          <div class="card-header">
            <h4>CREATE A NEW CANDIDATE</h4>
          </div>
          <div class="card-body">
            <form method="get" action="">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="errorName" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="">Grade</label>
                <input type="text" name="grade" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="errorGrade" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="">Class</label>
                <input type="text" name="class" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="errorClass" class="text-danger"></small>
              </div>

              <div class="form-group">
              <label for="select-post">Position Applied</label>
              <select id="select-post" class="custom-select form-control" name="position" >
                   
                      
             </select>
             <small id="errorPost" class="text-danger"></small>
            </div>

              

              <div class="d-fe">
                <button name="submit" class="btn btn-primary form-control">Save</button>
              </div>

            </form>
          </div>
        </div>
      </div>`;

  }

};
