function convertCurrency() {
    let amount = document.getElementById("amount").value;
    let rate = document.getElementById("rate").value;
    let currency = document.getElementById("currency").value;

    if (amount === "" || rate === "") {
        alert("Please enter amount and rate");
        return;
    }

    let converted = amount / rate;

    document.getElementById("result").value =
        amount + " FRW = " + converted.toFixed(2) + " " + currency;
}