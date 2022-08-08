<div>
   @push('js')
       <script>

            Livewire.on('changeOgProperty', query => {
                let urlWeb = document.querySelector('#urlWeb');
                if(query) { 
                    urlWeb.setAttribute('content', "{{Request::url()}}" + `/?pagina=${query}`);
                } else {
                    urlWeb.setAttribute('content', "{{Request::url()}}");
                }
            });
            
       </script>
   @endpush
</div>
