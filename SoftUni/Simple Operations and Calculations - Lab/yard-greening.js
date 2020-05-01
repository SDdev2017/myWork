function greening(meters)
{
    let sum = meters * 7.61;
    let discount = 0.18 * sum;
    let totalSum = sum - discount;

    console.log("The final price is: " + totalSum.toFixed(2) + " lv.");
    console.log("The discount is: " + discount.toFixed(2) + " lv.")
}