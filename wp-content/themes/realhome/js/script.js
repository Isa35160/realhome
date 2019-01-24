let author = document.getElementById('author');
if (author) {
    author.setAttribute("placeholder", "Nom");
}
let email = document.getElementById('email');
if (email) {
    email.setAttribute("placeholder", "Email");
}

let comment = document.getElementById('comment');
if (comment) {
    comment.setAttribute("placeholder", "Votre Message");
}

let submit = document.getElementById('submit');
if (submit) {
    submit.setAttribute("placeholder", "Envoyer");
}



let comment3 = document.getElementById('comment-3');
if (comment3) {
    comment3.classList.add("fas");
    comment3.classList.add("fa-angle-down");
}


let selector = '.villes_nav a';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});

