class resultado {
  constructor(imagen, texto,link) {
    //Registra el path de la imagen, una cadena de texto y un hipervínculo en this
    this.imagen = imagen;
    this.texto = texto,
    this.link = link;
  }

  elemento() {
    //Crea un article para contener la noticia
    let articulo = document.createElement("article"),
      //Crea un img para asociarlo al article con la imagen que está en this
      img = document.createElement("img"),
      //Crea un párrafo para asociarlo al article con el texto que está en this
      parrafo = document.createElement("p"),
      //Crea un elemento para poner un hipervínculo
      a = document.createElement("a");

    img.setAttribute("src", this.imagen);
    parrafo.innerHTML = this.texto;

    a.innerText = "aqui";
    a.setAttribute("href", this.link);
    a.setAttribute("target", "_blank"); //Se abrirá el enlace en una página en blanco
    parrafo.appendChild(a);

    articulo.classList.add("resultado");
    articulo.appendChild(img);
    articulo.appendChild(parrafo);

    //retorna un article resultado que contiene una imagen y un texto
    return articulo;
  }
}
