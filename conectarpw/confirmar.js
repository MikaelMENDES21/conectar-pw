window.onload = () => {
    const formularios = document.querySelectorAll("td form");
    formulario.forEach(formulario => {
       formulario.submit = (evento) => {
          const resposta = confirm("Deseja excluir o item selecionado ?");
          if(resposta === false){
            evento.preventDefault();
          }
       };    
    });
};