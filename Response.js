class QueryData{

  static getData(path){
        fetch(path)
        .then(response => response.json())
        .then(data =>{
           return data;
        } )
        
    }


   static insertData(path, data){
        fetch(`${path}${data}`)
        .then(response => response.json())
        .then(data =>{
            if(data){
                return true;
            }

            return false;
         
        });
        
    }
}