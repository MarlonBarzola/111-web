<div class="container_menu {{$open_menu}}" id="menu">
    <div class="icon_exit" wire:click="closeMenu">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0"
            viewBox="0 0 511.991 511.991" style="enable-background:new 0 0 512 512" xml:space="preserve">
            <g>
                <g xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M286.161,255.867L505.745,36.283c8.185-8.474,7.951-21.98-0.523-30.165c-8.267-7.985-21.375-7.985-29.642,0   L255.995,225.702L36.411,6.118c-8.475-8.185-21.98-7.95-30.165,0.524c-7.985,8.267-7.985,21.374,0,29.641L225.83,255.867   L6.246,475.451c-8.328,8.331-8.328,21.835,0,30.165l0,0c8.331,8.328,21.835,8.328,30.165,0l219.584-219.584l219.584,219.584   c8.331,8.328,21.835,8.328,30.165,0l0,0c8.328-8.331,8.328-21.835,0-30.165L286.161,255.867z"
                        fill="#ffffff" data-original="#000000" />
                </g>
            </g>
        </svg>
    </div>
    <div class="menu_logo">
        <x-icon-111 />
    </div>
    <div class="menu_elements">
        <a href="#" class="element_menu" wire:click.prevent="resetPage">HOME</a>
        <a href="#" class="element_menu" wire:click.prevent="menuFunction('servicios')">SERVICIOS</a>
        <a href="#" class="element_menu" wire:click.prevent="menuFunction('trabajos')">PORTAFOLIO</a>
        <a href="#" class="element_menu" wire:click.prevent="menuFunction('equipo')">EQUIPO</a>
        <a href="https://www.instagram.com/111studio/" target="_blank" class="element_menu" wire:click="closeMenu">INSTAGRAM</a>
    </div>
    <div class="menu_frase">
        <x-icon-we-can-do />
    </div>
</div>
