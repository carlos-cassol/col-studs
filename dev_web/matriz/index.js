const matriz =      [ [1,2,3, 4],
                      [5,6,7,8],
                      [9,10,11,12],
                      [13,14,15,16] ];


const a = matriz[00][00] 
const b = matriz[00][01] 
const c = matriz[00][02] 
const d = matriz[00][03] 


const aa = matriz[01][00] 
const bb = matriz[01][01] 
const cc = matriz[01][02] 
const dd = matriz[01][03] 

const aaa = matriz[02][00] 
const bbb = matriz[02][01] 
const ccc = matriz[02][02] 
const ddd = matriz[02][03] 

const ab = matriz[03][00] 
const bc = matriz[03][01] 
const cd = matriz[03][02] 
const de = matriz[03][03] 
//soma da primeira linha
var soma = a + b + c + d
console.log(soma);
//produto da primeira linha

var soma = a * b * c * d
console.log(soma);
//soma de tudo
var soma = a + b + c + d + aa + bb + cc + dd + aaa + bbb + ccc + ddd + ab + bc + cd + de
console.log(soma);

//produto diagonal principal
const somap = a * bb * ccc * de
console.log(somap);