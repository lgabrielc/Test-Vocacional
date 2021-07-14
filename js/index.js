let testArray = [];

class index { // Creación de la clase
  // Método constructor
  constructor(bandera) { //Recibe una variable booleana
    document.querySelector("#btnEvaluar").addEventListener("click", (e) => { //Activando el evento del botón de Evaluar
      let l = this.iniciar(); // Recibir el valor de retorno del método iniciar()

      if (l != false && bandera != false) { // Condición para hacer conexión con Tau Prolog
        this.conectar(l); //Llamada al método conectar()
        bandera = false; // Si se respondió una vez se cambia el valor de la bandera
      }
      else{ // Caso contrario
        if (bandera == false) //Si ya se llenó el formulario mandará un mensaje emergente
          alert("Recargue la página");

        if (l == false) //Sino se han rellenado todas las preguntas se mandará un mensaje emergente
          alert("Rellene todas las preguntas");
      }

    });

    document.querySelector("#btnRecargar").addEventListener("click", (e) => { //Activando el evento del botón de Recargar
      window.location.reload(); // Instrucción para recargar la ventana de la página
    });
  }

  iniciar() { // Se obtienen todas las respuestas de los input radio
    let opciones = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; //Creación de lista de ceros
    // Declaración de variables
    let x = 0;
    let j = 0;
    // Opcion 1
    x = document.FORMP1.idP1;
    this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 2
    x = document.FORMP2.idP2;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 3
    x = document.FORMP3.idP3;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 4
    x = document.FORMP4.idP4;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 5
    x = document.FORMP5.idP5;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 6
    x = document.FORMP6.idP6;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 7
    x = document.FORMP7.idP7;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 8
    x = document.FORMP8.idP8;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 9
    x = document.FORMP9.idP9;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 10
    x = document.FORMP10.idP10;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 11
    x = document.FORMP11.idP11;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 12
    x = document.FORMP12.idP12;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 13
    x = document.FORMP13.idP13;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 14
    x = document.FORMP14.idP14;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 15
    x = document.FORMP15.idP15;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 16
    x = document.FORMP16.idP16;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 17
    x = document.FORMP17.idP17;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 18
    x = document.FORMP18.idP18;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 19
    x = document.FORMP19.idP19;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;
    // Opcion 20
    x = document.FORMP20.idP20;
    opciones = this.devolverOpcion(x, opciones, j);
    j++;

    //Se comprueba si todas las opciones son diferentes de 0, y entre los rangos
    if (this.comprobar_opciones(opciones)) return opciones; //Si es correcto se devuelve la lista
    else return false; //Si se encontraron valores no permitidos, se retorna false
  }

  comprobar_opciones(opciones) {
    let count = 0;
    for (let i = 0; i < opciones.length; i++) {
      if (opciones[i] == 0) count++; // Condición para verificar ceros
    }

    if (count == 0) return true; //Sino hay ceros se devuelve true
    else return false; //Si se encuentran ceros se devuelve false
  }

  devolverOpcion(x, opciones, j) {
    for (let i = 0; i < x.length; i++) {
      if (x[i].checked) { // Verificar que el item esté seleccionado
        opciones[j] = x[i].value; //Asignar el valor del input radio a la lista
      }
    }
    return opciones;
  }

  conectar(l) {
    let session = pl.create(); //Crear la sesión
    let test = new testVocacional(); //Instanciación de la clase

    //Cargar el programa
    let program = test.program;
    //Consultar
    session.consult(program);
    //Realizar una pregunta
    session.query(
      // Regla: principal(L, C1, C2, C3, C4, C5, C6, C7, C8, C9). Donde L es la lista de opciones
      "principal(["+l[0]+","+l[1]+","+l[2]+","+l[3]+","+l[4]+","+l[5]+","+l[6]+","+l[7]+","+l[8]+","+l[9]+","+
                    l[10]+","+l[11]+","+l[12]+","+l[13]+","+l[14]+","+l[15]+","+l[16]+","+l[17]+","+l[18]+","+l[19]+
                    "], C1, C2, C3, C4, C5, C6, C7, C8, C9)."
    );
    // Encontrar la respuesta
    session.answers(this.show(), 10000);
  }

