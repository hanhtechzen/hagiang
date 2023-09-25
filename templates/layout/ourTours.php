<section class="wrap-taisao py-[50px] bg-white pb-[35px] bg-no-repeat">
    <div class="container">
        <div class="title-chill-tour text-center mb-[37px]">
            <p class="uppercase text-[40px] capitalize font-Viaoda">Our Tours</p>
        </div>
    </div>
    <div style="gap:20px" class="w3-bar w3-black flex w-full justify-center !gap-[20px] ">
        <div id='London1'
            style='cursor:pointer;font-weight: 600; border-radius: 40px !important; background:#ec1d2f ;color: #000000'
            class=" px-[30px] py-[10px] rounded rounded-2xl" onclick="openCity('London')">
            <p style='font-size: 20px' class='text-[23px]'>4
                days 3 night</p>
        </div>
        <div id='Paris1'
            style='cursor:pointer;font-weight: 600; border-radius: 40px !important; background:#ddd ;color: #FFFFFF'
            class="text-[23px] px-[30px] py-[10px] rounded rounded-2xl" onclick="openCity('Paris')">
            <p style='font-size: 20px' class='text-[23px]'>3 days
                2 night</p>
        </div>
    </div>

    <div id="London" class="w3-container city text-center">
        <h2>London</h2>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="w3-container city text-center" style="display:none">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>

    <script>
        var selected = 'London'
        var ids = ['London1', 'Paris1']
        function openCity(cityName) {
            var London1 = document.getElementById("London1");
            var Paris1 = document.getElementById("Paris1");
            if (cityName === 'London') {
                London1.style.background = "#ec1d2f";
                London1.style.color = "#000000";
            } else {
                London1.style.background = "#ddd";
                London1.style.color = "#FFFFFF";

            }
            if (cityName === 'Paris') {
                Paris1.style.background = "#ec1d2f";
                Paris1.style.color = "#000000";
            } else {
                Paris1.style.background = "#ddd";
                Paris1.style.color = "#FFFFFF";

            }
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            selected = cityName
            document.getElementById(cityName).style.display = "block";
        }
    </script>

</section>