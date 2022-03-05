function geradorpdf(){
    var captura_dados = document.getElementById('form1').innerHTML;

    var janela = window.open('','','width = 800px', 'height = 600px');
    janela.document.write("<html><head><title>Questionário</title></head>");
    janela.document.write("<body>");
    janela.document.write(captura_dados);
    janela.document.write("</body></html>");
    janela.document.close();
    janela.print();
}