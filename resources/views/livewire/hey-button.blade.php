<div>
    <div class="wrapper_hey">
        <button class="boton_hey" onclick="openModal()">
            <x-icon-mano />
        </button>
        <div class="text_hey">
            <h3>Hey!</h3>
        </div>
    </div>
    <div class="modal" id="modalForm">
        <form action="" class="form_modal">
            <div class="title_form">
                <h2 class="title1">Hey,</h2>
                <h2 class="title2">¡qué bueno verte aqui!</h2>
            </div>
            <div class="input_email">
                <input type="email" name="correo" id="correo" placeholder="Tu correo electrónico">
            </div>
            <div class="input_nombre_telefono">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
            </div>
            <div class="input_coment">
                <input type="text" name="comentario" id="comentario" placeholder="Cuéntanos quién eres y lo que necesitas">
            </div>
            <div class="input_submit_info1">
                <input type="submit" id="submitBtn" value="ENVIAR">
                <div class="wrapper_info">
                    <p><a href="mailto:info@111.com.ec">info@111.com.ec</a></p>
                    <p>+(593)46024136</p>
                </div>
            </div>
            <div class="redes_info2">
                <div class="wrapper_redes">
                    <a href="https://www.facebook.com/111studioec" target="_blank">
                        <x-icon-facebook />
                    </a>
                    <a href="https://www.instagram.com/111studio/" target="_blank">
                        <x-icon-instagram />
                    </a>
                </div>
                <div class="wrapper_info">
                    <p>Victor Emilio Estrada #114</p>
                    <p>y Bálsamos.Edif.Celebrity, Of 210. Guayaquil-Ecuador</p>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
    <script>
        const modalForm = document.querySelector('#modalForm');

        const openModal = () => {
            modalForm.style.display = 'flex';
            modalForm.style.animation="none"
        }

        const closeModal = () => {
            modalForm.style.display = "none";
        }

        modalForm.onclick = (e) =>{
            if(e.target == modalForm){
                closeModal();
            }
        }
    </script>
@endpush
