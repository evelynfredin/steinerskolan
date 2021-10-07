import React from "react";
import ReactDOM from "react-dom";

const divsToUpdate = document.querySelectorAll(".quickIcons");

divsToUpdate.forEach(function (div) {
  const data = JSON.parse(div.querySelector("pre").innerHTML);
  ReactDOM.render(<IconBlock />, div);
  div.classList.remove("quickIcons");
});

function IconBlock() {
  return (
    <section className="iconBlock">
      <a href="#">
        <div>
          <img
            src="http://159.89.96.200/uploads/2021/10/location.svg"
            alt="Hitta hit"
          />
          <p>Hitta hit</p>
        </div>
      </a>
      <a href="#">
        <div>
          <img
            src="http://159.89.96.200/uploads/2021/10/calendar.svg"
            alt="Kalendarium"
          />
          <p>Kalendarium</p>
        </div>
      </a>
      <a href="#">
        <div>
          <img
            src="http://159.89.96.200/uploads/2021/10/idunsoft.svg"
            alt="Idunsoft"
          />
          <p>Idunsoft</p>
        </div>
      </a>
    </section>
  );
}
