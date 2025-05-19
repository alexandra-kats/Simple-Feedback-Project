document.getElementById("feedbackForm").addEventListener("submit",function(event) {
    var message=document.getElementById("message").ariaValueMax.trim();

    if(message ===""){
        alert("Please write your message.");
        event.preventDefault();
    }
});