const tbl = new Array([1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16])
console.table(tbl)



//questão 1
var questao1 = tbl[0][0] + tbl[1][0] + tbl[2][0] + tbl[3][0]
console.log("Questão 1: " + questao1)




//questão 2
var line = tbl[0]
var qst2 = 0
var product = 1




for(var i = 0; i < line.length; i++) {
    product = product * line[i]
    qst2 = product
}
console.log("Questão 2: " + qst2)



//questão 3
var qst3 = 0



for(var i = 0; i < tbl.length; i++) {
    for( var j = 0; j < tbl.length;  j++) {
        qst3 += tbl[i][j]
    }
}
console.log("questão 3: " + qst3)



//questão 4
var qst4 = 0
var product2 = 1

for (var i = 0; i < tbl.length; i++) {
    for (var j = 0; j < tbl[i].length; j++) {
    if (i == j) 
    product2 = product2 * tbl[i][j];
    qst4  = product2
    
            }
        }
              
console.log("Questão 4: " + qst4)