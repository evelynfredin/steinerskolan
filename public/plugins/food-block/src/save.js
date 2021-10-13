import React from "react";
import ReactDOM from "react-dom";

const divsToUpdate = document.querySelectorAll(".foodBlock");

divsToUpdate.forEach(function (div) {
  const data = JSON.parse(div.querySelector("pre").innerHTML);
  ReactDOM.render(<FoodBlock />, div);
  div.classList.remove("foodBlock");
});

function FoodBlock() {
  return (
    <section className="foodBlock bg-softGreen py-[150px]">
      <div className="container mx-auto px-10 lg:px-0">
        <div className="flex flex-col lg:flex-row lg:space-x-[130px] items-center space-y-14 lg:space-y-0">
          <img
            src="http://159.89.96.200/wp-content/uploads/2021/10/Mat-1.png"
            alt="Mat på Rudolf Steinerskolan"
            className="max-w-[480px] h-auto min-w-[230px]"
          />
          <div>
            <h3 className="text-4xl text-schoolGreen">Skolköket</h3>
            <div className="text-anotherGreen text-xl space-y-5">
              <p>
                I skolköket på Rudolf Steinerskolan ska det lagas god,
                näringsrik och i största möjliga utsträckning ekologisk mat.
                Just nu har vi cirka 90 % ekologiska och biodynamiska råvaror.
                Lunchen lagas från grunden, på färska råvaror i skolans kök.
              </p>
              <p>
                Maten ska påverka både de som äter den, miljön och världens
                resurser positivt. Att följa säsongen är en viktig del i
                matlagningen både för miljön och för smakernas skull. Främst
                serveras vegetarisk kost men kött och fisk förekommer också (1
                dag varje vecka har vi kött eller fisk). Varje vecka bakas eget
                bröd till soppan, ofta på surdeg.
              </p>

              <p>
                I köket finns engagerad personal som brinner för matlagning och
                fina råvaror. Köket är en integrerad del av skolans dagliga
                verksamhet och har som mål att se till allas behov, även de med
                specilkost.
              </p>
              <div className="flex justify-center">
                <a href="#">
                  <div className="bg-thirdBtn flex justify-center w-[267px] h-[64px]">
                    <p className="py-3 text-lighterGreen waldorf text-center text-2xl font-bold">
                      Meny
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
