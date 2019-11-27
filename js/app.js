// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyCXZ77CAxlHKd1gCO9aeOvcKalLA3dMGvk",
    authDomain: "raybetzapateriafresnillo.firebaseapp.com",
    projectId: 'raybetzapateriafresnillo'
  });
  
  var db = firebase.firestore();

db.collection("zapateriaraybet").add({
    nombre: "Ada",
})
.then(function(docRef) {
    console.log("Document written with ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});