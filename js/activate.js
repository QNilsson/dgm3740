// JavaScript Document
/* jslint browser:true */
"use strict";
let found = false;
(function () {
let elements = document.querySelectorAll("#primaryNav li a");
let getPageName = function (str) {
    let queryIgnore = /\/+|[?\#].*$/;
    let parts = str.split(queryIgnore);
    let pageName;
    while (!pageName && parts.length) pageName = parts.pop();
    return pageName;
};
let setParent = function (element) {
    let listElement = element.parentNode;
    if (listElement.tagName == "UL" && listElement.id != 'primaryNav') {
        listElement.parentNode.classList.add("parent");
    }
};
let pageName = getPageName(document.location.href);
console.log(pageName)
// if (pageName !== ""){
    for (let i = 0, len = elements.length; i < len; ++i) {
        let element = elements[i];
        let parent = element.parentNode;

        if (getPageName(element.getAttribute("href")) == pageName) {
            parent.classList.add("active");
            setParent(parent);
        }
        else {
            parent.classList.remove("active");
        }
    }
// }
if(pageName == "dgm3740.quinnnilsson.com") {
    console.log("hey")
    elements[0].parentNode.className="active";
}



})();
