<x-layout_home>
    <style type="text/css">
        p{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1rem;
        }
        #contato_form{
            padding-top: 150px;
            width:500px;
            min-height:100vh;
            color:#999;
            margin:auto;
        }
        .textArea{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        .asteristico{
            color:#F00;
        }
    </style>

    <div id="contato_form">
        <form action="enviar.php" name="form_contato" method="post" >
            <p class="titulo"><small class="asteristico">*Campos Obrigatorios</small></p>
            <table align="center">
                <tr>
                    <td>Nome:<sup class="asteristico">*</sup></td>
                    <td>
                        <input type="text" name="nome" maxlength="40" />
                    </td>
                </tr>
                <tr>
                    <td>E-mail:<sup class="asteristico">*</sup></td>
                    <td>
                        <input type="email" name="email" maxlength="30" />
                    </td>
                </tr>
                <br>
                <tr>
                    <td>Telefone/<br>WhatsApp:<sup class="asteristico">*</sup></td>
                    <td>
                        <input type="text" name="telefone" maxlength="14" />
                    </td>
                </tr>

                <tr class="textArea">
                    <td>Mensagem:<sup class="asteristico">*</sup></td>
                    <td>
                        <textarea name="msg" cols="60" rows="10"></textarea>
                    </td>
                </tr>
                <tr >
                    <td colspan="2">
                        <input type="reset" class="campo_submit" value="Limpar" />
                        <input type="submit" class="campo_submit" value="Enviar" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2"style="align-items:flex-end"><small class="asteristico">* Campos obrigatorios</small></td>
                </tr>
            </table>
        </form>
    </div>

</x-layout_home>
