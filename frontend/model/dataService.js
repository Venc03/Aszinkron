class DataService {
    constructor() {
        console.log("hello");
    }


    getData(vegpont, callback, hibaCallback) {
        axios.get(vegpont)
            .then(function (response) {
                console.log("response", response);
                console.log("data", response.data);
                console.log("statusz", response.status);
                console.log("statusz", response.request.status);
                console.log("text", response.statusText);
                callback(response.data);
            })
            .catch(function (error) {
                console.log(error);
                hibaCallback(error);
            })
            .finally(function () {
                // always executed
            });
    }


    postData(url, data){
        axios
            .post(url, data)
            .then((response)=>{
                console.log(response);
            })
            .catch((error) =>{
                console.log(error);
            })
    }

    deleteData(url, id) {
        axios
            .delete(`${url}/${id}`)
            .then((response) => {
                console.log("RESP", response);
            })
            .catch((error) => {
                console.log("hiba", error);
            })
    }

    updateData(url, id){
        
    }

    


}
export default DataService;