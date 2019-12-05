// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyCXZ77CAxlHKd1gCO9aeOvcKalLA3dMGvk",
    authDomain: "raybetzapateriafresnillo.firebaseapp.com",
    databaseURL: "https://raybetzapateriafresnillo.firebaseio.com",
    projectId: "raybetzapateriafresnillo",
    storageBucket: "raybetzapateriafresnillo.appspot.com",
    messagingSenderId: "33061963836",
    appId: "1:33061963836:web:0d20bc798344174207db39",
    measurementId: "G-67T396KL6E"
  });
  
  var db = firebase.firestore();

function guardar()
{
    var nombre      = document.getElementById('nombre').value;
    var apaterno    = document.getElementById('apaterno').value;
    var amaterno    = document.getElementById('amaterno').value;
    var correo      = document.getElementById('correo').value;
    var direccion   = document.getElementById('direccion').value;
    var ciudad      = document.getElementById('ciudad').value;
    var estado      = document.getElementById('estado').value;
    var cp          = document.getElementById('cp').value;

    db.collection("distribuidoras").add({
        nombre:     nombre,
        apaterno:   apaterno,
        amaterno:   amaterno,
        correo:     correo,
        direccion:  direccion,
        ciudad:   ciudad,
        estado:   estado,
        CP:   cp
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
        document.getElementById('nombre').value = '';
        document.getElementById('apaterno').value = '';
        document.getElementById('amaterno').value = '';
        document.getElementById('correo').value = '';
        document.getElementById('direccion').value = '';
        document.getElementById('ciudad').value = '';
        document.getElementById('estado').value = '';
        document.getElementById('cp').value = '';
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
}

//Leer datos
var tabla = document.getElementById('tabla');
db.collection("distribuidoras").onSnapshot().then((querySnapshot) => {
    tabla.innerHTML = '';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} = ${doc.data().first}`);
        tabla.innerHTML += `
        <tr>
            <th scope="row">${doc.id}</th>    
            <th>${doc.nombre}</th>  
            <th>${doc.apaterno}</th>  
            <th>${doc.amaterno}</th>  
            <th>${doc.correo}</th>  
            <th>${doc.direccion}</th>  
            <th>${doc.ciudad}</th>  
            <th>${doc.estado}</th>  
            <th>${doc.cp}</th>  
        </tr>
        `
    });
});

