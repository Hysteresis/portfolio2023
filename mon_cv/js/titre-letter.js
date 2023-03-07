document.getElementById('titre2').style.display = "none";


window.addEventListener("DOMContentLoaded", (event) => {
    animate_text1();
    setTimeout(animate_text2, 900);
    // animate_text2();

});
// -------------------
function animate_text1() {
    let delay = 50,
        delay_start = 0,
        contents,
        letters;

    document.querySelectorAll('#titre1').forEach(function (elem) {
        contents = elem.textContent.trim();
        elem.textContent = "";
        letters = contents.split("");
        elem.style.visibility = 'visible';

        letters.forEach(function (letter, index_1) {
            setTimeout(function () {

                elem.textContent += letter;

            }, delay_start + delay * index_1);
        });
        delay_start += delay * letters.length;
    });
}

function animate_text2() {
    document.getElementById('titre2').style.display = "block";
    let delay = 50,
        delay_start = 0,
        contents,
        letters;

    document.querySelectorAll('#titre2').forEach(function (elem) {
        contents = elem.textContent.trim();
        elem.textContent = "";
        letters = contents.split("");
        elem.style.visibility = 'visible';

        letters.forEach(function (letter, index_1) {
            setTimeout(function () {

                elem.textContent += letter;

            }, delay_start + delay * index_1);
        });
        delay_start += delay * letters.length;
    });
}