  show() {
    //Retorna una función callback
    return function (answer) {
      // Validando la respuesta
      if (pl.type.is_substitution(answer)) {
        let puntuaciones = [0, 0, 0, 0, 0, 0, 0, 0, 0];
        // Obtener el valor de C1
        let C1 = answer.lookup("C1");
        // Mostrar respuesta en consola
        puntuaciones[0] = parseInt(C1.toString());
        console.log(puntuaciones[0]);
        // Obtener el valor de C2
        let C2 = answer.lookup("C2");
        // Mostrar respuesta por consola
        puntuaciones[1] = parseInt(C2.toString());
        console.log(puntuaciones[1]);
        // Obtener el valor de C3
        let C3 = answer.lookup("C3");
        // Mostrar respuesta por consola
        puntuaciones[2] = parseInt(C3.toString());
        console.log(puntuaciones[2]);
        // Obtener el valor de C4
        let C4 = answer.lookup("C4");
        // Mostrar respuesta por consola
        puntuaciones[3] = parseInt(C4.toString());
        console.log(puntuaciones[3]);
        // Obtener el valor de C5
        let C5 = answer.lookup("C5");
        // Mostrar respuesta por consola
        puntuaciones[4] = parseInt(C5.toString());
        console.log(puntuaciones[4]);
        // Obtener el valor de C6
        let C6 = answer.lookup("C6");
        // Mostrar respuesta por consola
        puntuaciones[5] = parseInt(C6.toString());
        console.log(puntuaciones[5]);
        // Obtener el valor de C7
        let C7 = answer.lookup("C7");
        // Mostrar respuesta por consola
        puntuaciones[6] = parseInt(C7.toString());
        console.log(puntuaciones[6]);
        // Obtener el valor de C8
        let C8 = answer.lookup("C8");
        // Mostrar respuesta por consola
        puntuaciones[7] = parseInt(C8.toString());
        console.log(puntuaciones[7]);
        // Obtener el valor de C9
        let C9 = answer.lookup("C9");
        // Mostrar respuesta por consola
        puntuaciones[8] = parseInt(C9.toString());
        console.log(puntuaciones[8]);

        testArray = [ ...puntuaciones ]

        //Función para mostrar los resultados
        function mostrarResultados(puntuaciones) {
          //Mis elementos resultado

          // Creación del elemento Ing. Ambiental
          let r1 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Ambiental</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[0] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-ambiental/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. Bioquímica
            r2 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Bioquímica</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[1] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-bioquimica/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. Civil
            r3 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Civil</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[2] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-civil/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. Electromecánica
            r4 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Mecánica</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[3] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-electronica/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. en Gestión Empresarial
            r5 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Gestión</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[4] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/administracion-de-empresas/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. Industrial
            r6 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Industrial</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[5] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-industrial/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. Petrolera
            r7 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Petrolera</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[6] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-petroquimica/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. en Sistemas Computacionales
            r8 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Sistemas</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[7] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-de-sistemas/" //Hipervínculo de la página de la carrera
            ),
            // Creación del elemento Ing. en Tecnologías de la Información y Comunicaciones
            r9 = new resultado(
              "", //Cargar la imagen de la carrera
              "<span class='carrera'> Ing.Redes</span>:\nEl porcentaje que aplica a esta carrera es del: <span class='porcentaje'>" +
                puntuaciones[8] + "</span>/100%" + //Asignar el porcentaje
                "\nPara más información sobre la carrera pulse ",
              "https://estudiaperu.pe/carrera-pregrado/ingenieria-en-telecomunicaciones/" //Hipervínculo de la página de la carrera
            ),
            // Recuperando del DOM el elemento "main"
            main = document.querySelector("main");

          //Declaración de variables auxiliares
          let aux = 0,
            auxResult = 0,
            count = 0,
            n = puntuaciones.length;
          //Listar los objetos resultado
          let listaResult = [r1, r2, r3, r4, r5, r6, r7, r8, r9];

          //Método de ordenamiento burbuja para ordenar de menor a mayor
          for (let i = 0; i < 8; i++) {
            n--;
            for (let j = 0; j < n; j++) {
              if (puntuaciones[j] >= puntuaciones[j + 1]) {
                aux = puntuaciones[j];
                puntuaciones[j] = puntuaciones[j + 1];
                puntuaciones[j + 1] = aux;
                auxResult = listaResult[j];
                listaResult[j] = listaResult[j + 1];
                listaResult[j + 1] = auxResult;
              }
            }
          }
          //Añadiendo nuevos hijos al elemento "main" de mayor a menor
          main.appendChild(listaResult[8].elemento());
          main.appendChild(listaResult[7].elemento());
          main.appendChild(listaResult[6].elemento());
          main.appendChild(listaResult[5].elemento());
          main.appendChild(listaResult[4].elemento());
          main.appendChild(listaResult[3].elemento());
          main.appendChild(listaResult[2].elemento());
          main.appendChild(listaResult[1].elemento());
          main.appendChild(listaResult[0].elemento());

          const formulario = document.querySelector('#formGuardar');
          formulario.style.display = 'block';

          // listaResult.forEach(el=>{
          //   console.log(el.texto);
          // });
        }
        //Llamar a la función
        mostrarResultados(puntuaciones);
        // const nodo = document.querySelector('.resultado');
        // const dato = nodo.querySelector('p');

        // const formulario = document.querySelector('#formGuardar');
        // formulario.style.display = 'block';

        // const carrera = document.querySelector('#carrera');
        // const porcentaje = document.querySelector('#porcentaje')

        // let mayor = Math.max( ...testArray );

        // carrera.value = dato.firstChild.textContent;
        // porcentaje.value = parseInt(mayor);

        const articulos = document.querySelectorAll('.resultado');

        const datos = [ ...articulos ];

        let carreras = {};
        
        datos.forEach(el=>{
          let carrera = el.querySelector('.carrera');
          let porcentaje = el.querySelector('.porcentaje');

          // console.log(carrera.innerText, porcentaje.innerText);

          carreras[ carrera.innerText ] = porcentaje.innerText;

        });
        let i = 1;

        for (const property in carreras) {
          document.querySelector('#carrera'+i).value = property;
          document.querySelector('#porcentaje'+i).value = carreras[property];
          i++;
        }
      }
    };
  }
}

window.onload = () => new index(true); //Se crea la instancia de la clase cuando la ventana de la página
                                      // Termine de cargar.
