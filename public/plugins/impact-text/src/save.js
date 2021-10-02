import React from "react";
import ReactDOM from "react-dom";

const divsToUpdate = document.querySelectorAll(".impactText");

divsToUpdate.forEach(function (h3) {
  const data = JSON.parse(h3.querySelector("pre").innerHTML);
  ReactDOM.render(<Test {...data} />, h3);
  h3.classList.remove("impactText");
});

function Test(props) {
  return <div>{props.showImpactText}</div>;
}
