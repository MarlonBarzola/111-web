<div x-data="{ open: false }">
    <div class="wrapper_hey">
        <button class="boton_hey" x-on:click="open = !open">
            <x-icon-mano />
        </button>
        <div class="text_hey">
            <h3>Hey!</h3>
        </div>
    </div>
    <div class="modal" id="modalForm" x-bind:class="open ? 'open' : ''">

        <div class="close_modal" @click="open = false"></div>

        <form class="form_modal" wire:submit.prevent="submit">
            @csrf
            <div class="title_form">
                <h2 class="title1">Hey,</h2>
                <h2 class="title2">¡qué bueno verte aquí!</h2>
            </div>
            @if (!$sended)
                <div>
                    <div class="input_email">
                        <input type="email" placeholder="Tu correo electrónico" wire:model.defer="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input_nombre_telefono">
                        <label>
                            <input type="text" placeholder="Nombre" wire:model.defer="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>

                        <label>
                            <input type="text" placeholder="Teléfono" wire:model.defer="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>

                    </div>
                    <div class="input_coment">
                        <textarea cols="30" rows="3" placeholder="Cuéntanos quién eres y lo que necesitas" wire:model.defer="body"></textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @else
                <p>¡Tu mensaje se envió correctamente!</p>
            @endif

            <div class="input_submit_info1">
                @if (!$sended)
                    <input type="submit" id="submitBtn" value="ENVIAR" wire:loading.attr="disabled">
                @endif
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
