var a = 0;

function toggleToolDisplay() {
if (a === 0) {
    document.getElementById('tool').style.display = 'block';
a = 1;
} else {
    document.getElementById('tool').style.display = 'none';
a = 0;
}
}

window.onscroll = function() {
    scrollFunction()
};
document.getElementById('tool').addEventListener('mouseleave', function() {
if (a === 1) {
    document.getElementById('tool').style.display = 'none';
a = 0;
}
});
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.querySelector('.scrollTop').style.display = "block";
} else {
    document.querySelector('.scrollTop').style.display = "none";
}
}

function scrollToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
