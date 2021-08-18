function myFunction() {
    var collops = document.getElementById("collops");
    var moreProduct = document.getElementById("more_element");
    var btnProduct = document.getElementById("myBtn");

    if (collops.style.display == "none") {
        collops.style.display = "inline";
        btnProduct.innerHTML = "See more";
        moreProduct.style.display = "none";
    } else {
        collops.style.display = "none";
        btnProduct.innerHTML = "See less";
        moreProduct.style.display = "inline";
    }
}