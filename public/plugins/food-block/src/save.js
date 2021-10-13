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
      <div className="container mx-auto px-10">
        <div className="flex flex-col lg:flex-row items-center gap-0 md:gap-14 space-y-14 lg:space-y-0">
          <div className="w-full lg:w-1/2 flex justify-center lg:justify-start">
            <img
              src="http://159.89.96.200/wp-content/uploads/2021/10/Mat-1.png"
              alt="Mat på Rudolf Steinerskolan"
              className="w-full h-auto lg:w-[490px]"
            />
          </div>
          <div className="w-full lg:w-1/2">
            <h3 className="text-4xl text-schoolGreen mb-12">Skolköket</h3>
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
              <div className="flex justify-end font-black uppercase text-base">
                <p className="inline-flex">
                  Läs mer om köket här
                  <span className="inline-flex ml-4">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                      />
                    </svg>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div className="flex flex-col lg:flex-row items-center gap-0 md:gap-14 space-y-14 lg:space-y-0 mt-24">
          <div className="w-full lg:w-1/2 self-end order-last mt-24 lg:mt-0 lg:order-none">
            <div className="text-anotherGreen text-xl">
              <p className="mb-16">
                Vi prioriterar biodynamisk odling och låter barnen vara
                delaktiga i processen. Målet är att laga enkel, god och
                näringsriktig mat så att eleverna på Rudolf Steinerskolan,
                förskolan och fritids känner sig både mätta och nöjda efter
                skollunch och mellanmål.
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
          <div className="w-full lg:w-1/2 flex justify-center lg:justify-end">
            <img
              src="http://159.89.96.200/wp-content/uploads/2021/10/mat3.png"
              alt="Mat på Rudolf Steinerskolan"
              className="w-full h-auto lg:w-[580px]"
            />
          </div>
        </div>
      </div>
    </section>
  );
}
