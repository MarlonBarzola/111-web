<div id="loader">
    <div class="loading">
        <div class="wrapper">
            <div class="logo">
                <img src="images/111-studio.png" alt="111 Studio">
            </div>

            <div class="we_can_do">
                <x-we-can-do />
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        document.onreadystatechange = function() {
            let tl = gsap.timeline();
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loader").style.visibility = "visible";
                tl.from(".logo img", {
                    duration: 1,
                    y: 200
                });
                gsap.utils.toArray(".box").forEach(element => {
                    tl.from(element, {
                        y: 100,
                        duration: 0.1,
                    });
                });
            } else {
                document.querySelector("body").style.visibility = "visible";
                setTimeout(() => {
                    tl.to(".loading", {
                    duration: 1,
                    x: -100 + '%',
                    ease: "expo.inOut",
                    delay: 0.5
                    });
                    tl.to(".loading", {
                        display: "none"
                    });
                }, 2500);
                
            }
        };
    </script>

@endpush
