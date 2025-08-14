/*var nombre="Bruno"
let edad=17;
const PI=3.14;

if(edad >= 18){
    console.log("Mayor de edad");
}else{
    console.log("Menor de edad");
}

for(let i=0; i<5; i++){
    console.log(i);
}

/*while(condicion){
    //codigo
}*/

/*function saludar(nombre){
    return `Hola, ${nombre}!`;
}
function saludar( nombre) {
    return ` Hola, ${nombre}! ` ;
    }

const salud=(nombre) => `Hola, ${nombre}`;

console.log(saludar ("Bruno"));
console.log(salud("Bruno")); */

const PI= Math.PI;
Radio=prompt("Cuanto mide el radio", "");
 let Radionum=parseInt(Radio);
function CalcRad(radio) {
    let area=PI*(radio^2);
    let perimetro=(radio*2)*PI;
    let eq= {};
    eq.area=area;
    eq.perimetro=perimetro;
    return eq;
}

console.log(CalcRad(Radionum));

An=prompt("Cuanto mide el ancho", "");
Al=prompt("Cuanto mide el alto", "");
let Annum=parseInt(An);
let Alnum=parseInt(Al);
function CalcRect(ancho, alto) {
    let area=ancho*alto;
    let perimetro=2*(ancho+alto);
    let eq ={}
    eq.area=area;
    eq.perimetro=perimetro;
    return eq
}
console.log(CalcRect(Annum, Alnum));

  