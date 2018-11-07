

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

function ajaxGet (timeoutSecs,payloadUrl) {
    console.log ('ajaxGet() returning promise');
    return new Promise (
        function (succeeded,failed) {
            // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
            // Create a (local scope )request object with the right timeout and open it
            // Supporting old browsers requires onreadystatechange handler; here we are being modern
        var xhr             = new XMLHttpRequest ();
            xhr.open ('GET',payloadUrl);
            xhr.timeout     = 1000 * timeoutSecs;
            console.log ('ajaxGet(): set timeout to '+xhr.timeout);
            // Not a valid response and not a timeout error
            xhr.onerror     = function ( ) {
                console.log ('xhr.onerror(): FIRED');
                failed ({status:999,statusText:'Could not connect or unknown error'});
            };
            // Valid server response (including all server errors)
            xhr.onload      = function ( ) {
                console.log ('xhr.onload(): FIRED');
                if (xhr.status==200) {
                    // Successful request
                    succeeded (xhr.responseText);
                }
                else {
                    failed ({status:xhr.status,statusText:xhr.statusText});
                }
            };
            // Server found and accepted connection but did not respond in a timely manner
            xhr.ontimeout   = function ( ) {
                console.log ('xhr.ontimeout(): FIRED');
                failed ({status:999,statusText:'Request timed out'});
            };
            // Make the request
            xhr.send ();
        }
    );
}

function ajaxFailure (statusObject) {
    console.log ('ajaxFailure(): '+statusObject.status+' '+statusObject.statusText);
    console.log ('ajaxFailure() completed');
}

function ajaxSuccess (payload) {
    console.log ('ajaxSuccess(): payload='+payload);
    document.querySelector('#payload').innerHTML = payload;
    console.log ('ajaxSuccess() completed');
}

