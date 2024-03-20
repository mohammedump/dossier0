function afficherContenu() {
    var texteTextarea = document.getElementById("exampleFormControlTextarea1").value;
    
    var contenuDynamique = document.getElementById("contenuDynamique");

    contenuDynamique.innerHTML = texteTextarea;
}
// const cors = require("cors")
// app.use(
//     cors({
//         origin: "http://127.0.0.1:8000",
//     })

// )
// //make function to do Request
// function getRepos(){
//     // Assign the Request Object to variable
//     var myRequest = new XMLHttpRequest();
//     // on ready state change => function call when ready state change
//     myRequest.onreadystatechange = function(){
//         console.log(this.readyState);
//         /*
//         le statut de la requette
//         [0]
//         [1]
//         [2]
//         [3]
//         [4]
//         */
//         if(this.readyState == 4 && this.status == 200){
//             console.log(this.responseText);
//         }
//     };
//     myRequest.open('POST','http://oujda-nlp-team.net:8081/api/alkhalil', true);
//     myRequest.send();
// }
