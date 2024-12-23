function reverseNumber(num) {
    let reversed = num.toString().split('').reverse().join('');
    return parseFloat(reversed) * Math.sign(num); 
}
console.log(reverseNumber(12345));    
console.log(reverseNumber(1010101));    
    
