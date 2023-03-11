

document.getElementById("plus").addEventListener("click", function() {


    var url_string = window.location.href;
    var url = new URL(url_string);
    var current_offset = parseInt(url.searchParams.get("offset"));
    if(current_offset >= 0 && current_offset < 635){
        document.getElementById("plus").style.transform = "translateX(20px)"; 
        setTimeout(function() {
            document.getElementById("plus").style.transform = "none";
          }, 300);
        var new_offset = current_offset + 12;
        url.searchParams.set("offset", new_offset);
        window.location.href = url.toString();
    } else {
        document.getElementById("plus").textContent = "Impossible"
        setTimeout(function() {
            document.getElementById("plus").textContent = "Next >>";
        }, 800);
    }
});


document.getElementById("minus").addEventListener("click", function() {

    var url_string = window.location.href;
    var url = new URL(url_string);
    var current_offset = parseInt(url.searchParams.get("offset"));
    if(current_offset > 0 && current_offset != 0){
        document.getElementById("minus").style.transform = "translateX(-20px)"; 
        setTimeout(function() {
            document.getElementById("minus").style.transform = "none";
          }, 200);
        var new_offset = current_offset - 12;
        url.searchParams.set("offset", new_offset);
        window.location.href = url.toString();
    } else {
        document.getElementById("minus").textContent = "Impossible"
        setTimeout(function() {
            document.getElementById("minus").textContent = "<< Previous";
          }, 800);
    }
});

