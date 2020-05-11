function generateRecorrido(alto, ancho) {
    const total = alto * ancho;
    let cont = 1, recorrido = [], contColumn = 0;
    let obj = {};
    for (let i=0; i<=total;i++) {
        if (cont<=alto) {
            if  (cont === 1) {
                obj.inicio = i;
            }
            if (cont === alto) {
                obj.fin = i;
                recorrido.push(obj);
                cont = 1;
                obj = {};
            }
        } else {
            obj.inicio = i;
        }
        cont++;
    }
    return recorrido;
}

console.log(generateRecorrido(10, 10));
