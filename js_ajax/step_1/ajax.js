

// https://developer.mozilla.org/en-US/docs/Web/Events/DOMContentLoaded
document.addEventListener ('DOMContentLoaded',ajaxInitialise);

function ajaxInitialise ( ) {
    // https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector
    document.querySelector('#fetch').addEventListener('click',ajaxExecute);
    console.log ('ajaxInitialise() completed');
}

function ajaxExecute (evt) {
    // https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
    evt.preventDefault ();
    console.log ('ajaxExecute() completed');
}

