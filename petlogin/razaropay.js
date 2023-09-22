function makepayment(){
    var name=$("#name").val();
    var amount=$("#amount").val();
    var options = {
"key": "rzp_test_rGlt2dtP8hvxGf", // Enter the Key ID generated from the Dashboard
"amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
"currency": "INR",
"name": name, //your business name
"description": "Test Transaction",
"image": "/razaropay/HRLogoCMYKsmallRGB.png",
//"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
"callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
"prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
    "name": "Gaurav Kumar", //your customer's name
    "email": "gaurav.kumar@example.com",
    "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
},
"notes": {
    "address": "Razorpay Corporate Office"
},
"theme": {
    "color": "#3399cc"
}
};
var rzp1 = new Razorpay(options);

rzp1.open();

}
// Wait for the DOM to be loaded before attaching the click event
document.addEventListener('DOMContentLoaded', function() {
    // Get the button element by its ID
    const navigateButton = document.getElementById('button2');

    // Add a click event listener to the button
    navigateButton.addEventListener('click', function() {
        // Replace 'target-page.html' with the URL of the page you want to navigate to
        const targetPageURL = '/shoppet/';

        // Navigate to the target page
        window.location.href = targetPageURL;
    });
});
