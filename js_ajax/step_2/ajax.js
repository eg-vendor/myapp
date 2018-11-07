

document.addEventListener ('DOMContentLoaded',ajaxInitialise);

function ajaxInitialise ( ) {
    document.querySelector('#fetch').addEventListener('click',ajaxExecute);
    console.log ('ajaxInitialise() completed');
}

function ajaxExecute (evt) {
    evt.preventDefault ();
    // Invoke the AJAX function
    ajaxGet (4,'./payload.php') .then (ajaxSuccess,ajaxFailure)
    console.log ('ajaxExecute() completed');
}

function ajaxGet (timeout,url) {
    console.log ('ajaxGet() returning promise');
    return new Promise (
        function (succeeded,failed) {
            if (0==0) {
                succeeded ('Hooray!');
            }
            else {
                failed ('Boo!');
            }
        }
    );
}

function ajaxFailure (status) {
    console.log ('ajaxFailure(): status='+status);
    console.log ('ajaxFailure() completed');
}

function ajaxSuccess (payload) {
    console.log ('ajaxSuccess(): payload='+payload);
    document.querySelector('#payload').innerHTML = payload;
    console.log ('ajaxSuccess() completed');
}

