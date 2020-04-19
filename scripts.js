//function expresiion to slect element
const selectElement = (s) => document.querySelector(s);
//open the menu on click
selectElement('.open').addEventListner('click' , ()=>{
    selectElement('.nav-list').classList.add('active');
});
selectElement('.close').addEventListner('click' , ()=>{
    selectElement('.nav-list').classList.remove('active');
});