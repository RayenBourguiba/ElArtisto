"use strict";
/* basic JavaScript form validation */
function validateForm() {
    var form 	=  document.forms.commentForm,
        x 		= form.author.value,
        y 		= form.email.value,
        z 		= form.comment.value,
        flag 	= true,
        field1 		= document.getElementById("field1"),
        field2 		= document.getElementById("field2"),
        field3 		= document.getElementById("field3");

    if (x === null || x === "") {
        field1.innerHTML = comment_data.name;
        flag = false;
    } else {
        field1.innerHTML = "";
    }

    if (y === null || y === "") {
        field2.innerHTML = comment_data.email;
        flag = false;
    } else {
        field2.innerHTML = "";
    }

    if (z === null || z === "") {
        field3.innerHTML = comment_data.comment;
        flag = false;
    } else {
        field3.innerHTML = "";
    }

    if (flag === false) {
        return false;
    }

}