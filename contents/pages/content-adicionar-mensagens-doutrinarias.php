<div id="adicionar-mensagens-doutrinarias" class="row mr-3 ml-3 flex-column">
    <div class="title-page">
        <h1>Adicionar Mensagens Doutrinárias</h1>
        <p>Adicione mensagens doutrinárias no site.</p>
    </div>

    <section>
        <form class="editor" value="">
            <div class="content-title d-flex flex-row justify-content-between">
                <input type="text" placeholder="Título:">
                <a href="" class="btn-si-action approved ml-3"><i class="flaticon flaticon-151-check"></i></a>
            </div>
            <textarea name="editor1" id="editor1" rows="10" cols="80">

            </textarea>
            <script>
                CKEDITOR.replace( 'editor1', {
                    language: 'pt-br'
                });
            </script>
        </form>
    </section>
</div>