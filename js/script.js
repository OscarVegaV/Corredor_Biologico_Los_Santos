var i = document.getElementById('info');
// var m = $('#motivo');
var box = document.getElementById('box-text');
i.onclick = () => {
    box.style.display = "block";
    i.style.display = "none";
    mark.style.display = "block";

};
var mark = document.getElementById('mark');
mark.onclick = () => {
    mark.style.display = "none";
    box.style.display = "none";
    i.style.display = "block";
}
// var q = document.getElementById('sobre-nosotros');
// q.onclick = () => {
//     box.style.display = "none";
//     i.style.display = "block";
// }



