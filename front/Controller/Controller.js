import DataService from "../Modell/DataService.js";
import View from "../View/View.js";
class Controller{
    constructor(){
        console.log("jfjsdlf");
        this.dataService = new DataService();
        console.log("jfjsdlf");
        this.dataService.getAxiodData("http://localhost:8000/api/writers", this.megjelenit)
        console.log("jfjsdlf");
        this.dataService.getAxiodData("http://localhost:8000/api/writers", {
            "id": 4,
            "name": "Jeno",
            "birth": 1800-12-28
        });
    }

    megjelenit(list){
        new View(list, $(".list"));
        console.log("controllerben: ", list);
    }

}

export default Controller;